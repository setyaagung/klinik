@extends('layouts.back-main')

@section('title','Tambah Dokter')

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
                                Tambah Dokter
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('doctor.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">No SIP</label>
                                    <input type="text" class="form-control @error('no_sip') is-invalid @enderror" name="no_sip" value="{{ old('no_sip') }}" autofocus>
                                    @error('no_sip')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control @error('nama_dokter') is-invalid @enderror" name="nama_dokter" value="{{ old('nama_dokter') }}">
                                    @error('nama_dokter')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Spesialis</label>
                                    <input type="text" class="form-control @error('spesialis') is-invalid @enderror" name="spesialis" value="{{ old('spesialis') }}">
                                    @error('spesialis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('doctor.index')}}" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
