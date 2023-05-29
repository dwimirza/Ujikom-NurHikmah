<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Jawaban;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Exam;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Submission;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $questions = Question::where('id_exam', $request->get('id_exam'))->get();
        $score = 0;
        foreach ($questions as $question) {
            $jawaban = new Jawaban();
            $jawaban->student_id = $request->input('student_id');
            $jawaban->question = $question->soal;
            $jawaban->answer = $request->input('answer_' . $question->id);
            $jawaban->correct_answer = $question->jawaban;
            if ($jawaban->answer == $jawaban->correct_answer) {
                $score++;
            }
            $jawaban->score = $score;
            $jawaban->materi = $request->input('materi');
            $jawaban->save();
        }

        $user = Auth::user();
        $examId = $request->input('exam_id');
        $submission = Submission::where('user_id', $user->id)
            ->where('exam_id', $examId)
            ->first();

        if (!$submission) {
            $submission = new Submission();
            $submission->user_id = $user->id;
            $submission->exam_id = $examId;
            $submission->submitted = true;
            $submission->save();

            $materi = $request->input("materi");
            $hasil = Hasil::where("student_name", $user->name)->where("materi", $materi)->first();
            $hasil = new Hasil();
            $hasil->materi = $materi;
            $hasil->student_name = $user->name;
            $hasil->score = $score;
            $hasil->save();

            return redirect('exam')->with('success', 'Exam submitted successfully');
        } else {
            return redirect('exam')->with('error', 'You have already submitted the exam');
        }
        return redirect('exam');
        // dd($question);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Jawaban $jawaban
     * @return \Illuminate\Http\Response
     */
    public function show(Jawaban $jawaban)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Jawaban $jawaban
     * @return \Illuminate\Http\Response
     */
    public function edit(Jawaban $jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Jawaban $jawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jawaban $jawaban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Jawaban $jawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jawaban $jawaban)
    {
        //
    }
}
