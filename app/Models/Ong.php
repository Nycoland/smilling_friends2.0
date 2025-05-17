<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    protected $fillable = ['nome', 'contato', 'endereco', 'descricao'];
}
