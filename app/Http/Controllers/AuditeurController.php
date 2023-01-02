<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditeur;

class AuditeurController extends Controller
{
    public function store(Request $request)
    {
        $auditeur = new Auditeur;
        $auditeur->prenom = $request->prenom;
        $auditeur->nom = $request->nom;
        $auditeur->source = $request->source;
        $auditeur->save();
        return redirect()->back();

    }
}
