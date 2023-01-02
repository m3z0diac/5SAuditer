<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suivre extends Model
{
    use HasFactory;
    protected $table = 'suivre';
    protected $primaryKey = 'id_suivre';

    protected $fillable = [
        'id_suivre',
        'valeur',
        'id_audit',
        'id_chambre'
    ];
}
