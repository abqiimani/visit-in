@extends('layouts.pengunjung')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger mb-4">
        <strong>Validasi Gagal</strong>
        <p class="mb-0 mt-1">
            Silakan periksa kembali data yang Anda masukkan.
        </p>

        <ul class="mb-0 mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="visit-body">

    <h4 class="form-title">
        Form Data Kunjungan
    </h4>

    <p class="form-subtitle">
        Silakan isi data kunjungan dengan lengkap
    </p>

    <form method="POST" action="{{ route('pengunjung.store') }}">

        @csrf

        {{-- NAMA --}}
        <div class="mb-3">
            <label class="form-label">
                Nama Lengkap
            </label>

            <input
                type="text"
                name="nama_lengkap"
                class="form-control"
                placeholder="Masukkan nama lengkap"
                value="{{ old('nama_lengkap') }}"
                required>
        </div>


        {{-- TELEPON --}}
        <div class="mb-3">
            <label class="form-label">
                Nomor Telepon
            </label>

            <input
                type="text"
                name="phone"
                class="form-control"
                placeholder="Masukkan nomor telepon"
                value="{{ old('phone') }}"
                required>
        </div>


        {{-- ASAL DAERAH --}}
        <div class="mb-3">
            <label class="form-label">
                Asal Daerah
            </label>

            <input
                type="text"
                name="asal_daerah"
                class="form-control"
                placeholder="Masukkan asal daerah"
                value="{{ old('asal_daerah') }}"
                required>
        </div>


        {{-- KATEGORI --}}
        <div class="mb-3">
            <label class="form-label">
                Kategori Pengunjung
            </label>

            <select
                name="kategori_pengunjung"
                class="form-select"
                required>

                <option value="">
                    Pilih kategori pengunjung
                </option>

                <option value="Masyarakat Umum">
                    Masyarakat Umum
                </option>

                <option value="Pelajar">
                    Pelajar
                </option>

                <option value="Mahasiswa">
                    Mahasiswa
                </option>

            </select>
        </div>


        {{-- JUMLAH + TANGGAL --}}
        <div class="row">

            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Jumlah Pengunjung
                </label>

                <input
                    type="number"
                    name="jumlah_pengunjung"
                    class="form-control"
                    placeholder="Masukkan jumlah"
                    min="1"
                    required>
            </div>


            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Tanggal Kunjungan
                </label>

                <input
                    type="date"
                    name="tanggal_kunjungan"
                    class="form-control"
                    required>
            </div>

        </div>


        {{-- TOMBOL --}}
        <div class="mt-3">

            <button
                type="submit"
                class="btn btn-visit">

                SIMPAN DATA KUNJUNGAN

            </button>

        </div>

    </form>

</div>

@endsection