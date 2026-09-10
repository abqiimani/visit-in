@extends('layouts.app')

@section('title', 'Data Pengunjung')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pengunjung</h1>
</div>

<div class="card">

    <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="card-title mb-0">Data Pengunjung VISIT-IN</h5>
    </div>

    <div class="card-body">

        <table class="table table-striped table-hover datatables">

            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Nomor Telepon</th>
                    <th>Asal Daerah</th>
                    <th>Kategori Pengunjung</th>
                    <th>Jumlah Pengunjung</th>
                    <th>Tanggal Kunjungan</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($pengunjungs as $pengunjung)

                    <tr>

                        <td>
                            {{ $pengunjung->nama_lengkap }}
                        </td>

                        <td>
                            {{ $pengunjung->nomor_telepon }}
                        </td>

                        <td>
                            {{ $pengunjung->asal_daerah }}
                        </td>

                        <td>
                            {{ $pengunjung->kategori_pengunjung }}
                        </td>

                        <td>
                            {{ $pengunjung->jumlah_pengunjung }}
                        </td>

                        <td>
                            {{ $pengunjung->tanggal_kunjungan }}
                        </td>

                        <td>

                            {{-- Lihat Detail --}}
                            <a href="{{ route('admin.pengunjung.show', encrypt($pengunjung->id)) }}"
                               class="btn btn-link text-secondary p-0 mx-2"
                               title="Lihat Detail">

                                <span class="fa fa-eye"></span>

                            </a>

                            {{-- Hapus --}}
                            <a href="javascript:void(0)"
                               onclick="actionDestroy('{{ route('admin.pengunjung.destroy', encrypt($pengunjung->id)) }}')"
                               class="btn btn-link text-danger p-0 mx-2"
                               title="Hapus">

                                <span class="fa fa-trash"></span>

                            </a>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

        {{-- Form Delete --}}
        <form id="form-destroy" method="POST" style="display: none;">

            @csrf

            @method('DELETE')

        </form>

    </div>

</div>

@endsection


@push('styles')
@endpush


@push('scripts')

<script>

    $(document).ready(function () {

        $('.datatables').DataTable();

    });


    function actionDestroy(url) {

        Swal.fire({

            title: "Apakah anda yakin akan menghapus data ini?",

            text: "Data pengunjung yang dihapus tidak dapat dipulihkan!",

            icon: "warning",

            showCancelButton: true,

            confirmButtonColor: "#d33",

            cancelButtonColor: "#6c757d",

            confirmButtonText: "Ya, hapus",

            cancelButtonText: "Batal"

        }).then((result) => {

            if (result.isConfirmed) {

                $('#form-destroy').attr('action', url);

                $('#form-destroy').submit();

            }

        });

    }

</script>


@if (Session::has('success'))

    <script type="text/javascript">

        Swal.fire({

            title: 'Berhasil',

            text: '{{ Session::get('success') }}',

            icon: 'success',

            confirmButtonText: 'OK'

        });

    </script>

@endif

@endpush