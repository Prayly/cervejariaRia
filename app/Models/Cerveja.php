<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cerveja extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'nomeImagem','descricao','tipo','quantidade','preco'];
}
