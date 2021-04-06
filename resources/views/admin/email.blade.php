<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kirim Email</title>
</head>
<body>
    <h1>Halo {{ $emailUser }}, laporan anda telah ditanggapi, terima kasih telah melapor.</h1>
    <span>Laporan anda akan kami jadikan bahan pertimbangan untuk dicarikan solusinya.</span>
    <span>Petugas yang menanggapi: {{ $emailAdmin }}</span>
</body>
</html>