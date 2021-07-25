@extends('layouts.back-main')

@section('title','Data Surat Keterangan Dokter')

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
                                Data Surat Keterangan Dokter
                            </h3>
                            <a href="{{ route('keterangan-dokter.create')}}" class="btn btn-primary btn-sm float-right">Tambah</a>
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
                                        <th>TANGGAL PERIKSA</th>
                                        <th>DOKTER</th>
                                        <th>PASIEN</th>
                                        <th>MULAI ISTIRAHAT</th>
                                        <th>SELESAI ISTIRAHAT</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kds as $kd)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ \Carbon\Carbon::parse($kd->tanggal_periksa)->isoFormat('D MMMM Y')}}</td>
                                            <td>{{ $kd->doctor->nama_dokter}}</td>
                                            <td>{{ $kd->pasien->nama_pasien}}</td>
                                            <td>{{ \Carbon\Carbon::parse($kd->mulai_istirahat)->isoFormat('D MMMM Y')}}</td>
                                            <td>{{ \Carbon\Carbon::parse($kd->selesai_istirahat)->isoFormat('D MMMM Y')}}</td>
                                            <td>
                                                <a href="{{ route('keterangan-dokter.cetak',$kd->id_keterangan_dokter)}}" class="btn btn-success btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> Cetak</a>
                                                <a href="{{ route('keterangan-dokter.edit',$kd->id_keterangan_dokter)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('keterangan-dokter.destroy', $kd->id_keterangan_dokter)}}" method="POST" class="d-inline">
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
