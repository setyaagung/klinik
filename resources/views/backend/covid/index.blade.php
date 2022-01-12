@extends('layouts.back-main')

@section('title','Data Hasil Pemeriksaan Covid')

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
                                Data Hasil Pemeriksaan Covid
                            </h3>
                            <a href="{{ route('covid.create')}}" class="btn btn-primary btn-sm float-right">Tambah</a>
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
                                        <th>TANGGAL</th>
                                        <th>NO SAMPEL</th>
                                        <th>DOKTER</th>
                                        <th>PASIEN</th>
                                        <th>PEMERIKSAAN</th>
                                        <th>HASIL</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($covids as $covid)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ \Carbon\Carbon::parse($covid->tanggal)->isoFormat('D MMMM Y')}}</td>
                                            <td>{{ $covid->no_sampel}}</td>
                                            <td>{{ $covid->doctor->nama_dokter}}</td>
                                            <td>
                                                @if ($covid->pasien->nama_pasien == null)
                                                    <i>( Data Pasien ini sudah dihapus)</i>
                                                @else
                                                    {{ $covid->pasien->nama_pasien}}
                                                @endif
                                            </td>
                                            <td>{{ $covid->pemeriksaan}}</td>
                                            <td>{{ $covid->hasil}}</td>

                                            <td>
                                                <a href="{{ route('covid.cetak',[$covid->id,$covid->qrcode])}}" class="btn btn-success btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> Cetak</a>
                                                <a href="{{ route('covid.edit',$covid->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('covid.destroy', $covid->id)}}" method="POST" class="d-inline">
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
