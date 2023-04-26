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
    <link rel="stylesheet" href="listsial.css">
    
</head>

<body class="px-4 py-3" style="background-color: #FAFAF9;">
    
    <div class="row">
        <div class="col-md-6">
            <p class="fs-2 fw-semibold">Daftar Soal Ujian</p>
        </div>
        <div class="col-md-6 d-flex justify-content-end align-items-start">
            <div class="d-flex justify-content-end col-md-6">
                <a class="btn btn-success me-4" href="{{route('exam.create')}}"><i class="bi bi-file-earmark-plus"></i></a>
                <div class="input-group">
                    <input class="form-control border-end-0 border" type="search" placeholder="Cari Soal Ujian" id="example-search-input">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="daftar-soal  pt-4">
        <table class="table table-stripped">
            <tr>
                <th class="ms-2">No.</th>
                <th>Course Name</th>
                <th>Set time</th>
                <th>Unique ID</th>
                <th>Action</th>
            </tr>
            @foreach ($exam as $ujian)
            <tr class="container bg-white border rounded ">
                <td class="btn bg-secondary px-3 text-dark ms-2 my-2">{{$ujian->id}}</td>
                <td class="fs-5 fw-semibold">{{$ujian->materi}}</td>
                <td class="">{{$ujian->waktu}}</td>
                <td class="">{{$ujian->uniqueid}}</td>
                <td class="">
                    <a href="{{route('exam.edit', $ujian->id)}}" class="btn bg-secondary text-white">Buat Soal</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>