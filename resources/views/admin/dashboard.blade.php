@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row g-3 mb-4">
    <div class="col-sm-6 col-xl-4">
        <div class="card p-3 d-flex flex-row align-items-center gap-3">
            <div class="rounded-circle bg-primary bg-opacity-10 p-3"><i class="bi bi-images fs-4 text-primary"></i></div>
            <div>
                <div class="fs-3 fw-bold">{{ $stats['slides'] }}</div>
                <div class="text-muted small">Slider Slides</div>
            </div>
            <a href="{{ route('admin.slides.index') }}" class="stretched-link"></a>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card p-3 d-flex flex-row align-items-center gap-3">
            <div class="rounded-circle bg-success bg-opacity-10 p-3"><i class="bi bi-folder2-open fs-4 text-success"></i></div>
            <div>
                <div class="fs-3 fw-bold">{{ $stats['categories'] }}</div>
                <div class="text-muted small">Service Categories</div>
            </div>
            <a href="{{ route('admin.categories.index') }}" class="stretched-link"></a>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card p-3 d-flex flex-row align-items-center gap-3">
            <div class="rounded-circle bg-info bg-opacity-10 p-3"><i class="bi bi-gear-wide-connected fs-4 text-info"></i></div>
            <div>
                <div class="fs-3 fw-bold">{{ $stats['services'] }}</div>
                <div class="text-muted small">Services</div>
            </div>
            <a href="{{ route('admin.services.index') }}" class="stretched-link"></a>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card p-3 d-flex flex-row align-items-center gap-3">
            <div class="rounded-circle bg-warning bg-opacity-10 p-3"><i class="bi bi-handshake fs-4 text-warning"></i></div>
            <div>
                <div class="fs-3 fw-bold">{{ $stats['partners'] }}</div>
                <div class="text-muted small">Partners</div>
            </div>
            <a href="{{ route('admin.partners.index') }}" class="stretched-link"></a>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card p-3 d-flex flex-row align-items-center gap-3">
            <div class="rounded-circle bg-danger bg-opacity-10 p-3"><i class="bi bi-people fs-4 text-danger"></i></div>
            <div>
                <div class="fs-3 fw-bold">{{ $stats['clients'] }}</div>
                <div class="text-muted small">Clients</div>
            </div>
            <a href="{{ route('admin.clients.index') }}" class="stretched-link"></a>
        </div>
    </div>
    <div class="col-sm-6 col-xl-4">
        <div class="card p-3 d-flex flex-row align-items-center gap-3">
            <div class="rounded-circle bg-secondary bg-opacity-10 p-3"><i class="bi bi-sliders fs-4 text-secondary"></i></div>
            <div>
                <div class="fs-3 fw-bold">{{ $stats['settings'] }}</div>
                <div class="text-muted small">Site Settings</div>
            </div>
            <a href="{{ route('admin.settings.index') }}" class="stretched-link"></a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h6 class="fw-semibold mb-3">Quick Actions</h6>
        <div class="d-flex flex-wrap gap-2">
            <a href="{{ route('admin.slides.create') }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-plus"></i> New Slide</a>
            <a href="{{ route('admin.services.create') }}" class="btn btn-sm btn-outline-success"><i class="bi bi-plus"></i> New Service</a>
            <a href="{{ route('admin.partners.create') }}" class="btn btn-sm btn-outline-warning"><i class="bi bi-plus"></i> New Partner</a>
            <a href="{{ route('admin.clients.create') }}" class="btn btn-sm btn-outline-danger"><i class="bi bi-plus"></i> New Client</a>
            <a href="{{ route('admin.settings.index') }}" class="btn btn-sm btn-outline-secondary"><i class="bi bi-gear"></i> Settings</a>
        </div>
    </div>
</div>
@endsection
