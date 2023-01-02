<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    use HasFactory;
    protected $table = 'planning';
    protected $primaryKey = 'id_plan';

    protected $fillable = [
        'id_plan',
        'id_auditeur',
        'year_plan',
        'month_plan',
        'total_plan'
    ];
}
