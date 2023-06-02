<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--Icon from Bootstap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/login.css">

</head>

<body class="vh-100">

    <section class="d-flex row h-100 responsive-layout">
        <div class="col-xl-4 col-lg-6 px-5 py-4 d-flex flex-column">
            <div>
                <img src="img/logo-horizontal.png" alt="logo-nurhikmah" class="mb-4" style="max-height: 122px;">
            </div>
            <p class="fs-2 fw-bold mb-4">Selamat Datang Di Website PPDB SMPIT Nur-Hikmah</p>
            <p class="fs-6 opacity-75 mb-4">Masukan akun untuk mengikuti ujian Penerimaan Peserta Didik Baru</p>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="row">

                    <div class="form-outline mb-4">
                        <label class="form-label fs-6 fw-medium" for="name">{{ __('Nama') }}<span class="text-danger">*</span></label>
                        <input type="text" id="name" name="name" class="form-control form-control-lg rounded
                            @error('name') is-invalid @enderror border-secondary" placeholder="Masukan Nama"
                           value="{{ old('name') }}" required/>

                        @error('siswa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label fs-6 fw-medium"
                            for="katasandiSiswa">{{ __('Kata Sandi Siswa') }}<span class="text-danger">*</span></label>
                        <input type="password" id="password" name="password"
                            class="form-control form-control-lg @error('password') is-invalid @enderror rounded border-secondary"
                            placeholder="Masukan Kata Sandi" autocomplete="current-password" required />

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class="form-check-label">{{ __('Ingat Kata Sandi') }}</label>
                    </div>

                </div>

                <div class="d-flex justify-content-center pt-3">
                    <button class="btn btn-success btn-lg ms-2 w-100" value="submit">{{ __('Mulai Ujian') }}</button>
                </div>

            </form>

            <p class="opacity-75 justify-content-center d-flex align-items-center mt-auto">Design by ©idn student</p>
        </div>

        <div class="col-xl-8 d-none d-lg-block col-lg-6 img-fluid responsive-image-layout" style="
        background: linear-gradient(#0fa95737, #0fa95737), url('img/openning.png') center;
        background-size: cover;">

        </div>
    </section>

</body>

</html>
