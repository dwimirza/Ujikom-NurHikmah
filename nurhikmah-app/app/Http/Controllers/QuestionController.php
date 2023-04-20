<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Exam;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::all();
        return view('question.create', compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question = Question::all();
        return view('question.create', compact('question'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $data = $request->input();

       foreach ($data['soal'] as $key => $value) {
              $question = Question::create([
                'id_exam' => $request->input('id_exam'),
                'soal' => $data['soal'][$key],
                'jawaban_a' => $data['jawaban_a'][$key],
                'jawaban_b' => $data['jawaban_b'][$key],
                'jawaban_c' => $data['jawaban_c'][$key],
                'jawaban_d' => $data['jawaban_d'][$key],
                'jawaban' => $data['jawaban'][$key],
              ]);
              }
            
            // $question = Question::create(}

            $id = $request->input('id_exam');

    
            // $selectLength=Exam::where('id','=',$id)->value('jumlah_pertanyaan');
            //return $selectLenth;
    
        //   foreach ($question as $qs => $value) {
        //     $qs = Question::create([
        //         'id_exam' => $request->input('id_exam'),
        //         'soal' => $value['soal'],
        //         'jawaban_a' => $value['jawaban_a'],
        //         'jawaban_b' => $value['jawaban_b'],
        //         'jawaban_c' => $value['jawaban_c'],
        //         'jawaban_d' => $value['jawaban_d'],
        //         'jawaban' => $value['jawaban'],
        //     ]);
        //   }

          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
