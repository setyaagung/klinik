@extends('layouts.back-main')

@section('title','Data Pasien')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">

    </div>
    <!-- /.content-header -->
    <section class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">
                                Data Pasien
                            </h3>
                            <a href="{{ route('pasien.create')}}" class="btn btn-primary btn-sm float-right">Tambah</a>
                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('create'))
                                <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> {{$message}}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if ($message = Session::get('update'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Updated!</strong> {{$message}}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if ($message = Session::get('delete'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Deleted!</strong> {{$message}}.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <table id="example1" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>KTP / NIK</th>
                                        <th>NAMA PASIEN</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>TANGGAL LAHIR</th>
                                        <th>ALAMAT</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pasiens as $pasien)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $pasien->no_ktp}}</td>
                                            <td>{{ $pasien->nama_pasien}}</td>
                                            <td>{{ $pasien->jenis_kelamin}}</td>
                                            <td>{{ \Carbon\Carbon::parse($pasien->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
                                            <td>{{ $pasien->alamat}}</td>
                                            <td>
                                                <a href="{{ route('pasien.edit',$pasien->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('pasien.destroy', $pasien->id)}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini??')"><i class="fas fa-trash"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
