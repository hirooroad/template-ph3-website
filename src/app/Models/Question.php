<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = 'questions';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image',
        'text',
        'supplement',
        'quiz_id',
    ];

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
}