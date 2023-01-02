<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chambre;

class ChambreController extends Controller
{
    public function store(Request $request)
    {
        $chambre = new Chambre;
        $chambre->nomchambre = $request->nomchambre;
        $chambre->id_engin = $request->id_engin;
        $chambre->save();
        return redirect('engins')->with('message', 'Sous Périmètre est Ajouter avec Succès');
    }

    public function update(Request $request, $id_chambre)
    {
        $chambre = Chambre::find($id_chambre);
        $chambre->nomchambre = $request->nomchambre;
        $chambre->update();
        return redirect('engins')->with('message', 'Sous Périmètre est Modifier avec Succès');
    }

    public function destroy($id_engin)
    {
        $chambre = Chambre::find($id_engin);
        $chambre->delete();
        return redirect('engins')->with('message', 'Sous Périmètre est Supprimer avec Succès');
    }
}
