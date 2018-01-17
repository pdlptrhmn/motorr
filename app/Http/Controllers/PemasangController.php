<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Pemasang;
use Session;
use App\Role;

class PemasangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request, Builder $htmlBuilder)
    {
        //

         if($request->ajax()){
            $pemasangg = Pemasang::all();
            return Datatables::of($pemasangg)
              ->addColumn('action',function($pemasanggg){
                return view('datatable._action', [
                    'model'     => $pemasanggg,
                    'form_url'  => route('Pemasang.destroy',$pemasanggg->id),
                    'edit_url'  => route('Pemasang.edit',$pemasanggg->id),
                    'confirm_message' => 'Yakin Ingin Menghapus ' . $pemasanggg->name . ' ?' ]);
            })->make(true);

              }


        $html = $htmlBuilder
        ->addColumn(['data'=>'id','name'=>'id', 'title'=>'No'])
        ->addColumn(['data'=>'nama','name'=>'nama', 'title'=>'Nama Lengkap'])
        ->addColumn(['data'=>'email','name'=>'email', 'title'=>'Email'])
        ->addColumn(['data'=>'telepon','name'=>'telepon', 'title'=>'No Telepon'])
        ->addColumn(['data'=>'lokasi','name'=>'lokasi', 'title'=>'Provinsi'])
        ->addColumn(['data'=>'kota','name'=>'kota', 'title'=>'Kota'])
        ->addColumn(['data'=>'alamat','name'=>'alamat', 'title'=>'Alamat Lengkap'])
      

        

        ->addColumn(['data'=>'action','name'=>'action','title'=>'Action','orderable'=>false,'searchable'=>false]);
        return view('merek.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
