@extends('layouts.app')

@section('title', 'Detail Pengunjung')

@section('content')

<div class="container py-4">

    <h1 class="page-title mb-3">Detail Pengunjung</h1>

    <div class="card">

        <div class="card-body">

            <table class="table table-striped">

                <tr>
                    <th width="250">ID</th>
                    <td>{{ $pengunjung->id }}</td>
                </tr>

                <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $pengunjung->nama_lengkap }}</td>
                </tr>

                <tr>
                    <th>Nomor Telepon</th>
                    <td>{{ $pengunjung->nomor_telepon }}</td>
                </tr>

                <tr>
                    <th>Asal Daerah</th>
                    <td>{{ $pengunjung->asal_daerah }}</td>
                </tr>

                <tr>
                    <th>Kategori Pengunjung</th>
                    <td>{{ $pengunjung->kategori_pengunjung }}</td>
                </tr>

                <tr>
                    <th>Jumlah Pengunjung</th>
                    <td>{{ $pengunjung->jumlah_pengunjung }}</td>
                </tr>

                <tr>
                    <th>Tanggal Kunjungan</th>
                    <td>{{ $pengunjung->tanggal_kunjungan }}</td>
                </tr>

            </table>

            <a href="{{ route('admin.pengunjung.index') }}" class="btn btn-secondary">
                Back
            </a>

        </div>

    </div>

</div>

@endsection