<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    //
      protected $fillable = [
        'namatipe'];


    public function Iklan(){

	return $this->belongsTo('App\Iklan');


}
}
