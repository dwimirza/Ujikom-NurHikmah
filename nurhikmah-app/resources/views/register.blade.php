<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <form method="POST" enctype="multipart/form-data" action="/register" class="col-md-3">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" class="form-control"><br>
        <label for="namaOrtu">Nama Bapak/ibu:</label>
        <input type="text" id="namaOrtu" name="namaOrtu" class="form-control"><br>
        <label for="nomorOrtu">Nomor Telfon Ibu/Bapak:</label>
        <input type="number" id="nomorOrtu" name="nomorOrtu" class="form-control"><br>


        <label for="kartuKeluarga">Kartu Keluarga:</label>
        <input type="file" id="image2" name="kartuKeluarga" class="form-control"><br>

        <label for="akte">Akte Kelahiran:</label>
        <input type="file" id="image3" name="akte" class="form-control"><br>

        <label for="buktiPemabayaran">Bukti Pembayaran:</label>
        <input type="file" id="image4" name="buktiPembayaran" class="form-control"><br>

        <input type="submit" value="Submit" class="btn btn-success">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
