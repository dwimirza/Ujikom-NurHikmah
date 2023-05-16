@extends('exam.navexam')

@section('title', 'Buat Soal Ujian')

@section('content')
<section class="Soal d-flex justify-content-center align-items-center padding-app-exam" style="justify-self: center;">   
        <div class="rounded col-11 col-md-9 col-xl-10" style="margin-bottom: 200px; padding-top: 40px; padding-bottom: 20px; padding-left: 30px; padding-right: 30px; background-color: var(--bg-card);">
            <form method="post" class="" action="{{route('question.store')}}">
                @csrf
                <div class="w-100">
                  <div class="form-group" id="card-body" >
                    <label class="col-form-label" for="formGroupExampleInput2" style="font-size: 1.5em; font-weight: 600; margin-bottom: 10px;">Buat Pertanyaan 1</label>
                    <input type="text" name="soal[]" class="form-control mb-3" style="min-height: 50px;" placeholder="Write your question here...">
                    <div class="answer ">
                        <div class="d-flex justify-content-center mb-3 gap-1">
                            <p class="btn px-3 py-2 m-0 " style="font-size: 1.2em;">A</p>
                            <input type="text" name="jawaban_a[]" class="form-control" placeholder="option" style="min-height: 50px;">
                        </div>
                        <div class="d-flex justify-content-center mb-3 gap-1">
                            <p class="btn px-3 py-2 m-0 " style="font-size: 1.2em;">B</p>
                            <input type="text" name="jawaban_b[]" class="form-control" placeholder="option" style="min-height: 50px;">
                        </div>
                        <div class="d-flex justify-content-center mb-3 gap-1">
                            <p class="btn px-3 py-2 m-0 " style="font-size: 1.2em;">C</p>
                            <input type="text" name="jawaban_c[]" class="form-control" placeholder="option" style="min-height: 50px;">
                        </div>
                        <div class="d-flex justify-content-center mb-3 gap-1">
                            <p class="btn px-3 py-2 m-0 " style="font-size: 1.2em;">D</p>
                            <input type="text" name="jawaban_d[]" class="form-control" placeholder="option" style="min-height: 50px;">
                            <input type="hidden" name="materi" value="{{$exam->materi}}">
                            <input type="hidden" name="id_exam" value="{{$exam->id}}">
                        </div>
                    </div>
                    <input type="text" name="jawaban[]" class="form-control mb-3" style="min-height: 50px;" placeholder="Answer from this Question">
                </div>
                <div class="part-crud">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex distance-gap">
                            <div class="btn p-0 d-flex gap-2 align-items-center" id="btn-add">
                                <i class="btn btn-success bi bi-plus-square"></i>
                                <p class="hidden-part" style="text-align: center; margin: 0;">Tambah Soal</p>
                            </div>
                        </div>
                        <button class="btn btn-success" type="submit">Kirim Pertanyaan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>


<script src="https://code.jquery.com/jquery-3.6.4.slim.js"
    integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>

<script>
    var i = 0;
    $('#btn-add').click(function () {
        i++;
        $('#card-body').append(
            `
            <div class="form-group" id="card-body">
            <div id="card-question">
                    <label class="col-form-label" for="formGroupExampleInput2" style="font-size: 1.5em; font-weight: 600; margin-bottom: 10px;">Buat Pertanyaan 1</label>
                    <input type="text" name="soal[]" class="form-control mb-3" style="min-height: 50px;" placeholder="Write your question here...">
                    <div class="answer ">
                        <div class="d-flex justify-content-center mb-3 gap-1">
                            <p class="btn px-3 py-2 m-0 " style="font-size: 1.2em;">A</p>
                            <input type="text" name="jawaban_a[]" class="form-control" placeholder="option" style="min-height: 50px;">
                        </div>
                        <div class="d-flex justify-content-center mb-3 gap-1">
                            <p class="btn px-3 py-2 m-0 " style="font-size: 1.2em;">B</p>
                            <input type="text" name="jawaban_b[]" class="form-control" placeholder="option" style="min-height: 50px;">
                        </div>
                        <div class="d-flex justify-content-center mb-3 gap-1">
                            <p class="btn px-3 py-2 m-0 " style="font-size: 1.2em;">C</p>
                            <input type="text" name="jawaban_c[]" class="form-control" placeholder="option" style="min-height: 50px;">
                        </div>
                        <div class="d-flex justify-content-center mb-3 gap-1">
                            <p class="btn px-3 py-2 m-0 " style="font-size: 1.2em;">D</p>
                            <input type="text" name="jawaban_d[]" class="form-control" placeholder="option" style="min-height: 50px;">
                            <input type="hidden" name="materi" value="{{$exam->materi}}">
                            <input type="hidden" name="id_exam" value="{{$exam->id}}">
                        </div>
                    </div>
                    <input type="text" name="jawaban[]" class="form-control mb-3" style="min-height: 50px;" placeholder="Answer from this Question">
                </div>
                <div class="btn p-0 d-flex gap-2 align-items-center remove-row">
                                <i class="btn btn-danger bi bi-trash"></i>
                                <p class="hidden-part remove-row" style="text-align: center; margin: 0;">Hapus Soal</p>
                            </div>
                            </div>
            </div>
			`
        );
    });

    $(document).on('click', '.remove-row', function () {
        $(this).closest('#card-body').remove();
    });

</script>



@endsection
