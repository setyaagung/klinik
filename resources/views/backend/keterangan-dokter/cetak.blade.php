<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Keterangan Dokter - {{ $kd->pasien->nama_pasien}}</title>
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
    <div class="text-center mt-4">
        <h5><u>SURAT KETERANGAN DOKTER</u></h5>
    </div>
    <div class="text-justify mt-3" style="font-size: 15px">
        <p>Menerangkan dengan sesungguhnya bahwa :</p>
        <table class="table table-sm table-borderless">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $kd->pasien->nama_pasien}}</td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td>{{ \Carbon\Carbon::parse($kd->pasien->tanggal_lahir)->diff(\Carbon\Carbon::now())->format('%y Tahun')}}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td>{{ $kd->pekerjaan}}</td>
            </tr>
        </table>
        <p>Pada tanggal {{ \Carbon\Carbon::parse($kd->tanggal_periksa)->isoFormat('D MMMM Y')}} sudah dilakukan pemeriksaan kesehatannya dengan hasil perlu istirahat
            selama {{ \Carbon\Carbon::parse($kd->mulai_istirahat)->diff(\Carbon\Carbon::parse($kd->selesai_istirahat))->format('%d hari')}} sejak tanggal {{ \Carbon\Carbon::parse($kd->mulai_istirahat)->isoFormat('D MMMM Y')}} s/d {{ \Carbon\Carbon::parse($kd->selesai_istirahat)->isoFormat('D MMMM Y')}}
            <br>
            Demikian untuk diketahui adanya.
        </p>
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
                                    <td class=" align-content-center">
                                        <img src="{{ asset('images/stempel.png')}}" style="width: 35%;margin-bottom:20px" alt=""><br>
                                        <u>{{ $kd->doctor->nama_dokter}}</u><br>
                                    </td>
                                    <td>
                                        @php
                                            $kds = \App\Model\KeteranganDokter::where('id_keterangan_dokter',$kd->id_keterangan_dokter)->first();
                                            $qrcode = $kds->qrcode;
                                            $url = 'https://sumber-medika.web.id/keterangan-dokter/'.$kds->id_keterangan_dokter.'/code='.$qrcode;
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
    </div>
</body>
</html>
