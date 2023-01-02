<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Standariser extends Model
{
    use HasFactory;
    protected $table = 'standariser';
    protected $primaryKey = 'id_standariser';

    protected $fillable = [
        'id_standariser',
        'valeur',
        'id_audit',
        'id_chambre'
    ];
}
