<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $table = 'professor';

    protected $fillable = [
        'id_pessoa',
        'curriculo_lattes'
    ];

    public function pessoa(){
        return $this->hasOne(Pessoa::class, 'id', 'id_pessoa');
    }
}
