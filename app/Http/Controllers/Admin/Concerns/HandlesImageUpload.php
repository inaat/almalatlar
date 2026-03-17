<?php

namespace App\Http\Controllers\Admin\Concerns;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HandlesImageUpload
{
    /**
     * Store an uploaded image and return its public URL.
     * If no file uploaded, return the existing value unchanged.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $field       The form field name (e.g. 'image')
     * @param  string  $folder      Storage subfolder (e.g. 'slides')
     * @param  string|null  $oldPath  Existing stored path to delete on replace
     * @return string|null
     */
    protected function handleImageUpload($request, string $field, string $folder, ?string $oldPath = null): ?string
    {
        if ($request->hasFile($field) && $request->file($field)->isValid()) {
            // Delete old uploaded file if it exists in storage
            if ($oldPath && str_starts_with($oldPath, '/storage/')) {
                $storagePath = str_replace('/storage/', 'public/', $oldPath);
                Storage::delete($storagePath);
            }

            $path = $request->file($field)->store("public/{$folder}");
            // Return URL accessible via /storage/...
            return Storage::url($path);
        }

        // No new file — keep existing value (could be a URL or stored path)
        return $request->input($field . '_existing');
    }
}
