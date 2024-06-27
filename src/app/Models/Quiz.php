<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizzes';
    protected $primaryKey = 'id';

    public $name;
    public $timestamps;

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
