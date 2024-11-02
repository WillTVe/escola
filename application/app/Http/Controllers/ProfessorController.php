<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorRequest;
use App\Http\Resources\ProfessorResource;
use App\Models\Pessoa;
use App\Models\Professor;

class ProfessorController extends Controller
{
    public function index(){
        $professores = Professor::with('pessoa')->get();
        return ProfessorResource::collection($professores);
    }

    public function store(ProfessorRequest $request){
        $pessoa = Pessoa::create($request->all());

        $professor = Professor::create([
            'id_pessoa' => $pessoa->id
        ]);

        return new ProfessorResource($professor);
    }
}
