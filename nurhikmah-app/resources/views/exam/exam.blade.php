@extends('layouts.app')

@section('content')


<h1> Examination on {{$exam->materi}} </h1>


<legend>Choose the correct answer</legend>
<form method="post" action="{{route('jawaban.store')}}" class="ansform">
    @foreach($question as $questions)
<div class="col-md-6 col-lg-8 col-sm-6 col-lg-offset-2">
        {{ csrf_field() }}

        <h3>{{$questions->soal}} ?</h3>
        <div class="col-lg-offset-1">

        <fieldset>
                    <input type="text" readonly name="question" value="{{$questions->soal}}">
                    <input name="answer_{{ $questions->id }}" value="{{ $questions->jawaban_a }}" type="radio">
                    {{ $questions->jawaban_a }} <br>
                    <input name="answer_{{ $questions->id }}" value="{{ $questions->jawaban_b }}" type="radio">
                    {{ $questions->jawaban_b }}<br>
                    <input name="answer_{{ $questions->id }}" value="{{ $questions->jawaban_c }}" type="radio">
                    {{ $questions->jawaban_c }}<br>
                    <input name="answer_{{ $questions->id }}" value="{{ $questions->jawaban_d }}" type="radio">
                    {{ $questions->jawaban_d }}<br>
                    <input type="hidden"  name="correct_answer_{{$questions->id}}" value="{{$questions->jawaban}}">
                    @auth
                    <input type="text" readonly name="student_id" value= "{{ Auth::user()->id }}">
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



@endsection