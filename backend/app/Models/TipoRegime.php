<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoRegime extends Model
{
    use HasFactory;

    protected $fillable = ['descricao'];
}
