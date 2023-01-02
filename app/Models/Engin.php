<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engin extends Model
{
    use HasFactory;
    protected $table = 'engins';
    protected $primaryKey = 'id_engin';

    protected $fillable = [
        'id_engin',
        'nomengin'
    ];
}
