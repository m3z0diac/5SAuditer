<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organiser extends Model
{
    use HasFactory;
    protected $table = 'organiser';
    protected $primaryKey = 'id_organiser';

    protected $fillable = [
        'id_organiser',
        'valeur',
        'id_audit',
        'id_chambre'
    ];
}
