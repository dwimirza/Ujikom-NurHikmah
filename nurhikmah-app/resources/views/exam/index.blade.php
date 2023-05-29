<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Ujian</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Js Sendiri -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Js Sendiri -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--Icon from Bootstap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/listsial.css') }}">

</head>

<body style="background-color: #FAFAF9;">

    <div class="row jarak-section">
        <div class="col-md-6 d-flex judul-atur jarak-responsive">
            <p class="fs-2 fw-semibold">Daftar Soal Ujian</p>
        </div>
        <div class="col-md-6 d-flex fitur-atur">
            <div class="d-flex justify-content-end col-md-6">
                @if(auth()->user()->role == "admin")
                <a class="btn btn-success me-4" href="{{route('exam.create')}}"><i class="bi bi-file-earmark-plus"></i>
                </a>
                @else
                @endif
                <form class="input-group">
                    <input class="form-control border-end-0 border" type="search" placeholder="Cari Soal Ujian"
                        id="example-search-input" name="search" value="{{ $value }}">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5"
                            type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </span>
                </form>
            </div>
        </div>
    </div>
    <div class="daftar-soal jarak-section">
        @include('sweetalert::alert')

        <table class="table table-striped table-responsive jarak-responsive" id="myTable">
            <!-- <thead> -->
            <tr>
                <!-- <th>
                <p class="ms-3 m-0">No.</p>
            </th> -->
                <th>Course Name</th>
                <th>Set time</th>
                <th>Jumlah Soal</th>
                <th class="d-flex justify-content-center">Action</th>
            </tr>
            <!-- </thead> -->
            <!-- <tbody> -->
            @foreach ($exam as $ujian)
            <tr class="container bg-white border rounded">
                <!-- <td class="">
                        <p class="btn bg-secondary no-besar text-white ms-2 my-2 opacity-75">{{$ujian->id}}</p>
                    </td> -->
                <td class="judul-besar fw-semibold text-capitalize">
                    <p class="my-2">{{$ujian->materi}}</p>
                </td>
                <td class="fs-6 opacity-75">
                    <p class="my-2">{{$ujian->waktu}} Minute</p>
                </td>
                <td class="fs-6 opacity-75">
                    @if($ujian->jumlah_soal == 0)
                    <p class="my-2">Belum ada soal</p>
                    @else
                    <p class="my-2">{{ $ujian->jumlah_soal }}</p>
                    @endif
                </td>
                <td class="d-flex justify-content-center gap-2">
                    @if(auth()->user()->role == "admin")
                    <a href="{{route('exam.edit', $ujian->id)}}"
                        class="btn btn-secondary text-white my-2 opacity-75">Buat Soal</a>
                    @else
                    @endif
                    @if($ujian->jumlah_soal == 0)
                    <button onclick="swal('Tidak ada soal di dalam exam ini', 'Silahkan hubungi penguji', 'error')"
                        class="btn btn-danger my-2 opacity-75">Mulai
                        Ujian
                    </button>
                    @else
                    <a href="{{ route('exam.show', $ujian->id) }}"
                        class="btn btn-success text-white my-2 opacity-75">Mulai Ujian</a>
                    @endif
                    <form action="{{ route('exam.destroy', $ujian->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        @if(auth()->user()->role == "admin")
                        <button type="submit" class="btn btn-danger my-2"
                            onclick="return confirm('Are you sure you want to delete this exam?')">
                            Hapus Materi
                        </button>
                        @else
                        @endif
                    </form>
                </td>
            </tr>
            @endforeach
            <!-- </tbody> -->
        </table>
    </div>
</body>

</html>
