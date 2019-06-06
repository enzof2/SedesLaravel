<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escritor extends Model
{
	protected $table= 'escritores';
    public function articulos() {
        return $this->hasMany('App\Articulo','escritor_id', 'id');
    }
}
