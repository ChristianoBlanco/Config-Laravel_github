<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function endereco()
    {
        //HasOne -> cria relacionamento um-para-um
        return $this->hasOne('App\Endereco', 'cliente_id', 'id');
    }
}
