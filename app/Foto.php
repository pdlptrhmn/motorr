<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    //
        protected $fillable = [
        'depan', 'belakang', 'kiri', 'kanan', 'lainnya'];


    public function IkLan(){

	return $this->belongsTo('App\IkLan');
}
}
