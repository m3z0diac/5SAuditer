<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditeur extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'auditeurs';
    protected $primaryKey = 'id_auditeur';

    protected $fillable = [
        'id_auditeur',
        'prenom',
        'nom',
        'source'
    ];
}
