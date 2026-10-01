<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnswerHistory;

class AnswerHistoryController extends Controller
{
    public function store(Request $request)
    {
        AnswerHistory::create([
            'user_id' => $request->user_id,
            'quiz_result_id' => $request->quiz_result_id,
            'question_id' => $request->question_id,
            'choice_id' => $request->choice_id,
            'is_correct' => $request->is_correct,

        ]);

        return response()->json([
            'message' => '保存しました'
        ]);
    }
}
