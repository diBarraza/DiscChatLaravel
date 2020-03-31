<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversacion extends Model
{

    protected $fillable= ['usuario_uno','usuario_dos','ip','hora'];

    protected $guarded = [];
}
