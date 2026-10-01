<?php

namespace App\Models;

use App\Models\Choice;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'category_id',
        'question_text',
        'explanation',
    ];

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
