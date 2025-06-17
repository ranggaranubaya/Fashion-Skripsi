<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kriteria extends Model
{
    use HasFactory;

    protected $table = 'kriterias';
    public $timestamps = FALSE;
    
}