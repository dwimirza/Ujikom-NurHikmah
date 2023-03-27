<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionCategories extends Model
{
    use HasFactory;

    protected $guarded = [""];
    protected $table = ["kategoris"];

    public function questionsCategories(){
        return $this->belongsTo(Users::class, "kategori_id", "id");
    }

    public function questions(){
        return $this->hasMany(Questions::class, "id", "fk_id_soal");
    }
}
