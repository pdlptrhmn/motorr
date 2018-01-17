<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    //

    protected $fillable = [
       'kondisi','transmisi','bahanbakar','tahunkeluar','warna','deskripsi','harga', 'keterangan', 'merek_id', 'tipe_id', 
       	'foto_id', 'pemasang_id'];



public function foto(){

	return $this->belongsTo('App\Foto');
}

public function merekk(){

	return $this->belongsTo('App\Merekk');
}

public function tipe(){

	return $this->belongsTo('App\Tipe');
}


public function pemasang(){

	return $this->belongsTo('App\Pemasang');
}
}
