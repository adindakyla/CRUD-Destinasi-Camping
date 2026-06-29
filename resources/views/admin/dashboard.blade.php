@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<!-- HEADER -->
<div class="mb-4">
    <h3 class="fw-bold">CampGo Dashboard</h3>
    <p class="text-muted">Manage your camping destinations easily and efficiently</p>
</div>

<!-- STATS CARDS -->
<div class="row g-3 mb-4">

    <div class="col-md-4">
        <div class="card shadow-sm border-0 p-3 rounded-4">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted">Total Destinations</h6>
                    <h3 class="fw-bold text-success">
                        {{ \App\Models\DestinasiCamping::count() }}
                    </h3>
                </div>
                <i class="bi bi-pin-map-fill fs-1 text-success"></i>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm border-0 p-3 rounded-4">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted">Active Locations</h6>
                    <h3 class="fw-bold text-primary">
                        {{ \App\Models\DestinasiCamping::count() }}
                    </h3>
                </div>
                <i class="bi bi-geo-alt-fill fs-1 text-primary"></i>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm border-0 p-3 rounded-4">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <h6 class="text-muted">System Status</h6>
                    <h3 class="fw-bold text-success">Online</h3>
                </div>
                <i class="bi bi-wifi fs-1 text-success"></i>
            </div>
        </div>
    </div>

</div>

<!-- RECENT DESTINATIONS -->
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-header bg-white border-0">
        <h5 class="mb-0 fw-bold">📍 Recent Destinations</h5>
    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table align-middle">

                <thead class="table-light">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Facilities</th>
                        <th>Price</th>
                        <th>Operational</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach(\App\Models\DestinasiCamping::latest()->take(5)->get() as $item)
                    <tr>

                        <td>
                            <img src="{{ asset('storage/'.$item->gambar) }}"
                                 width="60"
                                 height="45"
                                 class="rounded"
                                 style="object-fit:cover;">
                        </td>

                        <td class="fw-semibold">
                            {{ $item->nama_tempat }}
                        </td>

                        <td class="text-muted">
                            {{ \Illuminate\Support\Str::limit($item->fasilitas, 40) }}
                        </td>

                        <td>
                            <span class="badge bg-success">
                                Rp {{ number_format($item->biaya,0,',','.') }}
                            </span>
                        </td>

                        <td class="text-muted">
                            {{ $item->jam_operasional }}
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

    </div>
</div>

@endsection