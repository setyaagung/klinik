@extends('layouts.back-main')

@section('title','Tambah Data Vaksin')

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
                                Tambah Data Vaksin
                            </h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('vaksin.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nomor Vaksin</label>
                                    <input type="text" class="form-control @error('no_vaksin') is-invalid @enderror" name="no_vaksin" value="{{ old('no_vaksin')}}" autofocus>
                                    @error('no_vaksin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Vaksin</label>
                                    <input type="text" class="form-control @error('nama_vaksin') is-invalid @enderror" name="nama_vaksin" value="{{ old('nama_vaksin')}}">
                                    @error('nama_vaksin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Tanggal Vaksin</label>
                                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal">
                                    @error('tanggal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Waktu Vaksin</label>
                                    <input type="time" class="form-control @error('waktu') is-invalid @enderror" name="waktu">
                                    @error('waktu')
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
                                            <option value="{{ $doctor->id}}" {{ old('doctor_id') == $doctor->id ? 'selected':''}}>{{ $doctor->nama_dokter}}</option>
                                        @endforeach
                                    </select>
                                    @error('doctor_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Pasien</label>
                                    <select id="pasien_id" name="pasien_id" class="form-control @error('pasien_id') is-invalid @enderror select2" style="width: 100%;">
                                        <option value="">-- Pilih Pasien --</option>
                                        @foreach ($pasiens as $pasien)
                                            <option value="{{ $pasien->id}}" {{ old('pasien_id') ==  $pasien->id ? 'selected':''}}>{{  $pasien->nama_pasien}}</option>
                                        @endforeach
                                    </select>
                                    @error('pasien_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="text" name="tanggal_lahir" class="form-control" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control" rows="2" readonly></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">Keterangan</label>
                                    <textarea class="form-control @error('keterangan') is-invalid @enderror" rows="3" name="keterangan">{{ old('keterangan')}}</textarea>
                                    @error('keterangan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="float-right">
                                    <a href="{{ route('vaksin.index')}}" class="btn btn-secondary">Kembali</a>
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

@push('scripts')
    <script>
        $("#pasien_id").on("change",function(){
            var pasien_id = $(this).val();
            //console.log(id);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: "/vaksin/getpasien",
                data:{'id':pasien_id},
                success: function(data){
                    $.each(data, function(key, value){
                        $('input[name="jenis_kelamin"]').val(data.jenis_kelamin);
                        $('input[name="tanggal_lahir"]').val(data.tanggal_lahir);
                        $('textarea[name="alamat"]').val(data.alamat);
                    });
                }
            });
        });
    </script>
@endpush

