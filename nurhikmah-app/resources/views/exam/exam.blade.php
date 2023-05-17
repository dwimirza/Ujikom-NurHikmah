@extends('layouts.app')

@section('content')


<h1> Examination on {{$exam->materi}} </h1>



<div>
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
                        <input type="hidden" readonly name="correct_answer_{{$questions->id}}"
                            value="{{$questions->jawaban}}">
                        <input type="hidden" readonly name="materi" value="{{$exam->materi}}">
                        @auth
                        <input type="hidden" readonly name="student_id" value="{{ Auth::user()->id }}">
                        @endauth
                    </fieldset>



            <!-- <input type="hidden" name="question" value="{{$questions->question}}">
            <input type="hidden" name="true_answer" value="{{$questions->answer}}">
            <input name="answer" value="{{$questions->choice}}" type="radio"> {{$questions->jawaban_a}} <br>
            <input name="answer" value="{{$questions->choice}}" type="radio">{{$questions->jawaban_b}}<br>
            <input name="answer" value="{{$questions->choice}}" type="radio">{{$questions->jawaban_c}}<br>
            <input name="answer" value="{{$questions->jawaban_a}}" type="radio">{{$questions->jawaban_d}}<br> -->

                </div>
            </div>
            @endforeach
            <input type="submit" name="submit" value="submit" class="btn btn-primary" id="submitbtn">
        </form>

        <script type="text/javascript">
    var timeoutHandle;
     // Function to store the selected answers in local storage
    function storeSelectedAnswers() {
        const selectedAnswers = {};
        const radios = document.querySelectorAll('input[type="radio"]');
        radios.forEach(radio => {
            if (radio.checked) {
                const questionId = radio.name.split('_')[1];
                const answer = radio.value;
                selectedAnswers[questionId] = answer;
            }
        });
        localStorage.setItem('selectedAnswers', JSON.stringify(selectedAnswers));
    }

    // Function to retrieve saved answers from local storage and pre-select radio buttons
    function retrieveSelectedAnswers() {
        const selectedAnswers = JSON.parse(localStorage.getItem('selectedAnswers'));
        if (selectedAnswers) {
            Object.entries(selectedAnswers).forEach(([questionId, answer]) => {
                const radio = document.querySelector(`input[name="answer_${questionId}"][value="${answer}"]`);
                if (radio) {
                    radio.checked = true;
                }
            });
        }
    }

    // Call the storeSelectedAnswers() function when a radio button is clicked
    const radios = document.querySelectorAll('input[type="radio"]');
    radios.forEach(radio => {
        radio.addEventListener('click', () => {
            storeSelectedAnswers();
        });
    });

    // Call the retrieveSelectedAnswers() function on page load
    window.addEventListener('DOMContentLoaded', () => {
        retrieveSelectedAnswers();
        // Call storeSelectedAnswers() to ensure the current selection is saved on page load
        storeSelectedAnswers();
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

    countdown(<?php echo $exam->waktu; ?>);


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
