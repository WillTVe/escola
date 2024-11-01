<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorRequest;
use App\Http\Resources\ProfessorResource;
use App\Models\Professor;

class ProfessorController extends Controller
{
    public function index(){
        $professores = Professor::with('pessoa')->get();
        return ProfessorResource::collection($professores);
    }

    public function store(ProfessorRequest $request){
        
    }
}
