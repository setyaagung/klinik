@extends('layouts.back-main')

@section('title','Edit Pemeriksaan Covid')

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
                                Edit Pemeriksaan Covid
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('covid.update',$covid->id)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="">No Sampel</label>
                                    <input type="text" class="form-control @error('no_sampel') is-invalid @enderror" name="no_sampel" value="{{ $covid->no_sampel }}" autofocus>
                                    @error('no_sampel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ \Carbon\Carbon::parse($covid->tanggal)->format('Y-m-d')}}">
                                    @error('tanggal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Dokter Penanggung Jawab</label>
                                    <select name="doctor_id" class="form-control select2 @error('doctor_id') is-invalid @enderror" style="width: 100%">
                                        <option value="">-- Pilih Dokter --</option>
                                        @foreach ($doctors as $doctor)
                                            <option value="{{ $doctor->id}}" {{ $covid->doctor_id == $doctor->id ? 'selected':''}}>{{ $doctor->nama_dokter}}</option>
                                        @endforeach
                                    </select>
                                    @error('doctor_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Pasien</label>
                                    <select name="pasien_id" class="form-control select2 @error('pasien_id') is-invalid @enderror" style="width: 100%">
                                        <option value="">-- Pilih Pasien --</option>
                                        @foreach ($pasiens as $pasien)
                                            <option value="{{ $pasien->id}}" {{ $covid->pasien_id == $pasien->id ? 'selected':''}}>{{ $pasien->nama_pasien}}</option>
                                        @endforeach
                                    </select>
                                    @error('pasien_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Pemeriksaan</label>
                                    <select name="pemeriksaan" class="form-control select2 @error('pemeriksaan') is-invalid @enderror" style="width: 100%">
                                        <option value="">-- Pilih Pemeriksaan --</option>
                                        <option value="COVID RAPID TEST SWAB CORPORATE" {{ $covid->pemeriksaan == 'COVID RAPID TEST SWAB CORPORATE' ? 'selected':''}}>COVID RAPID TEST SWAB CORPORATE</option>
                                        <option value="Antigen SARS - Cov - 2" {{ $covid->pemeriksaan == 'Antigen SARS - Cov - 2' ? 'selected':''}}>Antigen SARS - Cov - 2</option>
                                    </select>
                                    @error('pemeriksaan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Hasil</label>
                                            <select name="hasil" class="form-control @error('hasil') is-invalid @enderror">
                                                <option value="">-- Pilih Hasil --</option>
                                                <option value="Negatif" {{ $covid->hasil == 'Negatif' ? 'selected':''}}>Negatif</option>
                                                <option value="Positif" {{ $covid->hasil == 'Positif' ? 'selected':''}}>Positif</option>
                                            </select>
                                            @error('hasil')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Nilai Rujukan</label>
                                            <select name="rujukan" class="form-control @error('rujukan') is-invalid @enderror">
                                                <option value="">-- Pilih Nilai Rujukan --</option>
                                                <option value="Negatif" {{ $covid->rujukan == 'Negatif' ? 'selected':''}}>Negatif</option>
                                                <option value="Positif" {{ $covid->rujukan == 'Positif' ? 'selected':''}}>Positif</option>
                                            </select>
                                            @error('rujukan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Satuan</label>
                                            <input type="text" class="form-control @error('satuan') is-invalid @enderror" name="satuan" value="{{ $covid->satuan}}">
                                            <small>*Jika satuan kosong maka inputkan dengan tanda ( - )</small>
                                            @error('satuan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('covid.index')}}" class="btn btn-secondary">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
