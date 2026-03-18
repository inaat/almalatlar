<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel - @yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body { background: #f4f6f9; }
        .sidebar {
            width: 250px; height: 100vh;
            background: #1e2a38;
            position: fixed; top: 0; left: 0;
            z-index: 100; padding-top: 0;
            overflow-y: auto;
        }
        .sidebar-brand {
            padding: 1.2rem 1.5rem;
            background: #16202c;
            color: #fff;
            font-weight: 700; font-size: 1.1rem;
            display: flex; align-items: center; gap: .5rem;
        }
        .sidebar .nav-link {
            color: #b0bec5; padding: .65rem 1.5rem;
            display: flex; align-items: center; gap: .75rem;
            font-size: .92rem; border-radius: 0;
            transition: background .15s, color .15s;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background: #2c3e50; color: #fff;
        }
        .sidebar .nav-section {
            padding: .75rem 1.5rem .25rem;
            font-size: .7rem; text-transform: uppercase;
            letter-spacing: .08em; color: #607d8b;
        }
        .main-content {
            margin-left: 250px;
            min-height: 100vh;
        }
        .topbar {
            background: #fff;
            border-bottom: 1px solid #e9ecef;
            padding: .75rem 1.5rem;
            display: flex; align-items: center; justify-content: space-between;
        }
        .content-area { padding: 1.5rem; }
        .card { border: none; box-shadow: 0 1px 4px rgba(0,0,0,.08); }
        .table th { font-size: .8rem; text-transform: uppercase; letter-spacing: .05em; color: #6c757d; }
        .badge-active { background: #d4edda; color: #155724; padding: .3em .6em; border-radius: 4px; font-size: .78rem; }
        .badge-inactive { background: #f8d7da; color: #721c24; padding: .3em .6em; border-radius: 4px; font-size: .78rem; }
    </style>
    @yield('head_extra')
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <div class="sidebar-brand">
        <i class="bi bi-shield-lock-fill"></i> Admin Panel
    </div>
    <nav class="mt-2">
        <div class="nav-section">Main</div>
        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <div class="nav-section">Content</div>
        <a class="nav-link {{ request()->routeIs('admin.slides.*') ? 'active' : '' }}" href="{{ route('admin.slides.index') }}">
            <i class="bi bi-images"></i> Slider Slides
        </a>
        <a class="nav-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}">
            <i class="bi bi-folder2-open"></i> Service Categories
        </a>
        <a class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}" href="{{ route('admin.services.index') }}">
            <i class="bi bi-gear-wide-connected"></i> Services
        </a>
        <a class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}" href="{{ route('admin.products.index') }}">
            <i class="bi bi-box-seam"></i> Products
        </a>

        <div class="nav-section">Partners & Clients</div>
        <a class="nav-link {{ request()->routeIs('admin.partners.*') ? 'active' : '' }}" href="{{ route('admin.partners.index') }}">
            <i class="bi bi-handshake"></i> Partners
        </a>
        <a class="nav-link {{ request()->routeIs('admin.clients.*') ? 'active' : '' }}" href="{{ route('admin.clients.index') }}">
            <i class="bi bi-people"></i> Clients
        </a>

        <div class="nav-section">Settings</div>
        <a class="nav-link {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}" href="{{ route('admin.settings.index') }}">
            <i class="bi bi-sliders"></i> Site Settings
        </a>
        <a class="nav-link {{ request()->routeIs('admin.about.*') ? 'active' : '' }}" href="{{ route('admin.about.index') }}">
            <i class="bi bi-info-circle"></i> About Page
        </a>
        <a class="nav-link {{ request()->routeIs('admin.about-pages.*') ? 'active' : '' }}" href="{{ route('admin.about-pages.index') }}">
            <i class="bi bi-files"></i> About Sub-Pages
        </a>
        <a class="nav-link {{ request()->routeIs('admin.about-tabs.*') ? 'active' : '' }}" href="{{ route('admin.about-tabs.index') }}">
            <i class="bi bi-layout-tabs"></i> About Tabs
        </a>
        <a class="nav-link {{ request()->routeIs('admin.about-history.*') ? 'active' : '' }}" href="{{ route('admin.about-history.index') }}">
            <i class="bi bi-clock-history"></i> About History
        </a>

        <div class="nav-section">Team & Reviews</div>
        <a class="nav-link {{ request()->routeIs('admin.team-members.*') ? 'active' : '' }}" href="{{ route('admin.team-members.index') }}">
            <i class="bi bi-people-fill"></i> Team Members
        </a>
        <a class="nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}" href="{{ route('admin.testimonials.index') }}">
            <i class="bi bi-chat-quote-fill"></i> Testimonials
        </a>
    </nav>
</div>

<!-- Main Content -->
<div class="main-content">
    <div class="topbar">
        <h6 class="mb-0 fw-semibold">@yield('title', 'Dashboard')</h6>
        <div class="d-flex align-items-center gap-3">
            <span class="text-muted small"><i class="bi bi-person-circle"></i> {{ auth()->user()->name }}</span>
            <form action="{{ route('admin.logout') }}" method="POST" class="mb-0">
                @csrf
                <button class="btn btn-sm btn-outline-danger"><i class="bi bi-box-arrow-right"></i> Logout</button>
            </form>
        </div>
    </div>

    <div class="content-area">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle-fill me-2"></i>{{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
function previewImage(input, name) {
    const img = document.getElementById('preview-img-' + name);
    const placeholder = document.getElementById('preview-placeholder-' + name);
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = e => {
            img.src = e.target.result;
            img.style.display = '';
            if (placeholder) placeholder.style.display = 'none';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
function clearImage(name) {
    const input = document.getElementById('file-' + name);
    const img = document.getElementById('preview-img-' + name);
    const placeholder = document.getElementById('preview-placeholder-' + name);
    const existing = document.querySelector('input[name="' + name + '_existing"]');
    if (input) input.value = '';
    if (img) { img.src = ''; img.style.display = 'none'; }
    if (placeholder) placeholder.style.display = '';
    if (existing) existing.value = '';
}
</script>
@yield('scripts')
</body>
</html>
