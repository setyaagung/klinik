<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Laboratorium - {{ $lab->pasien->nama_pasien}}</title>
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
</body>
</html>
