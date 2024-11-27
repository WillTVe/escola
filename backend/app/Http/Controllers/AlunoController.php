<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use App\Http\Requests\AlunoRequest;
use App\Http\Resources\AlunoResource;

class AlunoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    
    public function index() {
        $aluno = Aluno::with('pessoa')->get();
        return AlunoResource::collection($aluno);
    }

    public function store(AlunoRequest $request) {
        $pessoa = Pessoa::create($request->all());
        $aluno = Aluno::create([
            'id_pessoa'    => $pessoa->id,
            'matricula' => $request->matricula
        ]);

        return new AlunoResource($aluno->load('pessoa'));
    }
}
