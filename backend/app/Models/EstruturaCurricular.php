<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstruturaCurricular extends Model
{
    use HasFactory;

    protected $table = 'estrutura_curricular';
    
    protected $fillable = ['descricao', 'id_curso'];
}
