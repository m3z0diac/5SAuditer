<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Netoyer extends Model
{
    use HasFactory;
    protected $table = 'netoyer';
    protected $primaryKey = 'id_netoyer';

    protected $fillable = [
        'id_netoyer',
        'valeur',
        'id_audit',
        'id_chambre'
    ];
}
