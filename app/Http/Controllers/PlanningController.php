<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planning;
use App\Models\Auditeur;

class PlanningController extends Controller
{
    public function index()
    {
        $planning = Planning::all();
        $auditeurs = Auditeur::all();
        $months = array('Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Decembre');
        return view('planning.index', compact('planning','auditeurs','months'));
    }

    public function store(Request $request)
    {
        $plan = new Planning;
        $plan->year_plan = $request->year_plan;
        $plan->month_plan = $request->month_plan;
        $plan->total_plan = $request->total_plan;
        $plan->id_auditeur = $request->id_auditeur;
        $plan->save();
        return redirect('planning')->with('message', 'Plane d\'audit est Ajouter');
    }

    public function update(Request $request, $id_plan)
    {
        $plan = Planning::find($id_plan);
        $plan->year_plan = $request->year_plan;
        $plan->month_plan = $request->month_plan;
        $plan->total_plan = $request->total_plan;
        $plan->id_auditeur = $request->id_auditeur;
        $plan->update();
        return redirect('planning')->with('message', 'Plane d\'audit est Modifier avec Succès');
    }

    public function destroy($id_plan)
    {
        $plan = Planning::find($id_plan);
        $plan->delete();
        return redirect('planning')->with('message', 'Plane d\'audit est est Supprimer avec Succès');
    }
}
