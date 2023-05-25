@extends('exam.navexam')

@section('title', 'Soal ' . $exam->materi)

@section('content')


<!-- <h1> Examination on {{$exam->materi}} </h1>


<div id="time" class="sidebar-nav-fixed affix">
    <h1><b>Time <span id="time" style="color: red">0.00</span></b></h1><br>
</div>

<legend>Choose the correct answer</legend>
<form method="post" action="{{route('jawaban.store', compact('question'))}}" class="ansform">
    @foreach($question as $questions)
    <div class="col-md-6 col-lg-8 col-sm-6 col-lg-offset-2">
        {{ csrf_field() }}

        <h3>{{$questions->soal}} ?</h3>
        <div class="col-lg-offset-1">

            <fieldset>
                <input type="hidden" readonly name="question" value="{{$questions->soal}}">
                <input name="answer_{{ $questions->id }}" value="{{ $questions->jawaban_a }}" type="radio">
                {{ $questions->jawaban_a }} <br>
                <input name="answer_{{ $questions->id }}" value="{{ $questions->jawaban_b }}" type="radio">
                {{ $questions->jawaban_b }}<br>
                <input name="answer_{{ $questions->id }}" value="{{ $questions->jawaban_c }}" type="radio">
                {{ $questions->jawaban_c }}<br>
                <input name="answer_{{ $questions->id }}" value="{{ $questions->jawaban_d }}" type="radio">
                {{ $questions->jawaban_d }}<br>
                <input type="hidden" readonly name="correct_answer_{{$questions->id}}" value="{{$questions->jawaban}}">
                <input type="hidden" readonly name="materi" value="{{$exam->materi}}">
                @auth
                <input type="hidden" readonly name="student_id" value="{{ Auth::user()->id }}">
                @endauth
            </fieldset>
        </div>
    </div>
    @endforeach
    <input type="submit" name="submit" value="submit" class="btn btn-primary" id="submitbtn">
</form> -->

