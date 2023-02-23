<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    protected $fillable = [
        'assunto',
        'dominio_relacionado',
        'tipo_contato',
        'url_dificuldade',
        'telefone_contato',
        'anexo',
        'mensagem',
    ];


    public function respostas()
    {
        return $this->hasMany(RespostaChamado::class);
    }
}
