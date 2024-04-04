<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projets = Project::all();

        return response()->json([
            // success serve per vedere se la chiamata è andata a buon fine/non è obbligatorio metterlo
            'succces' => true,
            'projets' => $projets
        ]);
    }
}
