<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Laboratorium - {{ $lab->pasien->nama_pasien}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('images/logo.jpeg')}}" type="image/x-icon">
    <style>
        .darah-rutin table,th,td{
            border: 1px solid black;
        }
        .darah-lengkap table,th,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <!-- DARAH RUTIN -->
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
            <table class="table table-sm table-borderless" style="font-size: 13px;">
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
                        <td style="width: 30%;text-align: justify;height:60px">{{ $lab->pasien->alamat}}</td>
                    </tr>
                    <tr>
                        <th style="width: 15%">DARAH RUTIN</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="darah-rutin" style="font-size: 14px">
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
                    <td>Hemoglobin</td>
                    <td class="text-center">{{ $darah_rutin->hemoglobin_dr}}</td>
                    <td class="text-center">Lk. 13,0 - 17,9 g/dL <br>
                        Pr. 12,0 - 15,0 g/dL
                    </td>
                </tr>
                <tr>
                    <td>Eritrosit</td>
                    <td class="text-center">{{ $darah_rutin->eritrosit_dr}}</td>
                    <td class="text-center">Lk. 4,5 - 5,5 jt/uL <br>
                        Pr. 4,0 - 5,0 jt/uL
                    </td>
                </tr>
                <tr>
                    <td>Leukosit</td>
                    <td class="text-center">{{ $darah_rutin->leukosit_dr}}</td>
                    <td class="text-center">
                        4.000 - 11.000 /uL
                    </td>
                </tr>
                <tr>
                    <td>Trombosit</td>
                    <td class="text-center">{{ $darah_rutin->trombosit_dr}}</td>
                    <td class="text-center">150.000 - 450.000 /uL
                    </td>
                </tr>
                <tr>
                    <td>Hematokrit</td>
                    <td class="text-center">{{ $darah_rutin->hematokrit_dr}}</td>
                    <td class="text-center">Lk. 40 - 48 vol% <br>
                        Pr. 37 - 43 vol%
                    </td>
                </tr>
                <tr>
                    <td><p class="font-weight-bold" style="margin-bottom: -7px">WIDAL</p>
                        <div class="ml-5">S. typhi O</div>
                    </td>
                    <td class="text-center">{{ $darah_rutin->typhi_o_dr}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. typhi H
                    </td>
                    <td class="text-center">{{ $darah_rutin->typhi_h_dr}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. Paratyphi AO
                    </td>
                    <td class="text-center">{{ $darah_rutin->paratyphi_ao_dr}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. Paratyphi AH
                    </td>
                    <td class="text-center">{{ $darah_rutin->paratyphi_ah_dr}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. Paratyphi BO
                    </td>
                    <td class="text-center">{{ $darah_rutin->paratyphi_bo_dr}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. Paratyphi BH
                    </td>
                    <td class="text-center">{{ $darah_rutin->paratyphi_bh_dr}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. Paratyphi CO
                    </td>
                    <td class="text-center">{{ $darah_rutin->paratyphi_co_dr}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. Paratyphi CH
                    </td>
                    <td class="text-center">{{ $darah_rutin->paratyphi_ch_dr}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mengetahui mt-5" style="font-size: 13px;margin-bottom:48px">
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
                                    <img src="{{ asset('images/stempel.png')}}" style="width: 35%;margin-bottom:20px" alt=""><br>
                                    <u>{{ $lab->doctor->nama_dokter}}</u><br>
                                </td>
                                <td>
                                    @php
                                        $dr = \App\Model\DarahRutin::where('id_darah_rutin',$darah_rutin->id_darah_rutin)->first();
                                        $qrcode = $dr->qrcode;
                                        $url = 'https://sumber-medika.web.id/surat-laboratorium/'.$dr->id_darah_rutin.'/darah-rutin/code='.$qrcode;
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
    <!-- DARAH LENGKAP -->
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
                </tbody>
            </table>
            <table class="table table-sm table-borderless" style="font-size: 13px;margin-top: -10px;margin-bottom: -5px">
                <tbody>
                    <tr>
                        <th>DARAH LENGKAP DAN WIDAL</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="darah-lengkap" style="font-size: 13px">
        <table style="width: 100%;">
            <thead class="text-center">
                <tr>
                    <th>PEMERIKSAAN</th>
                    <th>HASIL</th>
                    <th>NILAI NORMAL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hemoglobin</td>
                    <td class="text-center">{{ $darah_lengkap->hemoglobin_dl}}</td>
                    <td class="text-center">Lk. 13,0 - 17,9 g/dL <br>
                        Pr. 12,0 - 15,0 g/dL
                    </td>
                </tr>
                <tr>
                    <td>Eritrosit</td>
                    <td class="text-center">{{ $darah_lengkap->eritrosit_dl}}</td>
                    <td class="text-center">Lk. 4,5 - 5,5 jt/uL <br>
                        Pr. 4,0 - 5,0 jt/uL
                    </td>
                </tr>
                <tr>
                    <td>Leukosit</td>
                    <td class="text-center">{{ $darah_lengkap->leukosit_dl}}</td>
                    <td class="text-center">
                        4.000 - 11.000 /uL
                    </td>
                </tr>
                <tr>
                    <td>Trombosit</td>
                    <td class="text-center">{{ $darah_lengkap->trombosit_dl}}</td>
                    <td class="text-center">150.000 - 450.000 /uL
                    </td>
                </tr>
                <tr>
                    <td><p class="font-weight-bold" style="margin-bottom: -5px">HITUNG JENIS LEUKOSIT</p>
                        <div class="ml-5">Eosinophil</div>
                    </td>
                    <td class="text-center">{{ $darah_lengkap->eosinophil_dl}}</td>
                    <td class="text-center">
                        1 - 3 %
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Basophil
                    </td>
                    <td class="text-center">{{ $darah_lengkap->basophil_dl}}</td>
                    <td class="text-center">
                        0 - 1 %
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Neutrofil Batang
                    </td>
                    <td class="text-center">{{ $darah_lengkap->neutrofil_batang_dl}}</td>
                    <td class="text-center">
                        2 - 6 %
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Neutrofil Segmen
                    </td>
                    <td class="text-center">{{ $darah_lengkap->neutrofil_segmen_dl}}</td>
                    <td class="text-center">
                        50 - 70 %
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Limfosit
                    </td>
                    <td class="text-center">{{ $darah_lengkap->limfosit_dl}}</td>
                    <td class="text-center">
                        20 - 40 %
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Monosit
                    </td>
                    <td class="text-center">{{ $darah_lengkap->monosit_dl}}</td>
                    <td class="text-center">
                        2 - 8 %
                    </td>
                </tr>
                <tr>
                    <td>Hematokrit</td>
                    <td class="text-center">{{ $darah_lengkap->hematokrit_dl}}</td>
                    <td class="text-center">Lk. 40 - 48 vol% <br>
                        Pr. 37 - 43 vol%
                    </td>
                </tr>
                <tr>
                    <td>MCV</td>
                    <td class="text-center">{{ $darah_lengkap->mcv_dl}}</td>
                    <td class="text-center">80 - 86
                    </td>
                </tr>
                <tr>
                    <td>MCH</td>
                    <td class="text-center">{{ $darah_lengkap->mch_dl}}</td>
                    <td class="text-center">27 - 31
                    </td>
                </tr>
                <tr>
                    <td>MCHC</td>
                    <td class="text-center">{{ $darah_lengkap->mchc_dl}}</td>
                    <td class="text-center">35 - 30
                    </td>
                </tr>
                <tr>
                    <td>PDW</td>
                    <td class="text-center">{{ $darah_lengkap->pwd_dl}}</td>
                    <td class="text-center">
                    </td>
                </tr>
                <tr>
                    <td><p class="font-weight-bold" style="margin-bottom: -7px">WIDAL</p>
                        <div class="ml-5">S. typhi O</div>
                    </td>
                    <td class="text-center">{{ $darah_lengkap->typhi_o_dl}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. typhi H
                    </td>
                    <td class="text-center">{{ $darah_lengkap->typhi_h_dl}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. Paratyphi AO
                    </td>
                    <td class="text-center">{{ $darah_lengkap->paratyphi_ao_dl}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. Paratyphi AH
                    </td>
                    <td class="text-center">{{ $darah_lengkap->paratyphi_ah_dl}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. Paratyphi BO
                    </td>
                    <td class="text-center">{{ $darah_lengkap->paratyphi_bo_dl}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. Paratyphi BH
                    </td>
                    <td class="text-center">{{ $darah_lengkap->paratyphi_bh_dl}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        S. Paratyphi CO
                    </td>
                    <td class="text-center">{{ $darah_lengkap->paratyphi_co_dl}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="mengetahui mt-1" style="font-size: 13px;">
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
                                    <img src="{{ asset('images/stempel.png')}}" style="width: 35%;margin-bottom:20px" alt=""><br>
                                    <u>{{ $lab->doctor->nama_dokter}}</u><br>
                                </td>
                                <td>
                                    @php
                                        $dl = \App\Model\DarahLengkap::where('id_darah_lengkap',$darah_lengkap->id_darah_lengkap)->first();
                                        $qrcode = $dl->qrcode;
                                        $url = 'https://sumber-medika.web.id/surat-laboratorium/'.$dl->id_darah_lengkap.'/darah-lengkap/code='.$qrcode;
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
    <!-- URINE RUTIN -->
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
                        <td style="width: 30%;text-align: justify;height:60px">{{ $lab->pasien->alamat}}</td>
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
                    <td class="text-center">{{ $urine_rutin->warna_ur}}</td>
                    <td class="text-center">Kuning Muda - Kuning Tua
                    </td>
                </tr>
                <tr>
                    <td>Kejernihan</td>
                    <td class="text-center">{{ $urine_rutin->kejernihan_ur}}</td>
                    <td class="text-center">Jernih
                    </td>
                </tr>
                <tr>
                    <td>Protein</td>
                    <td class="text-center">{{ $urine_rutin->protein_ur}}</td>
                    <td class="text-center">
                        5,0 - 8,0
                    </td>
                </tr>
                <tr>
                    <td>Glukosa</td>
                    <td class="text-center">{{ $urine_rutin->glukosa_ur}}</td>
                    <td class="text-center">Negatif
                    </td>
                </tr>
                <tr>
                    <td>Keton</td>
                    <td class="text-center">{{ $urine_rutin->keton_ur}}</td>
                    <td class="text-center">Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Bilirubin
                    </td>
                    <td class="text-center">{{ $urine_rutin->bilirubin_ur}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Urobilinogen
                    </td>
                    <td class="text-center">{{ $urine_rutin->urobilinogen_ur}}</td>
                    <td class="text-center">
                        0,1 - 1,0
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Nitrit
                    </td>
                    <td class="text-center">{{ $urine_rutin->nitrit_ur}}</td>
                    <td class="text-center">
                        Negatif
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Berat Jenis
                    </td>
                    <td class="text-center">{{ $urine_rutin->berat_jenis_ur}}</td>
                    <td class="text-center">
                        1.005 - 1.030
                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Epitel Gepeng
                    </td>
                    <td class="text-center">{{ $urine_rutin->epitel_gepeng_ur}}</td>
                    <td class="text-center">

                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Ca Oxalat
                    </td>
                    <td class="text-center">{{ $urine_rutin->ca_oxalat_ur}}</td>
                    <td class="text-center">

                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Eritrosit
                    </td>
                    <td class="text-center">{{ $urine_rutin->eritrosit_ur}}</td>
                    <td class="text-center">

                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Leukosit
                    </td>
                    <td class="text-center">{{ $urine_rutin->leukosit_ur}}</td>
                    <td class="text-center">

                    </td>
                </tr>
                <tr>
                    <td class="ml-5">
                        Blood
                    </td>
                    <td class="text-center">{{ $urine_rutin->blood_ur}}</td>
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
                                    <img src="{{ asset('images/stempel.png')}}" style="width: 35%;margin-bottom:20px" alt=""><br>
                                    <u>{{ $lab->doctor->nama_dokter}}</u><br>
                                </td>
                                <td>
                                    @php
                                        $ur = \App\Model\UrineRutin::where('id_urine_rutin',$urine_rutin->id_urine_rutin)->first();
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
    <!-- KIMIA DARAH -->
    <div class="header" style="margin-top: 120px">
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
                        <td style="width: 30%;text-align: justify;height:60px">{{ $lab->pasien->alamat}}</td>
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
                    <td class="text-center">{{ $kimia_darah->glukosa_puasa_kd}}</td>
                    <td class="text-center">70 -126 mg/dL
                    </td>
                </tr>
                <tr>
                    <td>Glukosa 2 Jam PP</td>
                    <td class="text-center">{{ $kimia_darah->glukosa_pp_kd}}</td>
                    <td class="text-center"> diatas 200 mg/dL
                    </td>
                </tr>
                <tr>
                    <td>Gula Darah Sewaktu</td>
                    <td class="text-center">{{ $kimia_darah->gula_darah_sewaktu_kd}}</td>
                    <td class="text-center"> diatas 200 mg/dL
                    </td>
                </tr>
                <tr>
                    <td>Cholesterol Total</td>
                    <td class="text-center">{{ $kimia_darah->cholesterol_total_kd}}</td>
                    <td class="text-center"> diatas 200 mg/dL
                    </td>
                </tr>
                <tr>
                    <td>HBsAg</td>
                    <td class="text-center">{{ $kimia_darah->hbsag_kd}}</td>
                    <td class="text-center"> Negatif
                    </td>
                </tr>
                <tr>
                    <td>Trigliserida</td>
                    <td class="text-center">{{ $kimia_darah->trigliserida_kd}}</td>
                    <td class="text-center"> 200 mg/dL
                    </td>
                </tr>
                <tr>
                    <td>Hemoglobin</td>
                    <td class="text-center">{{ $kimia_darah->hemoglobin_kd}}</td>
                    <td class="text-center"> Lk. 13,0 - 17,9 g/dL <br>
                        Pr. 12,0 - 15,0 g/dL
                    </td>
                </tr>
                <tr>
                    <td>Asam Urat</td>
                    <td class="text-center">{{ $kimia_darah->asam_urat_kd}}</td>
                    <td class="text-center">  <br>
                        Pr.2,4 - 5,1 mg/dL
                    </td>
                </tr>
                <tr>
                    <td>SGOT</td>
                    <td class="text-center">{{ $kimia_darah->sgot_kd}}</td>
                    <td class="text-center"> 5 - 40 u/L
                    </td>
                </tr>
                <tr>
                    <td>SGPT</td>
                    <td class="text-center">{{ $kimia_darah->sgpt_kd}}</td>
                    <td class="text-center"> 7 - 56 u/L
                    </td>
                </tr>
                <tr>
                    <td>Ureum</td>
                    <td class="text-center">{{ $kimia_darah->ureum_kd}}</td>
                    <td class="text-center"> Lk. 8 - 24 mg/dL <br>
                        Pr. 6 - 21 mg/dL
                    </td>
                </tr>
                <tr>
                    <td>Kreatinin</td>
                    <td class="text-center">{{ $kimia_darah->kreatinin_kd}}</td>
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
                                    <img src="{{ asset('images/stempel.png')}}" style="width: 35%;margin-bottom:20px" alt=""><br>
                                    <u>{{ $lab->doctor->nama_dokter}}</u><br>
                                </td>
                                <td>
                                    @php
                                        $kd = \App\Model\KimiaDarah::where('id_kimia_darah',$kimia_darah->id_kimia_darah)->first();
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
    <!-- SEROLOGI -->
    <div class="header" style="margin-top: 70px">
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
                        <td style="width: 30%;text-align: justify;height:60px">{{ $lab->pasien->alamat}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-sm table-borderless" style="font-size: 13px;margin-top: -10px;margin-bottom: -5px">
                <tbody>
                    <tr>
                        <th>SEROLOGI FAAL HATI & FUNSGI GINJAL</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="serologi" style="font-size: 14px">
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
                    <td>Asam Urat</td>
                    <td class="text-center">{{ $serologi->asam_urat_sl}}</td>
                    <td class="text-center"> Lk. 3,4 - 7,0 mg/dL<br>
                        Pr.2,4 - 5,1 mg/dL
                    </td>
                </tr>
                <tr>
                    <td>SGOT</td>
                    <td class="text-center">{{ $serologi->sgot_sl}}</td>
                    <td class="text-center"> 5 - 40 u/L
                    </td>
                </tr>
                <tr>
                    <td>SGPT</td>
                    <td class="text-center">{{ $serologi->sgpt_sl}}</td>
                    <td class="text-center">7 - 56 u/L
                    </td>
                </tr>
                <tr>
                    <td>Ureum</td>
                    <td class="text-center">{{ $serologi->ureum_sl}}</td>
                    <td class="text-center">Lk. 8 - 24 mg/dL <br>
                        Pr. 6 - 21 mg/dL
                    </td>
                </tr>
                <tr>
                    <td>Kreatinin</td>
                    <td class="text-center">{{ $serologi->kreatinin_sl}}</td>
                    <td class="text-center">Lk. 0,6 - 1,2 mg/dL <br>
                        Pr. 0,6 - 1,1 mg/dL
                    </td>
                </tr>
                <tr>
                    <td>HCG</td>
                    <td class="text-center">{{ $serologi->hcg_sl}}</td>
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
                                    <img src="{{ asset('images/stempel.png')}}" style="width: 35%;margin-bottom:20px" alt=""><br>
                                    <u>{{ $lab->doctor->nama_dokter}}</u><br>
                                </td>
                                <td>
                                    @php
                                        $sl = \App\Model\Serologi::where('id_serologi',$serologi->id_serologi)->first();
                                        $qrcode = $sl->qrcode;
                                        $url = 'https://sumber-medika.web.id/surat-laboratorium/'.$sl->id_serologi.'/serologi/code='.$qrcode;
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
