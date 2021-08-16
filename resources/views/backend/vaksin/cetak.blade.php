<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Vaksin - {{ $vaksin->pasien->nama_pasien}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('images/logo.jpeg')}}" type="image/x-icon">
</head>
<body>
    <div class="header">
        <div class="row">
            <div class="col-md-2">
                <img src="{{ asset('images/logo.jpeg')}}" class="img-fluid" style="width: 120px" alt="">
            </div>
            <div class="col-md-8 text-center">
                <h4 class="font-weight-bold text-success">KLINIK PRATAMA 24 JAM<br>SUMBER MEDIKA MRANGGEN</h4>
                <p style="font-size: 13px;margin-top: -10px;">
                    Jl. Kangkung Krajan Raya RT. 02/RW. 01, Desa Kangkung, Kecamatan Mranggen<br>
                    Kabupaten Demak, Kode Pos 59567 Telp. (024) 76418330, email:kliniksumbermedika12@yahoo.com
                </p>
            </div>
            <div class="col-md-2"></div>
        </div>
        <hr style="border: 1px solid black;margin-top: -78px;margin-bottom: -10px">
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-sm table-borderless" style="font-size: 13px">
                <tbody>
                    <tr>
                        <th>Nomor Vaksin</th>
                        <td>:</td>
                        <td>{{ $vaksin->no_vaksin}}</td>
                        <td style="width: 15%">NIK</td>
                        <td>:</td>
                        <td style="width: 30%">{{ $vaksin->pasien->no_ktp}}</td>
                    </tr>
                    <tr>
                        <th>Nama Pasien</th>
                        <td>:</td>
                        <td>{{ $vaksin->pasien->nama_pasien}}</td>
                        <td style="width: 15%">Dokter</td>
                        <td>:</td>
                        <td style="width: 30%">{{ $vaksin->doctor->nama_dokter}}</td>
                    </tr>
                    <tr>
                        <th style="width: 15%">Tanggal Lahir</th>
                        <td> : </td>
                        <td style="width: 30%">{{ \Carbon\Carbon::parse($vaksin->pasien->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
                        <td>No. SIP</td>
                        <td>:</td>
                        <td>{{ $vaksin->doctor->no_sip}}</td>
                    </tr>
                    <tr>
                        <th style="width: 15%">Alamat</th>
                        <td> : </td>
                        <td style="width: 30%;text-align: justify;">{{ $vaksin->pasien->alamat}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="text-center mt-4">
        <h5>Riwayat Pemberian Vaksin Covid-19</h5>
    </div>
    <div class="hasil" style="font-size: 14px">
        <table class="table table-sm table-bordered">
            <thead class="bg-dark text-white">
                <tr>
                    <th>Tanggal Vaksinasi</th>
                    <th>Nama Vaksin</th>
                    <th>Nomor Vaksin</th>
                    <th>Lokasi Menerima</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $vaksin->tanggal}} {{ $vaksin->waktu}}</td>
                    <td>{{ $vaksin->nama_vaksin}}</td>
                    <td>{{ $vaksin->no_vaksin}}</td>
                    <td>Klinik Sumber Medika Mranggen</td>
                    <td>{{ $vaksin->keterangan}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="catatan" style="font-size: 14px">
        <div class="row">
            <div class="col-12">
                <p style="margin-bottom: -5px">Catatan : <br>
                    Apabila terdapat gejala pasca dilakukan vaksinasi dapat menghubungi :
                </p>
                <table class="table table-sm table-borderless">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $vaksin->doctor->nama_dokter}}</td>
                    </tr>
                    <tr>
                        <td>No SIP</td>
                        <td>:</td>
                        <td>{{ $vaksin->doctor->no_sip}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="mengetahui mt-3" style="font-size: 13px;">
        <div class="mr-4 ml-4">
            <div class="row">
                <div class="col-12">
                    <table class="table table-sm table-borderless text-center">
                        <tbody>
                            <tr>
                                <td>Mengetahui,</td>
                                <td>Pindai QR code ini untuk mengunduh hasil anda<br>
                                    <i>Scan this QR code to download your result</i>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-bottom">
                                    <img src="{{ asset('images/stempel.png')}}" style="width: 35%;margin-bottom:20px" alt=""><br>
                                    <u>{{ $vaksin->doctor->nama_dokter}}</u><br>
                                    Penanggungjawab Klinik Pratama 24 Jam<br>Sumber Medika Mranggen</td>
                                <td>
                                    @php
                                        $v = \App\Model\Vaksin::where('id_vaksin',$vaksin->id_vaksin)->first();
                                        $qrcode = $v->no_vaksin;
                                        $url = 'https://sumber-medika.herokuapp.com/surat-vaksin/'.$v->id_vaksin.'/code='.$qrcode;
                                    @endphp
                                    <img src="https://chart.googleapis.com/chart?cht=qr&chs=140x140&chl={{$url}}choe=UTF-8" class="mt-1">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
