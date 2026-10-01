<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index($category)
    {
        $questions = Question::with('choices')
            ->where('category_id', $category)
            ->get();

        return response()->json($questions, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function getComprehensiveTest()
    {
        return response()->json(
            Question::with('choices')
                ->inRandomOrder()
                ->take(10)
                ->get()
        );
    }
}
