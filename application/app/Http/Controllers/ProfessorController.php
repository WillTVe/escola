<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessorRequest;
use App\Http\Resources\ProfessorResource;
use App\Models\Pessoa;
use App\Models\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function index(){
        $professores = Professor::with('pessoa')->get();
        return ProfessorResource::collection($professores);
    }

    public function store(ProfessorRequest $request){
        $pessoa = Pessoa::create($request->all());

        $professor = Professor::create([
            'id_pessoa' => $pessoa->id,
            'curricul_lattes' => $request->curricul_lattes
        ]);

        return new ProfessorResource($professor);
    }

    public function find(Request $request) {
        $professor = Professor::with(['pessoa'])->find($request->route('id'));
        return new ProfessorResource($professor);
    }


    public function update(Request $request) {
        $professor = Professor::with(['pessoa'])->find($request->route('id'));
        $professor->update([
            'curriculo_lattes' => $request->curriculo_lattes
        ]);
        $professor->pessoa->update($request->all());

        return new ProfessorResource($professor);
    }

    public function delete(Request $request) {
        Professor::destroy($request->route('id'));
        return response()->json([
            'message' => 'Professor deletado com sucesso!!!'
        ]);
    }

}