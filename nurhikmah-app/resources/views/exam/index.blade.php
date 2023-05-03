<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <table class="table table-stripped">
        <tr>
            <th>Course Name</th>
            <th>Set time</th>
            <th>Unique ID</th>
            <th>Action</th>
        </tr>
        @foreach ($exam as $ujian)
        <tr>
            <td>{{$ujian->materi}}</td>
            <td>{{$ujian->waktu}}</td>
            <td>{{$ujian->uniqueid}}</td>
            <td>
                <a href="{{route('exam.edit', $ujian->id)}}">Create Question</a>
                <a href="{{route('exam.show', $ujian->id)}}">Start Exam</a>
            </td>
        </tr>
        @endforeach
    </table>
    <a class="btn btn-success" href="{{route('exam.create')}}">Add Exam</a>
</body>
</html>