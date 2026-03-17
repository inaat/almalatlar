@props([
    'name'     => 'image',
    'label'    => 'Image',
    'current'  => null,
    'required' => false,
])

<div {{ $attributes->class(['mb-0']) }}>
    <label class="form-label fw-semibold">
        {{ $label }}
        @if($required) <span class="text-danger">*</span> @endif
        <small class="text-muted fw-normal">(JPG, PNG, GIF, WEBP — max 4 MB)</small>
    </label>

    {{-- Hidden field to pass existing image through if no new file selected --}}
    <input type="hidden" name="{{ $name }}_existing" value="{{ $current }}">

    <div class="d-flex align-items-start gap-3 flex-wrap">
        {{-- Preview box --}}
        <div id="preview-box-{{ $name }}"
             class="border rounded d-flex align-items-center justify-content-center bg-light overflow-hidden flex-shrink-0"
             style="width:120px;height:80px;">
            @if($current)
                <img id="preview-img-{{ $name }}" src="{{ $current }}" alt=""
                     style="max-width:100%;max-height:100%;object-fit:contain;">
            @else
                <span id="preview-placeholder-{{ $name }}" class="text-muted small">No image</span>
                <img id="preview-img-{{ $name }}" src="" alt="" style="display:none;max-width:100%;max-height:100%;object-fit:contain;">
            @endif
        </div>

        <div class="flex-grow-1">
            <input type="file" name="{{ $name }}" id="file-{{ $name }}"
                   class="form-control @error($name) is-invalid @enderror"
                   accept="image/*"
                   onchange="previewImage(this, '{{ $name }}')">
            @error($name)
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            @if($current)
                <div class="mt-1 d-flex align-items-center gap-2">
                    <small class="text-muted text-truncate" style="max-width:260px;">Current: {{ $current }}</small>
                    <button type="button" class="btn btn-link btn-sm text-danger p-0"
                            onclick="clearImage('{{ $name }}')">Remove</button>
                </div>
            @endif
        </div>
    </div>
</div>
