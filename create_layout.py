import os
import re

VIEWS_DIR = 'c:/laragon/www/almalatlar/resources/views'
LAYOUT_DIR = os.path.join(VIEWS_DIR, 'layouts')

# Use wireless-solutions as the reference for layout extraction
REFERENCE_FILE = os.path.join(VIEWS_DIR, 'service', 'wireless-solutions.blade.php')

def read_file(path):
    with open(path, 'r', encoding='utf-8') as f:
        return f.read()

def write_file(path, content):
    os.makedirs(os.path.dirname(path), exist_ok=True)
    with open(path, 'w', encoding='utf-8', newline='\n') as f:
        f.write(content)

def split_page(content):
    """Split a blade file into its component parts."""

    # 1. Extract title
    title_match = re.search(r'<title>(.*?)</title>', content, re.DOTALL)
    title = title_match.group(1).strip() if title_match else ''

    # 2. Find the </head> position
    head_end_pos = content.find('</head>')
    if head_end_pos == -1:
        return None

    # The line containing </head> has per-page dynamic CSS
    # Find the start of this last line before </head>
    line_start = content.rfind('\n', 0, head_end_pos) + 1
    head_extra = content[line_start:head_end_pos].strip()  # page-specific CSS before </head>

    # The shared head content is from start to line_start (exclusive)
    shared_head_raw = content[:line_start]

    # Replace <title>...</title> with @yield('title')
    shared_head = re.sub(r'<title>.*?</title>', "<title>@yield('title')</title>", shared_head_raw, flags=re.DOTALL)

    # Remove HTTrack comments
    shared_head = re.sub(r'\n<!-- Mirrored from.*?-->\n', '\n', shared_head, flags=re.DOTALL)
    shared_head = re.sub(r'<!-- Added by HTTrack -->.*?<!-- /Added by HTTrack -->', '', shared_head, flags=re.DOTALL)

    # 3. Extract body class
    body_match = re.search(r'<body class="([^"]*)"', content)
    body_class = body_match.group(1).strip() if body_match else ''

    # 4. Find content boundaries
    # Content starts after </header>
    header_end_pos = content.find('</header>')
    if header_end_pos == -1:
        return None
    content_start = header_end_pos + len('</header>')

    # Content ends before <footer id="colophon"
    footer_start_pos = content.find('<footer id="colophon"')
    if footer_start_pos == -1:
        return None

    page_content = content[content_start:footer_start_pos]

    # 5. Shared footer: from <footer id="colophon" to end
    shared_footer = content[footer_start_pos:]

    # 6. Shared header body: from </head>\n\n<body... to </header>
    # We need to find the <body class=...> line
    body_pos = content.find('<body class=', head_end_pos)
    body_line_end = content.find('\n', body_pos) + 1
    shared_header_body = content[body_line_end:header_end_pos + len('</header>')]

    return {
        'title': title,
        'head_extra': head_extra,
        'body_class': body_class,
        'content': page_content,
        'shared_head': shared_head,
        'shared_header_body': shared_header_body,  # loader + nav
        'shared_footer': shared_footer,
    }

# Process reference file to extract shared parts
print(f"Processing reference file: {REFERENCE_FILE}")
ref_content = read_file(REFERENCE_FILE)
ref_parts = split_page(ref_content)

if ref_parts is None:
    print("ERROR: Could not parse reference file!")
    exit(1)

# Create layout file
layout_content = ref_parts['shared_head']
layout_content += "\n@yield('head_extra')\n</head>\n\n"
layout_content += "<body class=\"@yield('body_class')\">\n"
layout_content += ref_parts['shared_header_body']
layout_content += "@yield('content')\n"
layout_content += ref_parts['shared_footer'].rstrip('\n')
layout_content += "\n"

# Replace the body_class in shared_header_body section of layout
# (it already has the correct placeholder since we built it from shared parts)

os.makedirs(LAYOUT_DIR, exist_ok=True)
layout_path = os.path.join(LAYOUT_DIR, 'app.blade.php')
write_file(layout_path, layout_content)
print(f"Created layout: {layout_path}")

# Now process all blade files
def get_all_blade_files():
    files = []
    for root, dirs, filenames in os.walk(VIEWS_DIR):
        # Skip layouts dir
        if 'layouts' in root:
            continue
        for filename in filenames:
            if filename.endswith('.blade.php') and filename not in ['welcome.blade.php']:
                files.append(os.path.join(root, filename))
    return files

blade_files = get_all_blade_files()
print(f"\nProcessing {len(blade_files)} blade files...")

success = 0
failed = 0

for filepath in blade_files:
    try:
        content = read_file(filepath)
        parts = split_page(content)

        if parts is None:
            print(f"  SKIP (no header/footer found): {filepath}")
            failed += 1
            continue

        # Build the new blade content
        new_content = "@extends('layouts.app')\n\n"
        new_content += f"@section('title', '{parts['title']}')\n\n"

        if parts['head_extra']:
            new_content += "@section('head_extra')\n"
            new_content += parts['head_extra'] + "\n"
            new_content += "@endsection\n\n"

        if parts['body_class']:
            new_content += f"@section('body_class', '{parts['body_class']}')\n\n"

        new_content += "@section('content')\n"
        new_content += parts['content']
        new_content += "@endsection\n"

        write_file(filepath, new_content)
        rel_path = os.path.relpath(filepath, VIEWS_DIR)
        print(f"  OK: {rel_path}")
        success += 1

    except Exception as e:
        print(f"  ERROR {filepath}: {e}")
        failed += 1

print(f"\nDone! {success} converted, {failed} failed/skipped.")
