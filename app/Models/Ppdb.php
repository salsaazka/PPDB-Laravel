<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;
    protected $fillable =[
        // 'user_id',
        'name',
        'nisn',
        'jk',
        'school',
        'sch',
        'email',
        'no_telp',
        'no_telpA',
        'no_telpB',
        'referensi',
        'role'
    ];
            
}
