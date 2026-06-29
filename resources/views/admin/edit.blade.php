@extends('layouts.admin')

@section('title', 'Edit Destination')

@section('content')

<!-- HEADER -->
<div class="mb-4">
    <h3 class="fw-bold text-success mb-1">Edit Camping Destination</h3>
    <p class="text-muted mb-0">Update the information below</p>
</div>

<!-- FORM CARD -->
<div class="card border-0 shadow-sm rounded-4">

    <div class="card-body p-4">

        <form action="{{ route('destinasi.update', $destinasi->id_lokasi) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="row g-3">

                <!-- Nama Tempat -->
                <div class="col-12">
                    <label class="form-label fw-semibold">Camp Name</label>
                    <input type="text"
                           name="nama_tempat"
                           class="form-control rounded-3"
                           value="{{ $destinasi->nama_tempat }}"
                           required>
                </div>

                <!-- Fasilitas -->
                <div class="col-12">
                    <label class="form-label fw-semibold">Facilities</label>
                    <textarea name="fasilitas"
                              rows="3"
                              class="form-control rounded-3"
                              required>{{ $destinasi->fasilitas }}</textarea>
                </div>

                <!-- Biaya -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Price (IDR)</label>
                    <input type="number"
                           name="biaya"
                           class="form-control rounded-3"
                           value="{{ $destinasi->biaya }}"
                           required>
                </div>

                <!-- Jam Operasional -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Operating Hours</label>
                    <input type="text"
                           name="jam_operasional"
                           class="form-control rounded-3"
                           value="{{ $destinasi->jam_operasional }}"
                           required>
                </div>

                <!-- CURRENT IMAGE -->
                <div class="col-12">
                    <label class="form-label fw-semibold">Current Image</label>
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $destinasi->gambar) }}"
                             alt="Current Image"
                             class="rounded-3 shadow-sm"
                             width="140"
                             height="100"
                             style="object-fit: cover;">
                    </div>
                </div>

                <!-- NEW IMAGE -->
                <div class="col-12">
                    <label class="form-label fw-semibold">Change Image (optional)</label>
                    <input type="file"
                           name="gambar"
                           class="form-control rounded-3"
                           accept="image/*">
                    <small class="text-muted">Leave empty if you don't want to change the image</small>
                </div>

                <!-- BUTTON -->
                <div class="col-12 d-flex gap-2 mt-3">

                    <button type="submit"
                            class="btn btn-success rounded-3 px-4 shadow-sm">
                        Update Destination
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