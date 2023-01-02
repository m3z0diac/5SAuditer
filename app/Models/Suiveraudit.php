<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suiveraudit extends Model
{
    use HasFactory;
    protected $table = 'suiveraudit';
    protected $primaryKey = 'id_sa';

    protected $fillable = [
        'id_sa',
        'valeur',
        'id_audit',
        'id_chambre'
    ];
}
