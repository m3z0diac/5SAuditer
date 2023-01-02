<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engin;
use App\Models\Chambre;

class EnginController extends Controller
{
    public function index()
    {
        $engins = Engin::all();
        $chambres = Chambre::all();
        return view('engin.index', compact('engins','chambres'));
    }

    public function store(Request $request)
    {
        $engin = new Engin;
        $engin->nomengin = $request->nomengin;
        $engin->save();
        return redirect('engins')->with('message', 'Engin Flottant est Ajouter avec Succès');
    }

    public function update(Request $request, $id_engin)
    {
        $engin = Engin::find($id_engin);
        $engin->nomengin = $request->nomengin;
        $engin->update();
        return redirect('engins')->with('message', 'Engin Flottant est Modifier avec Succès');
    }

    public function destroy($id_engin)
    {
        $engin = Engin::find($id_engin);
        $engin->delete();
        return redirect('engins')->with('message', 'Engin Flottant est Supprimer avec Succès');
    }
}
