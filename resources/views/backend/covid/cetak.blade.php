<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        $url = 'https://sumber-medika.herokuapp.com/surat-keterangan/'.$covid->id.'/code='.$covid->qrcode;
    @endphp
    <img src="https://chart.googleapis.com/chart?cht=qr&chs=200x200&chl={{$url}}choe=UTF-8">
</body>
</html>
