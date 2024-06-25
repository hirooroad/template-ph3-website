<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'quiz_questions';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image',
        'text',
        'supplement',
        'quiz_id',
    ];

    public $image;
    public $text;
    public $supplement;
    public $quiz_id;
    public $timestamps;

    public function choices()
    {
        return $this->hasMany(Choices::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quizees::class);
    }
}