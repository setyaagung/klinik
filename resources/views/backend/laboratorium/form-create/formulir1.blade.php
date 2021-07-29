<div class="form-group">
    <label for="">Tanggal Pemeriksaan</label>
    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" autofocus>
    @error('tanggal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">No CM</label>
    <input type="text" class="form-control @error('no_cm') is-invalid @enderror" name="no_cm" value="{{ old('no_cm') }}">
    @error('no_cm')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Jam Pengambilan Sampel</label>
    <input type="time" class="form-control @error('pengambilan_sampel') is-invalid @enderror" name="pengambilan_sampel">
    @error('pengambilan_sampel')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Jam Jadi Hasil</label>
    <input type="time" class="form-control @error('hasil') is-invalid @enderror" name="hasil">
    @error('hasil')
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
