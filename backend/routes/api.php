<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerHistoryController;
use App\Http\Controllers\QuizResultController;

Route::get('/questions/{category}', [QuestionController::class, 'index']);
Route::get('/comprehensive_test', [QuestionController::class, 'getComprehensiveTest']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/answer-histories', [AnswerHistoryController::class, 'store']);
Route::post('/quiz-results', [QuizResultController::class, 'store'])->middleware('auth:sanctum');
Route::get('/quiz-results', [QuizResultController::class, 'get']);
Route::put('/quiz-results/{id}', [QuizResultController::class, 'update']);
Route::get('/quiz-results/my', [QuizResultController::class, 'myResults'])->middleware('auth:sanctum');