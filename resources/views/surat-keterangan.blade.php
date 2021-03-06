<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Pemeriksaan {{ $cv->pasien->nama_pasien}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{('images/logo.jpeg')}}" type="image/x-icon">
    <style type="text/css">
        @media(max-width: 768px){
            .stempel{
                width: 100% !important;
            }
            .logo{
                text-align: center !important
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header mt-5">
            <div class="row">
                <div class="col-sm-2 logo">
                    <img src="{{ asset('images/logo.jpeg')}}" class="img-fluid logo" style="width: 120px" alt="">
                </div>
                <div class="col-sm-8 text-center">
                    <h4 class="font-weight-bold text-success">KLINIK PRATAMA 24 JAM<br>SUMBER MEDIKA MRANGGEN</h4>
                    <p style="font-size: 13px;margin-top: -5px;">
                        Jl. Kangkung Krajan Raya RT. 02/RW. 01, Desa KangKung, Kecamatan Mranggen<br>
                        Kabupaten Demak, Kode Pos 59567 Telp. (024) 76418330, email:kliniksumbermedika12@yahoo.com
                    </p>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <hr style="border: 1px solid black;margin-top: -15px">
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-sm table-borderless" style="font-size: 14px">
                    <tbody>
                        <tr>
                            <th>Nama Pasien</th>
                            <td>:</td>
                            <td>{{ $cv->pasien->nama_pasien}}</td>
                            <td>Dokter Penanggungjawab</td>
                            <td>:</td>
                            <td>{{ $cv->doctor->nama_dokter}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td> : </td>
                            <td>{{ \Carbon\Carbon::parse($cv->pasien->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
                            <td>No. SIP</td>
                            <td>:</td>
                            <td>{{ $cv->doctor->no_sip}}</td>
                        </tr>
                        <tr>
                            <th>No. Sampel</th>
                            <td> : </td>
                            <td>{{ $cv->no_sampel}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td> : </td>
                            <td>{{ \Carbon\Carbon::parse($cv->tanggal)->isoFormat('D MMMM Y')}}</td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td> : </td>
                            <td>{{ $cv->pasien->alamat}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="hasil">
            <table class="table table-sm">
                <thead class="text-center">
                    <tr>
                        <th colspan="4">HASIL PEMERIKSAAN LABORATORIUM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="font-weight-bold" style="font-size: 13px !important">
                        <td>PEMERIKSAAN</td>
                        <td>HASIL</td>
                        <td>NILAI RUJUKAN</td>
                        <td>SATUAN</td>
                    </tr>
                    @if ($cv->pemeriksaan == 'COVID RAPID TEST SWAB CORPORATE')
                        <tr style="font-size: 13px !important">
                            <td>COVID RAPID TEST SWAB CORPORATE</td>
                            <td>{{ $cv->hasil}}</td>
                            <td>{{ $cv->rujukan}}</td>
                            <td>{{ $cv->satuan}}</td>
                        </tr>
                        <tr style="font-size: 13px !important">
                            <td>Antigen SARS - Cov - 2</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @elseif ($cv->pemeriksaan == 'Antigen SARS - Cov - 2')
                        <tr style="font-size: 13px !important">
                            <td>COVID RAPID TEST SWAB CORPORATE</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="font-size: 13px !important">
                            <td>Antigen SARS - Cov - 2</td>
                            <td>{{ $cv->hasil}}</td>
                            <td>{{ $cv->rujukan}}</td>
                            <td>{{ $cv->satuan}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @else
                        <tr style="font-size: 13px !important">
                            <td>Rapid Test lg-G COVID-19</td>
                            <td>{{ $cv->hasil}}</td>
                            <td>{{ $cv->rujukan}}</td>
                            <td>{{ $cv->satuan}}</td>
                        </tr>
                        <tr style="font-size: 13px !important">
                            <td>Rapid Test lg-M COVID-19</td>
                            <td>{{ $cv->hasil}}</td>
                            <td>{{ $cv->rujukan}}</td>
                            <td>{{ $cv->satuan}}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="catatan ml-2">
            <div class="row">
                <div class="col-12">
                    <p class="font-weight-bold" style="font-size: 13px">CATATAN :</p>
                    <div class="positif ml-5">
                        <p class="font-weight-bold" style="font-size: 13px">JIKA HASIL POSITIF</p>
                        <ul class="text-justify" style="font-size: 13px">
                            <li>Pemeriksaan konfirmasi dengan pemeriksaan RT PCR</li>
                            <li>Lakukan karantina atau isolasi dengan ketentuan</li>
                            <li>Menerapkan PHBS (Perilaku hidup bersih dan sehat mencuci tangan, menerapkan etika batuk, menggunakan masker
                                saat sakit, menjaga stamina) dan physical distancing
                            </li>
                        </ul>
                    </div>
                    <div class="negatif ml-5">
                        <p class="font-weight-bold" style="font-size: 13px">JIKA HASIL NEGATIF</p>
                        <ul class="text-justify" style="font-size: 13px">
                            <li>Hasil negatif tidak menyingkirkan kemungkinan terinfeksi SARS-COV-2 sehingga masih beresiko menularkan ke orang lain</li>
                            <li>Hasil negatif dapat terjadi pada kondisi kuantitas antigen pada spesimen dibawah level deteksi alat</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mengetahui mt-3" style="font-size: 13px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
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
                                        <img src="{{ asset('images/stempel.png')}}" class="stempel" style="width: 35%;margin-bottom:20px" alt=""><br>
                                        <u>{{ $cv->doctor->nama_dokter}}</u><br>
                                        Penanggungjawab Klinik Pratama 24 Jam<br>Sumber Medika Mranggen</td>
                                    <td>
                                        @php
                                            $cv = \App\Model\Covid::where('id',$cv->id)->first();
                                            $qrcode = $cv->qrcode;
                                            $url = 'https://sumber-medika.web.id/surat-keterangan/'.$cv->id.'/code='.$qrcode;
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
