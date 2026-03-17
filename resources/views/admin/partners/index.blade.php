@extends('layouts.admin')

@section('title', 'Partners')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Partners</h5>
    <a href="{{ route('admin.partners.create') }}" class="btn btn-primary btn-sm">
        <i class="bi bi-plus-lg me-1"></i> Add Partner
    </a>
</div>

<div class="card">
    <div class="card-body p-0">
        <table class="table table-hover mb-0 align-middle">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Logo</th>
                    <th>Name</th>
                    <th>Website</th>
                    <th>Order</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($partners as $partner)
                <tr>
                    <td>{{ $partner->id }}</td>
                    <td>
                        @if($partner->logo)
                            <img src="{{ $partner->logo }}" alt="{{ $partner->name }}" style="height:40px;max-width:80px;object-fit:contain;">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>{{ $partner->name }}</td>
                    <td>
                        @if($partner->website)
                            <a href="{{ $partner->website }}" target="_blank" class="text-truncate d-inline-block" style="max-width:150px;">{{ $partner->website }}</a>
                        @else -
                        @endif
                    </td>
                    <td>{{ $partner->sort_order }}</td>
                    <td>
                        @if($partner->is_active)
                            <span class="badge-active">Active</span>
                        @else
                            <span class="badge-inactive">Inactive</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.partners.edit', $partner) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.partners.destroy', $partner) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Delete this partner?')">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="7" class="text-center text-muted py-4">No partners found.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
