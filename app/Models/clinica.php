<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $fillable = ['nome', 'endereco', 'telefone', 'email'];
}
