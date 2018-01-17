<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasang extends Model
{
    //
     protected $fillable = [
        'nama', 'email', 'telepon', 'lokasi', 'kota', 'alamat'];


    public function IkLan(){

	return $this->belongsTo('App\IkLan');
}
}
