<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizResult;

class QuizResultController extends Controller
{
    public function store(Request $request)
    {   
        \Log::info('QuizResult store', $request->all());
        
        $quizResult = QuizResult::create([
            'user_id' => $request->user()->id,
            'correct_count' => $request->correct_count,
            'total_questions' => $request->total_questions,
            'mode' => $request->mode,
            'category_id' => $request->category_id,
        ]);

        return response()->json([
            'id' => $quizResult->id,
        ]);
    }

    public function get()
    {
        $quizResults = QuizResult::get();

        return response()->json($quizResults);
    }

    public function update(Request $request, $id)
    {
        $quizResult = QuizResult::findOrFail($id);

        $quizResult->update([
            'correct_count' => $request->correct_count,
        ]);

        return response()->json([
            'message' => 'Quiz result updated successfully.',
        ]);
        }

        public function myResults(Request $request)
        {
            $quizResults = QuizResult::where('user_id', $request->user()->id)->get();
            
            return response()->json($quizResults);
        }
    }