<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnswerHistory extends Model
{
    protected $fillable = [
        'user_id',
        'quiz_result_id',
        'question_id',
        'choice_id',
        'is_correct',
    ];
}
