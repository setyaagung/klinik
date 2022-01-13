<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Laboratorium Kimia Darah - {{ $lab->pasien->nama_pasien}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{('images/logo.jpeg')}}" type="image/x-icon">
    <style type="text/css">
        .darah-rutin table,th,td{
            border: 1px solid black;
        }
        .darah-lengkap table,th,td{
            border: 1px solid black;
        }
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
                <table class="table table-sm table-borderless" style="font-size: 13px">
                    <tbody>
                        <tr>
                            <th>Nama Pasien</th>
                            <td>:</td>
                            <td>{{ $lab->pasien->nama_pasien}}</td>
                            <td style="width: 15%">Dokter</td>
                            <td>:</td>
                            <td style="width: 30%">{{ $lab->doctor->nama_dokter}}</td>
                        </tr>
                        <tr>
                            <th style="width: 15%">Tanggal Lahir</th>
                            <td> : </td>
                            <td style="width: 30%">{{ \Carbon\Carbon::parse($lab->pasien->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
                            <td>No. SIP</td>
                            <td>:</td>
                            <td>{{ $lab->doctor->no_sip}}</td>
                        </tr>
                        <tr>
                            <th style="width: 15%">Alamat</th>
                            <td> : </td>
                            <td style="width: 30%;text-align: justify;">{{ $lab->pasien->alamat}}</td>
                        </tr>
                        <tr>
                            <th style="width: 15%">KIMIA DARAH</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="kimia-darah" style="font-size: 14px">
            <table style="width: 100%">
                <thead class="text-center">
                    <tr>
                        <th>PEMERIKSAAN</th>
                        <th>HASIL</th>
                        <th>NILAI NORMAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Glukosa Darah Puasa</td>
                        <td class="text-center">{{ $kd->glukosa_puasa_kd}}</td>
                        <td class="text-center">70 -126 mg/dL
                        </td>
                    </tr>
                    <tr>
                        <td>Glukosa 2 Jam PP</td>
                        <td class="text-center">{{ $kd->glukosa_pp_kd}}</td>
                        <td class="text-center"> diatas 200 mg/dL
                        </td>
                    </tr>
                    <tr>
                        <td>Gula Darah Sewaktu</td>
                        <td class="text-center">{{ $kd->gula_darah_sewaktu_kd}}</td>
                        <td class="text-center"> diatas 200 mg/dL
                        </td>
                    </tr>
                    <tr>
                        <td>Cholesterol Total</td>
                        <td class="text-center">{{ $kd->cholesterol_total_kd}}</td>
                        <td class="text-center"> diatas 200 mg/dL
                        </td>
                    </tr>
                    <tr>
                        <td>HBsAg</td>
                        <td class="text-center">{{ $kd->hbsag_kd}}</td>
                        <td class="text-center"> Negatif
                        </td>
                    </tr>
                    <tr>
                        <td>Trigliserida</td>
                        <td class="text-center">{{ $kd->trigliserida_kd}}</td>
                        <td class="text-center"> 200 mg/dL
                        </td>
                    </tr>
                    <tr>
                        <td>Hemoglobin</td>
                        <td class="text-center">{{ $kd->hemoglobin_kd}}</td>
                        <td class="text-center"> Lk. 13,0 - 17,9 g/dL <br>
                            Pr. 12,0 - 15,0 g/dL
                        </td>
                    </tr>
                    <tr>
                        <td>Asam Urat</td>
                        <td class="text-center">{{ $kd->asam_urat_kd}}</td>
                        <td class="text-center">  <br>
                            Pr.2,4 - 5,1 mg/dL
                        </td>
                    </tr>
                    <tr>
                        <td>SGOT</td>
                        <td class="text-center">{{ $kd->sgot_kd}}</td>
                        <td class="text-center"> 5 - 40 u/L
                        </td>
                    </tr>
                    <tr>
                        <td>SGPT</td>
                        <td class="text-center">{{ $kd->sgpt_kd}}</td>
                        <td class="text-center"> 7 - 56 u/L
                        </td>
                    </tr>
                    <tr>
                        <td>Ureum</td>
                        <td class="text-center">{{ $kd->ureum_kd}}</td>
                        <td class="text-center"> Lk. 8 - 24 mg/dL <br>
                            Pr. 6 - 21 mg/dL
                        </td>
                    </tr>
                    <tr>
                        <td>Kreatinin</td>
                        <td class="text-center">{{ $kd->kreatinin_kd}}</td>
                        <td class="text-center"> Lk. 0,6 - 1,2 mg/dL <br>
                            Pr. 0,6 - 1,1 mg/dL
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="mengetahui mt-5" style="font-size: 13px;">
            <div class="mr-4 ml-4">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-sm table-borderless text-center">
                            <tbody>
                                <tr>
                                    <td>Demak, {{ \Carbon\Carbon::parse($lab->tanggal)->isoFormat('D MMMM Y')}}</td>
                                    <td>Pindai QR code ini untuk mengunduh hasil anda<br>
                                        <i>Scan this QR code to download your result</i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-center">
                                        <img src="{{ asset('images/stempel.png')}}" class="stempel" style="width: 35%;margin-bottom:20px" alt=""><br>
                                        <u>{{ $lab->doctor->nama_dokter}}</u><br>
                                    </td>
                                    <td>
                                        @php
                                            $kd = \App\Model\KimiaDarah::where('id_kimia_darah',$kd->id_kimia_darah)->first();
                                            $qrcode = $kd->qrcode;
                                            $url = 'https://sumber-medika.web.id/surat-laboratorium/'.$kd->id_kimia_darah.'/kimia-darah/code='.$qrcode;
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
