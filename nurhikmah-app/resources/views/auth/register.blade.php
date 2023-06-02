<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nama" class="col-md-4 col-form-label text-md-end">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3" style="display: none">
                            <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>

                            <select name="role" id="role">
                                <option value="siswa">Siswa</option>
                            </select>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

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
            <p class="fs-6 opacity-75 mb-4">Buat akun untuk mengikuti ujian Penerimaan Peserta Didik Baru</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">

                    <div class="row mx-0 p-0">
                        <div class="form-outline col-md-6 mb-4">
                            <label for="nama" class="form-label fs-6 fw-medium">{{ __('Nama') }}<span class="text-danger">*</span></label>
                           <input id="name" type="text" class="form-control form-control-lg rounded
                            @error('name') is-invalid @enderror border-secondary" name="name" value="{{ old('name') }}" placeholder="Masukan Nama" required autocomplete="name" autofocus>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                          <div class="form-outline col-md-6 mb-4">
                            <label for="email" class="form-label fs-6 fw-medium text-md-end">{{ __('Email Address') }}<span class="text-danger">*</span></label>
                            <input id="email" type="email" class="form-control form-control-lg rounded @error('email') is-invalid @enderror border-secondary" name="email" value="{{ old('email') }}" placeholder="Masukan Email" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                    </div>

                      <div class="form-outline mb-4">
                        <label for="password" class="form-label fs-6 fw-medium">{{ __('Password') }}<span class="text-danger">*</span></label>
                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror rounded border-secondary" name="password" placeholder="Masukan Kata Sandi" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      </div>

                      <div class="form-outline mb-4">
                        <label for="password-confirm" class="form-label fs-6 fw-medium">{{ __('Confirm Password') }}<span class="text-danger">*</span></label>
                        <input id="password-confirm" type="password" class="form-control form-control-lg rounded border-secondary" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Kata Sandi">
                      </div>

                    <!-- <div class="mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class="form-check-label">{{ __('Ingat Kata Sandi') }}</label>
                    </div> -->

                </div>
                <div class="d-flex justify-content-center pt-3">
                    <button type="submit" class="btn btn-success btn-lg ms-2 w-100">{{ __('Register') }}</button>
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
