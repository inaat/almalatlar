@extends('layouts.admin')

@section('title', 'Team Members')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">Team Members</h4>
    <a href="{{ route('admin.team-members.create') }}" class="btn btn-primary btn-sm">
        <i class="bi bi-plus-lg"></i> Add Member
    </a>
</div>

<div class="card shadow-sm">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                <tr>
                    <td>{{ $item->sort_order }}</td>
                    <td>
                        @if($item->image)
                            <img src="{{ $item->image }}" height="40" width="40" class="rounded-circle object-fit-cover">
                        @else
                            <span class="text-muted">—</span>
                        @endif
                    </td>
                    <td><strong>{{ $item->name }}</strong></td>
                    <td>{{ $item->position }}</td>
                    <td>
                        <span class="{{ $item->is_active ? 'badge-active' : 'badge-inactive' }}">
                            {{ $item->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td class="text-end">
                        <a href="{{ route('admin.team-members.edit', $item) }}" class="btn btn-sm btn-outline-secondary">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <form action="{{ route('admin.team-members.destroy', $item) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete {{ addslashes($item->name) }}?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                    <tr><td colspan="6" class="text-center text-muted py-4">No team members yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