<section class="Soal d-flex justify-content-center align-items-center padding-app-exam" style="justify-self: center;">
    <div class="rounded col-11 col-md-9 col-xl-10"
        style="margin-bottom: 200px; padding-top: 40px; padding-bottom: 20px; padding-left: 30px; padding-right: 30px; background-color: var(--bg-card);">
        <form method="post" class="" action="{{route('jawaban.store', compact('question'))}}">
            @csrf
            <input type="hidden" name="id_exam" value="{{$exam->id}}">

            <div class="d-flex justify-content-between" style="border-bottom: 1px solid;">
                <label class="fs-1 col-form-label" for="formGroupExampleInput2"
                    style="font-size: 1.5em; font-weight: 600; margin-bottom: 10px;">Examination on
                    {{$exam->materi}}</label>

                <div id="time" class="fs-1  sidebar-nav-fixed affix">
                    <h1><b>Time <span id="time" style="color: red">0.00</span></b></h1><br>
                </div>
                
            </div>

            @foreach($question as $questions)
            <div class="w-100 soal my-4">
                {{ csrf_field() }}
                <div class="form-group" id="card-body">
                    <p class="fs-4 text-capitalize">{{$questions->soal}}</p>
                    <div class="answer mb-4">

                        <div class="d-flex justify-content-start mb-3 gap-1 bg-white">
                            <label for="answer_a_{{ $questions->id }}" class="btn button-answer px-3 py-2 m-0 border ">
                                <input id="answer_a_{{ $questions->id }}"
                                    style="position: absolute; clip: rect(0,0,0,0);" name="answer_{{ $questions->id }}"
                                    value="{{ $questions->jawaban_a }}" type="radio" required>
                                <span class="text-md" style="font-size: 1.2em;">A</span>
                            </label>
                            <span class="ml-3 d-inline-flex">
                                <p class="my-auto">{{ $questions->jawaban_a }}</p>
                            </span>
                        </div>

                        <div class="d-flex justify-content-start mb-3 gap-1 bg-white">
                            <label for="answer_b_{{ $questions->id }}" class="btn button-answer px-3 py-2 m-0 border ">
                                <input id="answer_b_{{ $questions->id }}"
                                    style="position: absolute; clip: rect(0,0,0,0);" name="answer_{{ $questions->id }}"
                                    value="{{ $questions->jawaban_b }}" type="radio" required>
                                <span class="text-md" style="font-size: 1.2em;">B</span>
                            </label>
                            <span class="ml-3 d-inline-flex">
                                <p class="my-auto">{{ $questions->jawaban_b }}</p>
                            </span>
                        </div>

                        <div class="d-flex justify-content-start mb-3 gap-1 bg-white">
                            <label for="answer_c_{{ $questions->id }}" class="btn button-answer px-3 py-2 m-0 border ">
                                <input id="answer_c_{{ $questions->id }}"
                                    style="position: absolute; clip: rect(0,0,0,0);" name="answer_{{ $questions->id }}"
                                    value="{{ $questions->jawaban_c }}" type="radio" required>
                                <span class="text-md" style="font-size: 1.2em;">c</span>
                            </label>
                            <span class="ml-3 d-inline-flex">
                                <p class="my-auto">{{ $questions->jawaban_c }}</p>
                            </span>
                        </div>

                        <div class="d-flex justify-content-start mb-3 gap-1 bg-white">
                            <label for="answer_d_{{ $questions->id }}" class="btn button-answer px-3 py-2 m-0 border ">
                                <input id="answer_d_{{ $questions->id }}"
                                    style="position: absolute; clip: rect(0,0,0,0);" name="answer_{{ $questions->id }}"
                                    value="{{ $questions->jawaban_d }}" type="radio" required>
                                <span class="text-md">D</span>
                            </label>
                            <span class="ml-3 d-inline-flex">
                                <p class="my-auto" style="font-size: 1.2em;">{{ $questions->jawaban_d }}</p>
                            </span>
                        </div>

                        <input type="hidden" readonly name="correct_answer_{{$questions->id}}"
                            value="{{$questions->jawaban}}">

                        <input type="hidden" readonly name="materi" value="{{$exam->materi}}">
                        <input type="hidden" readonly name="exam_id" value="{{$exam->id}}">
                        @auth
                        <input type="hidden" readonly name="student_id" value="{{ Auth::user()->id }}">
                        @endauth
                    </div>
                </div>
            </div>
            @endforeach
            <input type="submit" name="submit" value="submit" class="btn btn-primary" id="submitbtn">
        </form>
    </div>
</section>

<script type="text/javascript">
    var timeoutHandle;
    // Function to store the selected answers in local storage

    // Call the storeSelectedAnswers() function when a radio button is clicked
    // const radios = document.querySelectorAll('input[type="radio"]');
    // radios.forEach(radio => {
    //     radio.addEventListener('click', () => {
    //         storeSelectedAnswers();
    //     });
    // });

    const soals = document.querySelectorAll('.soal')
    soals.forEach(soal => {
        const buttons = soal.querySelectorAll('.button-answer')
        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                buttons.forEach(btn => btn.classList.remove('warna-pencet'))
                btn.classList.add('warna-pencet')
            })
        })

    })

    // Call the retrieveSelectedAnswers() function on page load
    window.addEventListener('DOMContentLoaded', () => {
        // retrieveSelectedAnswers();
        // Call storeSelectedAnswers() to ensure the current selection is saved on page load
        // storeSelectedAnswers();
    });



    function countdown(minutes) {
        var seconds = 60;
        var mins = minutes

        function tick() {
            var counter = document.getElementById("time");
            var current_minutes = mins - 1
            seconds--;
            counter.innerHTML =
                current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);

            if (seconds > 0) {
                timeoutHandle = setTimeout(tick, 1000);
            } else {
                if (mins > 1) {
                    setTimeout(function () {
                        countdown(mins - 1);
                    }, 1000);
                }
            }
        }

        tick();
    }

    countdown(' <?= $exam->waktu; ?> ');


    function showWarning() {
        alert("Only 5 minutes left!");
    }

    // script for disable url
    var time = '<?php echo $exam->waktu; ?>';
    var realtime = time * 60000;

    setTimeout(function () {
        alert('Waktu sudah habis');
        window.location.href = '/';
    }, realtime);

</script>
@endsection
