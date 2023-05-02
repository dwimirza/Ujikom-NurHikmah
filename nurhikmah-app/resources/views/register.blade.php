<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--Icon from Bootstap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/register.css">

</head>

<body>

    <section class="atur-height background-nurkhikmah">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block bg-images"
                                style="background-image: url('img/upacara.png');">
                                `
                                <!-- <img src="img/upacara.png"
                alt="Sample photo" class="img-fluid"
                style=" border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" /> -->
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-xl-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Pendaftaran Calon Siswa Baru</h3>

                                    <form method="POST" enctype="multipart/form-data" action="{{route('siswa.store')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="nama" name="nama"
                                                        class="form-control form-control-lg" required />
                                                    <label class="form-label" for="form3Example1m">Nama</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="namaOrtu" name="namaOrtu"
                                                        class="form-control form-control-lg" required />
                                                    <label class="form-label" for="namaOrtu">Nama Ayah/Bunda</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="number" id="nomorOrtu" name="nomorOrtu"
                                                class="form-control form-control-lg" required />
                                            <label class="form-label" for="nomorOrtu">Nomor Telfon Ayah/Bunda</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="file" id="image2" name="kartuKeluarga"
                                                class="form-control form-control-lg" required>
                                            <label class="form-label" for="kartuKeluarga">Kartu Keluarga</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="file" id="image3" name="akte"
                                                class="form-control form-control-lg" required>
                                            <label class="form-label" for="akte">Akte Kelahiran</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="file" id="image4" name="buktiPembayaran"
                                                class="form-control form-control-lg" required>
                                            <label class="form-label" for="buktiPemabayaran">Bukti Pembayaran</label>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <button type="reset" class="btn btn-light btn-lg">Reset semua</button>
                                            <button type="submit" class="btn btn-success btn-lg ms-2"
                                                value="submit">Submit Data Anda</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>

<!-- <form method="POST" enctype="multipart/form-data" action="{{route('siswa.store')}}" class="col-md-3">
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
</form> -->
