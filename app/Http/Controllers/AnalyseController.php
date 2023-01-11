<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;
use App\Models\Audit;
use App\Models\Engin;

class AnalyseController extends Controller
{

    public function Analyse($id_engin)
    {
        /*
            This function for analysing the number of yes and no answers
            and converting them to a charts
        */

        $engins = Engin::all();
        $selectedEngin = Engin::find($id_engin);
        $chart_options1 = [
            'chart_title' => 'Oui',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Audit',
            'conditions' => [
                ['condition' => 'id_engin = '.$id_engin, 'color' => 'green', 'fill' => true],
            ],
            'group_by_field' => 'date_audit',
            'group_by_period' => 'day',
            'aggregate_function' => 'sum',
            'aggregate_field' => 'nbr_yes',
            'chart_type' => 'line',
        ];
        $chart_options2 = [
            'chart_title' => 'Non',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\Audit',
            'conditions' => [
                ['condition' => 'id_engin = '.$id_engin, 'color' => 'red', 'fill' => true],
            ],
            'group_by_field' => 'date_audit',
            'group_by_period' => 'day',
            'aggregate_function' => 'sum',
            'aggregate_field' => 'nbr_no',
            'chart_type' => 'line',
        ];
        $chart1 = new LaravelChart($chart_options1, $chart_options2);
        return view('analyse.index', compact('engins','chart1','selectedEngin'));
    }

    public function index()
    {
        $engin = Engin::first();
        return $this->Analyse($engin->id_engin);
    }

    public function analyser(Request $request)
    {
        /*
            Filter the Ships or the objects that you want to analyse
        */
        return $this->Analyse($request->id_engin);
    }
}
