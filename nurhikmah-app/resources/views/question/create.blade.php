@extends('layouts.app')

@section('content')
<form action="{{route('question.store')}}" method="post">
    @csrf
    <div class="container">
        <div class="row mt-2 p-2">
            <div class="col-xl-12 col-xl-2">
                <div class="card">
                    <div class="card-header bg-info">
                        <h3 class="card-title">Create Question</h3>
                    </div>
                    <div class="card-body" id="card-body">
                        <div class="form-group question">
                            <input type="text" name="soal[]" placeholder="Question.." class="form-control mb-3 mt-3">
                            <input type="text" name="jawaban_a[]" class="form-control mb-3" placeholder="Opsi A">
                            <input type="text" name="jawaban_b[]" class="form-control mb-3" placeholder="Opsi B">
                            <input type="text" name="jawaban_c[]" class="form-control mb-3" placeholder="Opsi C">
                            <input type="text" name="jawaban_d[]" class="form-control mb-3" placeholder="Opsi D">
                            <input type="text" value="{{$exam->id}}" name="id_exam" class="form-control mb-3" readonly>
                            <input type="hidden" name="jumlah_soal[]">
                            <input type="text" name="jawaban[]" class="form-control mb-3" placeholder="Jawaban">
                            <button class="btn btn-warning remove-row" type="button">Delete</button>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="col-md-12">
                            <div class="row p-4">
                                <button class="btn btn-success" type="button" id="btn-add">Add Question</button>
                                <button class="btn btn-success mt-3" type="submit">Submit Question</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<script src="https://code.jquery.com/jquery-3.6.4.slim.js"
    integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>

<script>
    var i = 0;
    $('#btn-add').click(function () {
        i++;
        $('#card-body').append(
            `
			<div class="card-body" id="card-body">
					<div class="form-group question">
						<input type="text" name="soal[]" placeholder="Question.." class="form-control mb-3 mt-3">
						<input type="text" name="jawaban_a[]" class="form-control mb-3" placeholder="Opsi A">
						<input type="text" name="jawaban_b[]" class="form-control mb-3" placeholder="Opsi B">
						<input type="text" name="jawaban_c[]" class="form-control mb-3" placeholder="Opsi C">
						<input type="text" name="jawaban_d[]" class="form-control mb-3" placeholder="Opsi D">
						<input type="text" value="{{$exam->id}}" name="id_exam" class ="form-control mb-3" readonly>
						<input type="text" name="jawaban[]" class="form-control mb-3" placeholder="Jawaban">
						<button class="btn btn-warning remove-row" type="button">Delete</button>
					</div>
				</div>
			`
        );
    });

    $(document).on('click', '.remove-row', function () {
        $(this).parents('#question').remove();
    });

</script>



@endsection
