@extends('layouts.back-main')

@section('title','Edit Surat Keterangan Dokter')

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
                                Edit Surat Keterangan Dokter
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('keterangan-dokter.update',$kd->id_keterangan_dokter)}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="">Tanggal Pemeriksaan</label>
                                    <input type="date" class="form-control @error('tanggal_periksa') is-invalid @enderror" name="tanggal_periksa" value="{{ \Carbon\Carbon::parse($kd->tanggal_periksa)->format('Y-m-d')}}" autofocus>
                                    @error('tanggal_periksa')
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
                                            <option value="{{ $doctor->id}}" {{ $kd->doctor_id == $doctor->id ? 'selected':''}}>{{ $doctor->nama_dokter}}</option>
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
                                            <option value="{{ $pasien->id}}" {{ $kd->pasien_id == $pasien->id ? 'selected':''}}>{{ $pasien->nama_pasien}}</option>
                                        @endforeach
                                    </select>
                                    @error('pasien_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Pekerjaan</label>
                                    <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ $kd->pekerjaan}}">
                                    @error('pekerjaan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Mulai Istirahat</label>
                                    <input type="date" class="form-control @error('mulai_istirahat') is-invalid @enderror" name="mulai_istirahat" value="{{ \Carbon\Carbon::parse($kd->mulai_istirahat)->format('Y-m-d')}}">
                                    @error('mulai_istirahat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Selesai Istirahat</label>
                                    <input type="date" class="form-control @error('selesai_istirahat') is-invalid @enderror" name="selesai_istirahat" value="{{ \Carbon\Carbon::parse($kd->selesai_istirahat)->format('Y-m-d')}}">
                                    @error('selesai_istirahat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('keterangan-dokter.index')}}" class="btn btn-secondary">Kembali</a>
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
