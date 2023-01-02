<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    protected $table = 'chambres';
    protected $primaryKey = 'id_chambre';

    protected $fillable = [
        'id_chambre',
        'nomchambre',
        'id_engin'
    ];
}
