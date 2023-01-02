<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eliminer extends Model
{
    use HasFactory;
    protected $table = 'eliminer';
    protected $primaryKey = 'id_eliminer';

    protected $fillable = [
        'id_eliminer',
        'valeur',
        'id_audit',
        'id_chambre'
    ];
}
