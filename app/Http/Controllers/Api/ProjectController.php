<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        // $projets = Project::all(); //tutti record della Project

        // 'type' relazione 'one to many'
        // 'technologies' relazione 'many to many'
        // $projets = Project::with('type', 'technologies')->get(); // per prendere tutti i record anche con le relazioni

        // aggiungiamo la paginazione
        $projets = Project::with('type', 'technologies')->paginate(3); // la funzione 'paginate' ci permette di impostare un numero di elementi da visualizzare nella pgaine
        // "first_page_url": "http://127.0.0.1:8000/api/apiProjects?page=1" chiamata della prima pagina
        // "last_page_url": "http://127.0.0.1:8000/api/apiProjects?page=4", chiamata dell'ultima pagina

        return response()->json([
            // success serve per vedere se la chiamata è andata a buon fine/non è obbligatorio metterlo
            'succces' => true,
            'projets' => $projets
        ]);
    }
}
