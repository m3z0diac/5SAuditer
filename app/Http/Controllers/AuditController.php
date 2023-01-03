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
        /*
            Return all the audits and objects (Ships) that you have already audit them
        */
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

        $auditeur   = Auditeur::find($audit->id_auditeur);
        $fullname   = $auditeur->prenom . ' ' . $auditeur->nom;
        $started_at = $audit->heure_debut;
        $ended_at   = $audit->heure_fin;
        $total_yes  = $audit->nbr_yes;
        $total_no   = $audit->nbr_no;
        $status = '';
        $flag = '';
        if (intval($total_yes) - intval($total_no) > 0 && intval($total_yes) - intval($total_no) < 10)
        {
            $status = 'Pas Mal';
            $flag = 'green';
        }
        else if (intval($total_yes) - intval($total_no) >= 10 && intval($total_yes) - intval($total_no) < 20)
        {
            $status = 'Bien';
            $flag = 'green';
        }
        else if (intval($total_yes) - intval($total_no) >= 20 && intval($total_yes) - intval($total_no) < 30)
        {
            $status = 'Très Bien';
            $flag = 'green';
        }
        else if (intval($total_yes) - intval($total_no) >= 30)
        {
            $status = 'Excellent';
            $flag = 'green';
        }
        else if (intval($total_yes) - intval($total_no) == 0)
        {
            $status = 'Moyenne';
            $flag = 'orange';
        }
        else if (intval($total_yes) - intval($total_no) < 0)
        {
            $status = 'Mal Malheureusement';
            $flag = 'red';
        }
        $audit->save();

        {/*
        Exemple:
        Hamza Elansari, l'audit a commencé à 19:06:44 et a terminé à 19:11:08.
        Ainsi, le nombre de réponses oui est de 32 et le nombre de réponses non est 1,
        le résultat de l'audit est excellent. Merci pour votre temps, bon travail.
        */}
        $message = "Salut " . $fullname . ", L'audit a commencé à " . $started_at . " et a Terminé à " .
                    $ended_at . ". Ainsi, le nombre de Réponses Oui est " . $total_yes . " et le nombre de Réponses Non est " . $total_no .
                    ". Totalement le Résultat de L'audit est " . $status . ". Merci pour votre Temps, Bon Travail.-" . $flag;
        ;
        return redirect('audits')->with('message', $message);
    }

}
