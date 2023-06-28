@extends('templates/default')
@section('content')
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Tabel Master Kuesioner (Nama Prodi)</h3>
                                    <!-- <button class="btn btn-primary float-right">Tambah Data</button> -->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                        data-target="#modalTambah">
                                        Tambah Kuesioner
                                    </button>
                                </div>
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert">x</button>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if (session()->has('Success'))
                                        <div class="alert swalDefaultSuccess">
                                            {{ session()->get('Success') }}
                                        </div>
                                    @endif
                                    <table id="tableKuesioner" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kuesioner</th>
                                                <th>Periode Kuesioner</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($kuesioner as $k)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $k->nama_kuesioner }}</td>
                                                    <td>{{ $k->periode->periode_kuesioner }}</td>
                                                    <td>{{ $k->status }}</td>
                                                    <td>
                                                        <a class="btn btn-block btn-success btn-xs"
                                                            href="{{ route('kuesioner.show', $k->id_kuesioner) }}">Detail</a>
                                                        <button class="btn btn-block btn-warning btn-xs"
                                                            href="{{ route('kuesioner.update', $k->id_kuesioner) }}"
                                                            id="btnEdit" data-toggle="modal"
                                                            data-nama_kuesioner="{{ $k->nama_kuesioner }}"
                                                            data-periode_kuesioner="{{ $k->periode->periode_kuesioner }}">Edit</button>
                                                        {{-- <a class="btn btn-block btn-warning btn-xs"
                                                            href="{{ route('kuesioner.update', $k->id_kuesioner) }}"
                                                            id="btnEdit" data-toggle="modal"
                                                            data-nama_kuesioner="{{ $k->nama_kuesioner }}"
                                                            data-periode_kuesioner="{{ $k->periode_kuesioner }}">edit</a> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @include('modal/kuesioner/tambah')
                    @include('modal/kuesioner/update') --}}
                </div>
            </section>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('button#btnEdit').on('click', function() {
            var href = $(this).attr('href');
            var nama_kuesioner = $(this).data('nama_kuesioner');
            var periode_kuesioner = $(this).data('periode_kuesioner');

            // console.log(desc);
            $('input[name="nama_kuesioner"]').val(nama_kuesioner);
            $('input[name="periode_kuesioner"]').val(periode_kuesioner);
            $('#formEdit').attr('action', href);
            $("#modalEdit").modal('show');
        });

        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.swalDefaultSuccess').show(function() {
            Toast.fire({
                icon: 'success',
                type: 'success',
                title: 'Data Berhasil Disimpan.'
            })
        });

        @if (session()->has('message'))
            showToast({{ strtolower(session('message')['type']) }}, {{ session('message')['text'] }});
        @endif
    </script>

    <!-- script form input -->
    <script>
        $(function() {
            $("input[name='periode_kuesioner']").on('input', function(e) {
                $(this).val($(this).val().replace(/[^0-9]/g, ''));
            });
        });
    </script>
@endpush
