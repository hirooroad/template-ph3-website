<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $table = 'choices';
    protected $primaryKey = 'id';

    protected $fillable = [
        'question_id',
        'text',
        'is_correct',
    ];

    public $question_id;
    public $text;
    public $is_correct;
    public $timestamps;

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}