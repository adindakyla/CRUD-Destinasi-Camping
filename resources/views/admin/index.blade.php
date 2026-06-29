@extends('layouts.admin')

@section('title', 'Destinations')

@section('content')

<!-- HEADER -->
<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h3 class="fw-bold text-success mb-1">Camping Destinations</h3>
        <p class="text-muted mb-0">Manage all your camping locations</p>
    </div>

    <div class="d-flex gap-2">

        <a href="{{ route('destinasi.create') }}"
           class="btn btn-success rounded-3 px-3 shadow-sm">
            + Add Location
        </a>

        <a href="{{ route('destinasi.pdf') }}"
           class="btn btn-outline-primary rounded-3 px-3">
            Export PDF
        </a>

    </div>

</div>

<!-- ALERT -->
@if(session('success'))
    <div class="alert alert-success shadow-sm rounded-3">
        {{ session('success') }}
    </div>
@endif

<!-- TABLE CARD -->
<div class="card border-0 shadow-sm rounded-4">

    <div class="card-body p-0">

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-success text-dark">
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Image</th>
                        <th>Camp Name</th>
                        <th>Facilities</th>
                        <th>Price</th>
                        <th>Hours</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($destinasi as $item)
                    <tr>

                        <td class="text-center fw-semibold">
                            #{{ $item->id_lokasi }}
                        </td>

                        <td class="text-center">
                            <img src="{{ asset('storage/' . $item->gambar) }}"
                                 width="70"
                                 height="55"
                                 class="rounded-3 shadow-sm"
                                 style="object-fit:cover;">
                        </td>

                        <td class="fw-semibold text-success">
                            {{ $item->nama_tempat }}
                        </td>

                        <td class="text-muted">
                            {{ \Illuminate\Support\Str::limit($item->fasilitas, 50) }}
                        </td>

                        <td>
                            <span class="badge bg-success px-3 py-2">
                                Rp {{ number_format($item->biaya, 0, ',', '.') }}
                            </span>
                        </td>

                        <td class="text-center text-muted">
                            {{ $item->jam_operasional }}
                        </td>

                        <td class="text-center">

                            <div class="d-flex justify-content-center gap-2">

                                <a href="{{ route('destinasi.edit', $item->id_lokasi) }}"
                                   class="btn btn-warning btn-sm rounded-3">
                                    Edit
                                </a>

                                <form action="{{ route('destinasi.destroy', $item->id_lokasi) }}"
                                      method="POST"
                                      onsubmit="return confirm('Delete this destination?')">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm rounded-3">
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection