@extends('layouts.back-main')

@section('title','Edit Pasien')

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
                                Edit Pasien
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pasien.update',$pasien->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="">No KTP / NIK</label>
                                    <input type="text" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp" value="{{ $pasien->no_ktp }}" autofocus>
                                    @error('no_ktp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Pasien</label>
                                    <input type="text" class="form-control @error('nama_pasien') is-invalid @enderror" name="nama_pasien" value="{{ $pasien->nama_pasien }}">
                                    @error('nama_pasien')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-Laki" {{ $pasien->jenis_kelamin == 'Laki-Laki' ? 'selected':''}}>Laki-Laki</option>
                                        <option value="Perempuan" {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected':''}}>Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ \Carbon\Carbon::parse($pasien->tanggal_lahir)->format('Y-m-d') }}">
                                    @error('tanggal_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" rows="3">{{ $pasien->alamat}}</textarea>
                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('pasien.index')}}" class="btn btn-secondary">Kembali</a>
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
