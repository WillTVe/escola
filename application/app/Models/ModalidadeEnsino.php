<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModalidadeEnsino extends Model
{
    use HasFactory;

    protected $table = 'modalidade_ensino';

    protected $fillable = ['descricao'];
}
