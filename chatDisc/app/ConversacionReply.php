<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConversacionReply extends Model
{

    protected $fillable= ['reply','user_id_fk','ip','time','conversacion_id_fk','latitude','logitude'];

    protected $guarded = [];
}
