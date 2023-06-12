<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body {text-align: center;}
      h1 {color: green;}
      .warning {color: red;}
    </style>
  </head>
  <body>
    <div>
      <h1>SPARK</h1>
      <p>Universitas Negeri Semarang</p>
      <p><strong>Tanggal: </strong>{{ $vehicles->tanggal }}</p>
      <p><strong>Waktu:</strong> {{ $vehicles->jam_masuk }}</p>
      <p><strong>Jenis Kendaraan:</strong> {{ $vehicles->jenis_kendaraan }}</p>
      <p><strong>Code:</strong> {{ $vehicles->plat }}</p>
      <p class="warning">Please do not lose the slip</p>
      <p class="">Thanks, Have a nice day!</p>
    </div>
    
  </body>
</html>