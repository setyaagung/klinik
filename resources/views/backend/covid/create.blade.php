@extends('layouts.back-main')

@section('title','Tambah Pemeriksaan Covid')

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
                                Tambah Pemeriksaan Covid
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('covid.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">No Sampel</label>
                                    <input type="text" class="form-control @error('no_sampel') is-invalid @enderror" name="no_sampel" value="{{ old('no_sampel') }}" autofocus>
                                    @error('no_sampel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('covid.index')}}" class="btn btn-secondary">Kembali</a>
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
