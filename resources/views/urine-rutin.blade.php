<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Laboratorium Urine Rutin - {{ $lab->pasien->nama_pasien}}</title>
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
                            <th style="width: 15%">URINE RUTIN</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="urine-rutin" style="font-size: 14px">
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
                        <td>Warna</td>
                        <td class="text-center">{{ $ur->warna_ur}}</td>
                        <td class="text-center">Kuning Muda - Kuning Tua
                        </td>
                    </tr>
                    <tr>
                        <td>Kejernihan</td>
                        <td class="text-center">{{ $ur->kejernihan_ur}}</td>
                        <td class="text-center">Jernih
                        </td>
                    </tr>
                    <tr>
                        <td>Protein</td>
                        <td class="text-center">{{ $ur->protein_ur}}</td>
                        <td class="text-center">
                            5,0 - 8,0
                        </td>
                    </tr>
                    <tr>
                        <td>Glukosa</td>
                        <td class="text-center">{{ $ur->glukosa_ur}}</td>
                        <td class="text-center">Negatif
                        </td>
                    </tr>
                    <tr>
                        <td>Keton</td>
                        <td class="text-center">{{ $ur->keton_ur}}</td>
                        <td class="text-center">Negatif
                        </td>
                    </tr>
                    <tr>
                        <td class="ml-5">
                            Bilirubin
                        </td>
                        <td class="text-center">{{ $ur->bilirubin_ur}}</td>
                        <td class="text-center">
                            Negatif
                        </td>
                    </tr>
                    <tr>
                        <td class="ml-5">
                            Urobilinogen
                        </td>
                        <td class="text-center">{{ $ur->urobilinogen_ur}}</td>
                        <td class="text-center">
                            0,1 - 1,0
                        </td>
                    </tr>
                    <tr>
                        <td class="ml-5">
                            Nitrit
                        </td>
                        <td class="text-center">{{ $ur->nitrit_ur}}</td>
                        <td class="text-center">
                            Negatif
                        </td>
                    </tr>
                    <tr>
                        <td class="ml-5">
                            Berat Jenis
                        </td>
                        <td class="text-center">{{ $ur->berat_jenis_ur}}</td>
                        <td class="text-center">
                            1.005 - 1.030
                        </td>
                    </tr>
                    <tr>
                        <td class="ml-5">
                            Epitel Gepeng
                        </td>
                        <td class="text-center">{{ $ur->epitel_gepeng_ur}}</td>
                        <td class="text-center">

                        </td>
                    </tr>
                    <tr>
                        <td class="ml-5">
                            Ca Oxalat
                        </td>
                        <td class="text-center">{{ $ur->ca_oxalat_ur}}</td>
                        <td class="text-center">

                        </td>
                    </tr>
                    <tr>
                        <td class="ml-5">
                            Eritrosit
                        </td>
                        <td class="text-center">{{ $ur->eritrosit_ur}}</td>
                        <td class="text-center">

                        </td>
                    </tr>
                    <tr>
                        <td class="ml-5">
                            Leukosit
                        </td>
                        <td class="text-center">{{ $ur->leukosit_ur}}</td>
                        <td class="text-center">

                        </td>
                    </tr>
                    <tr>
                        <td class="ml-5">
                            Blood
                        </td>
                        <td class="text-center">{{ $ur->blood_ur}}</td>
                        <td class="text-center">
                            Negatif
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
                                            $ur = \App\Model\UrineRutin::where('id_urine_rutin',$ur->id_urine_rutin)->first();
                                            $qrcode = $ur->qrcode;
                                            $url = 'https://sumber-medika.web.id/surat-laboratorium/'.$ur->id_urine_rutin.'/urine-rutin/code='.$qrcode;
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
