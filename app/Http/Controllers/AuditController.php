<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Engin;
use App\Models\Audit;
use App\Models\Auditeur;
use App\Models\Chambre;
use DB;
class AuditController extends Controller
{
    public function index()
    {
        $engins = Engin::all();
        $auditeurs = Auditeur::all();
        return view('dashboard', compact('engins','auditeurs'));
    }

    public function getAudits()
    {
        $audits = Audit::all();
        $engins = Engin::all();
        return view('audit.index', compact('audits', 'engins'));
    }

    public function createAudit(Request $request)
    {
        $engin = Engin::find($request->id_engin);
        if(isset($request->id_audit))
        {
            $audit = Audit::find($request->id_audit);
        }
        else
        {
            $audit = new Audit;
            $audit->id_auditeur = $request->id_auditeur;
            $audit->date_audit = date('Y-m-d');
            $audit->heure_debut = date('H:i:s');
        }
        $audit->id_engin = $request->id_engin;
        $audited_chambres = explode(',', $audit->audited_chs, -1);
        $chambres = DB::table('chambres')->where('id_engin', $audit->id_engin)->whereNotIn('id_chambre', $audited_chambres)->get();
        $audit->save();
        return view('chambre.index', compact('engin', 'audit', 'chambres'));
    }

    public function startAudit(Request $request)
    {
        $audit = Audit::find($request->id_audit);
        $chambre = Chambre::find($request->id_chambre);
        $engin = Engin::find($chambre->id_engin);
        return view('audit.create', compact('audit', 'chambre', 'engin'));
    }

    public function storeAudit(Request $request)
    {

        $audit = Audit::find($request->id_audit);
        $chambre = Chambre::find($request->id_chambre);
        $engin = Engin::find($request->id_engin);
        $audit->audited_chs = $audit->audited_chs . $chambre->id_chambre . ',';
        if($request->yes == null || count($request->yes) == 0) {
            $yes = 0;
        }
        else {
            $yes = count($request->yes);
        }
        $audit->nbr_yes = $audit->nbr_yes + $yes;
        if($request->no == null || count($request->no) == 0) {
            $no = 0;
        }
        else {
            $no = count($request->no);
        }
        $audit->nbr_no = $audit->nbr_no + $no;
        $audit->save();
        return view('audit.results', compact('yes','no','chambre','engin','audit'));
    }
    public function stoptAudit(Request $request)
    {
        $audit = Audit::find($request->id_audit);
        $audit->heure_fin = date('H:i:s');

        $audit->save();


        return redirect('audits')->with('message', 'the Audit number ' . $audit->id_audit . ' is finished');
    }

}
