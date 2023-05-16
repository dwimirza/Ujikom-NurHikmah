<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'soal';
    protected $guarded = [];

    public function exam()
    {
        return $this->belongsTo('App\Models\Exam', 'id_exam');
    }
}
