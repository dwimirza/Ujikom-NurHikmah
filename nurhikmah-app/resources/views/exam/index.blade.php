<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

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
                <a class="btn btn-success me-4" href="{{route('exam.create')}}"><i
                        class="bi bi-file-earmark-plus"></i></a>
                <div class="input-group">
                    <input class="form-control border-end-0 border" type="search" placeholder="Cari Soal Ujian"
                        id="example-search-input">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5"
                            type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="daftar-soal jarak-section">
        <table class="table table-striped table-responsive jarak-responsive">
            <tr>
                <th>
                    <p class="ms-3 m-0">No.</p>
                </th>
                <th>Course Name</th>
                <th>Set time</th>
                <th>Unique ID</th>
                <th>Action</th>
            </tr>
            @foreach ($exam as $ujian)
            <tr class="container bg-white border rounded">
                <td class="">
                    <p class="btn bg-secondary no-besar text-white ms-2 my-2 opacity-75">{{$ujian->id}}</p>
                </td>
                <td class="judul-besar fw-semibold text-capitalize">
                    <p class="my-2">{{$ujian->materi}}</p>
                </td>
                <td class="fs-6 opacity-75">
                    <p class="my-2">{{$ujian->waktu}}</p>
                </td>
                <td class="fs-6 opacity-75">
                    <p class="my-2">{{$ujian->uniqueid}}</p>
                </td>
                <td class="">
                    <a href="{{route('exam.edit', $ujian->id)}}"
                        class="btn btn-secondary text-white my-2 opacity-75">Buat Soal</a>
                </td>
                <a href="{{route('exam.show', $ujian->id)}}">Start Exam</a>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
