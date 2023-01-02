<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    use HasFactory;
    protected $table = 'audits';
    protected $primaryKey = 'id_audit';

    protected $fillable = [
        'id_audit',
        'id_auditeur',
        'date_audit',
        'heure_debut',
        'heure_fin',
        'nbr_yes',
        'nbr_no',
        'id_engin',
        'audited_chs'
    ];
}
