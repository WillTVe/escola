<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf_cnpj',
        'rg_ie',
        'tipo_pessoa'
    ];

    public function aluno() {
        return $this->belongsTo(Aluno::class);
    }
}
