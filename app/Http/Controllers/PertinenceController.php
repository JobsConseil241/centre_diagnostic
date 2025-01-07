<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertinenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexFaq() {
        $ptnfaq = 'active';
        $title = "Gestion Statistiques FAQs";
        $perti = 'open';
        $agences = Agence::where('status', 1)->get();

        $stats = DB::table('faq_statistiques as s')
            ->join('faqs as f', 's.faq_no', '=', 'f.id')
            ->join('agences as a', 's.agence_id', '=', 'a.id')
            ->select('a.libelle as agence_name', 'f.titre as faq_name', 's.faq_no', DB::raw('SUM(s.view) as total_views'), DB::raw('SUM(s.likes) as total_likes'), DB::raw('SUM(s.dislikes) as total_dislikes'))
            ->where('s.agence_id', 1)
            ->groupBy('a.libelle','s.faq_no', 'f.titre')
            ->get();

        return view('dashboard.pertinence.indexFAQ', compact('stats', 'ptnfaq', 'title', 'perti', 'agences'));
    }

    public function getVisitsFaq(Request $request){

        $val = $request->query('key');

        $stats = DB::table('faq_statistiques as s')
            ->join('faqs as f', 's.faq_no', '=', 'f.id')
            ->join('agences as a', 's.agence_id', '=', 'a.id')
            ->select('a.libelle as agence_name', 'f.titre as faq_name', 's.faq_no', DB::raw('SUM(s.view) as total_views'), DB::raw('SUM(s.likes) as total_likes'), DB::raw('SUM(s.dislikes) as total_dislikes'))
            ->where('s.agence_id', $val)
            ->groupBy('a.libelle','s.faq_no', 'f.titre')
            ->get();

        return response()->json([
            'status' => 200,
            'response' => $stats,
        ]);
    }

    public function getVisitsFaqs(Request $request){

        $val = $request->query('key');

        $stats = DB::table('faq_statistiques as s')
            ->join('faqs as f', 's.faq_no', '=', 'f.id')
            ->join('agences as a', 's.agence_id', '=', 'a.id')
            ->select('a.libelle as agence_name', 'f.titre as faq_name', 's.faq_no', DB::raw('SUM(s.view) as total_views'), DB::raw('SUM(s.likes) as total_likes'), DB::raw('SUM(s.dislikes) as total_dislikes'))
            ->where('s.agence_id', $val)
            ->whereBetween('s.created_at', [$request->query('dateDebut'), $request->query('dateFin')])
            ->groupBy('a.libelle','s.faq_no', 'f.titre')
            ->get();

        return response()->json([
            'status' => 200,
            'response' => $stats,
        ]);
    }
    public function indexAvis() {
        $formavis = 'active';
        $title = "Gestion Statistiques Avis";
        $perti = 'open';
        $agences = Agence::where('status', 1)->get();

        $statOff = DB::table('consultations as c')
            ->join('agences as a', 'c.agences_id', '=', 'a.id')
            ->select('a.libelle as agence_name', 'c.module as module', DB::raw('SUM(c.visite) as total_views'), DB::raw('SUM(c.interesse) as total_intérêt'), DB::raw('SUM(c.pas_interesse) as total_désintérêt'))
            ->where('c.module', 'avis')
            ->groupBy('a.libelle','c.module')
            ->get();



        $statInter = DB::table('consultations as c')
            ->join('agences as a', 'c.agences_id', '=', 'a.id')
            ->join('reponse_avis as r', 'c.id_response', '=', 'c.sender_no')
            ->select('a.libelle as agence_name', 'c.module as module', 'c.interesse', 'c.id_response')
            ->where('c.module', 'avis')
            ->where('c.agences_id', 1)
            ->where('c.interesse', '!=', null)
            ->get();

        $statDinter = DB::table('consultations as c')
            ->join('agences as a', 'c.agences_id', '=', 'a.id')
            ->select('a.libelle as agence_name', 'c.module as module', 'c.pas_interesse', 'c.id_response')
            ->where('c.module', 'avis')
            ->where('c.agences_id', 1)
            ->where('c.pas_interesse', '!=', null)
            ->get();

        dd($statInter);

        return view('dashboard.pertinence.indexAvis', compact('statOff', 'formavis', 'title', 'perti', 'agences', 'statInter', 'statDinter'));
    }

    public function getVisitAvis(Request $request){

        $val = $request->query('key');

        $stats = DB::table('faq_statistiques as s')
            ->join('faqs as f', 's.faq_no', '=', 'f.id')
            ->join('agences as a', 's.agence_id', '=', 'a.id')
            ->select('a.libelle as agence_name', 'f.titre as faq_name', 's.faq_no', DB::raw('SUM(s.view) as total_views'), DB::raw('SUM(s.likes) as total_likes'), DB::raw('SUM(s.dislikes) as total_dislikes'))
            ->where('s.agence_id', $val)
            ->groupBy('a.libelle','s.faq_no', 'f.titre')
            ->get();

        return response()->json([
            'status' => 200,
            'response' => $stats,
        ]);
    }

    public function getVisitsAvis(Request $request){

        $val = $request->query('key');

        $stats = DB::table('faq_statistiques as s')
            ->join('faqs as f', 's.faq_no', '=', 'f.id')
            ->join('agences as a', 's.agence_id', '=', 'a.id')
            ->select('a.libelle as agence_name', 'f.titre as faq_name', 's.faq_no', DB::raw('SUM(s.view) as total_views'), DB::raw('SUM(s.likes) as total_likes'), DB::raw('SUM(s.dislikes) as total_dislikes'))
            ->where('s.agence_id', $val)
            ->whereBetween('s.created_at', [$request->query('dateDebut'), $request->query('dateFin')])
            ->groupBy('a.libelle','s.faq_no', 'f.titre')
            ->get();

        return response()->json([
            'status' => 200,
            'response' => $stats,
        ]);
    }

    public function indexConsultation() {
        $ptnec = 'active';
        $title = "Gestion Statistiques Consultation";
        $perti = 'open';
        $agences = Agence::where('status', 1)->get();

        $stats = DB::table('consultations as c')
            ->join('agences as a', 'c.agences_id', '=', 'a.id')
            ->select('a.libelle as agence_name', 'c.module as module', DB::raw('SUM(c.visite) as total_views'))
            ->where('c.module', 'consultation')
            ->groupBy('a.libelle','c.module')
            ->get();

        return view('dashboard.pertinence.indexConsultation', compact('stats', 'ptnec', 'title', 'perti', 'agences'));
    }

    public function getVisitsConsultations(Request $request){

        $stats = DB::table('consultations as c')
            ->join('agences as a', 'c.agences_id', '=', 'a.id')
            ->select('a.libelle as agence_name', 'c.module as module', DB::raw('SUM(c.visite) as total_views'))
            ->where('c.module', 'consultation')
            ->whereBetween('c.created_at', [$request->query('dateDebut'), $request->query('dateFin')])
            ->groupBy('a.libelle','c.module')
            ->get();

        return response()->json([
            'status' => 200,
            'response' => $stats,
        ]);
    }
}
