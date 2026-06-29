@extends('layouts.admin')

@section('title', 'Add Destination')

@section('content')

<!-- HEADER -->
<div class="mb-4">
    <h3 class="fw-bold text-success mb-1">Add Camping Destination</h3>
    <p class="text-muted mb-0">Fill in the form below to add a new location</p>
</div>

<!-- FORM CARD -->
<div class="card border-0 shadow-sm rounded-4">

    <div class="card-body p-4">

        <form action="{{ route('destinasi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row g-3">

                <!-- Nama Tempat -->
                <div class="col-12">
                    <label class="form-label fw-semibold">Camp Name</label>
                    <input type="text"
                           name="nama_tempat"
                           class="form-control rounded-3"
                           placeholder="Enter camp name"
                           required>
                </div>

                <!-- Fasilitas -->
                <div class="col-12">
                    <label class="form-label fw-semibold">Facilities</label>
                    <textarea name="fasilitas"
                              rows="3"
                              class="form-control rounded-3"
                              placeholder="Describe facilities"
                              required></textarea>
                </div>

                <!-- Biaya -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Price (IDR)</label>
                    <input type="number"
                           name="biaya"
                           class="form-control rounded-3"
                           placeholder="e.g. 150000"
                           required>
                </div>

                <!-- Jam Operasional -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Operating Hours</label>
                    <input type="text"
                           name="jam_operasional"
                           class="form-control rounded-3"
                           placeholder="24 Hours / 08.00 - 17.00"
                           required>
                </div>

                <!-- Gambar -->
                <div class="col-12">
                    <label class="form-label fw-semibold">Image</label>
                    <input type="file"
                           name="gambar"
                           class="form-control rounded-3"
                           accept="image/*"
                           required>
                </div>

                <!-- BUTTON -->
                <div class="col-12 d-flex gap-2 mt-3">

                    <button type="submit"
                            class="btn btn-success rounded-3 px-4 shadow-sm">
                        Save Destination
                    </button>

                    <a href="{{ route('destinasi.index') }}"
                       class="btn btn-outline-secondary rounded-3 px-4">
                        Cancel
                    </a>

                </div>

            </div>

        </form>

    </div>

</div>

@endsection