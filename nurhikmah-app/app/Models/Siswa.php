<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $table = 'siswa';
    protected $guarded = [];
}
