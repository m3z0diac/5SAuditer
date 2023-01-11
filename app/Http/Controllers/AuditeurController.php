<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditeur;
use App\Models\User;

class AuditeurController extends Controller
{
    public function index()
    {
        $auditeurs = Auditeur::all();
        // Retrieve users and their created_at dates from the database
        $users = Auditeur::all();
        // Initialize an array to store the data for the chart
        $data = ['dates' => [], 'count' => []];

        // Loop through the users and add the created_at dates and count to the data array
        foreach ($users as $user) {
            $data['dates'][] = $user->created_at->format('Y-m-d');
            $data['count'][] = Auditeur::whereDate('created_at', $user->created_at->format('Y-m-d'))->count();
        }

        return view('auditeur.index', compact('auditeurs','data'));
    }
    public function store(Request $request)
    {
        $auditeur = new Auditeur;
        $auditeur->prenom = $request->prenom;
        $auditeur->nom = $request->nom;
        $auditeur->source = $request->source;
        $auditeur->save();
        return redirect()->back();

    }

    public function destroy($id_auditeur) {
        $auditeur = Auditeur::find($id_auditeur);
        $auditeur->delete();
        return redirect('auditeurs')->with('message', 'L\'auditeur est Supprimer avec Succès');
    }

}
