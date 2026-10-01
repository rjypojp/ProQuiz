<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    protected $fillable = [
        'user_id',
        'correct_count',
        'total_questions',
        'mode',
        'category_id',
    ];
}
