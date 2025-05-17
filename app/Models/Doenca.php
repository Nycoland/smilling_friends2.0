<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doenca extends Model
{
    protected $fillable = ['nome', 'sintomas', 'nivel_gravidade'];
}
