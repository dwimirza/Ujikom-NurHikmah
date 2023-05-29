<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Submission;
use App\Models\Exam;

class PreventExamAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
    $route = $request->route();
    $exam = $route->parameter('exam'); // Assuming 'exam' is the route parameter name

    $examId = Exam::find($exam);

    if ($exam) {
        $user = Auth::user();

        // Check if the user has already submitted the exam
        $hasSubmittedExam = $user->submissions()
            ->where('exam_id', $examId->id)
            ->exists();

        if ($hasSubmittedExam) {
            return redirect()->route('exam.index')
                ->with('error', 'You have already submitted the exam.');
        }
    }

        return $next($request);
    }
}
