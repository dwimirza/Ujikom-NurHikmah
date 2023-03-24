<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;

    protected $guarded = [""];

    protected $table = ["soals"];

    public function question(){
        return $this->belongsTo(QuestionCategories::class, "fk_id_soal", "id");
    }
}
