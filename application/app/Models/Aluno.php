<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'matricula',
        'id_pessoa',
        'data_nasc'
    ];

    public function pessoa(){
        return $this->hasOne(Pessoa::class);
    }
}
