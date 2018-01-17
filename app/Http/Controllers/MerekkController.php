<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Merekk;
use Session;
use App\Role;

class MerekkController extends Controller
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
            $merekkmobil = Merekk::all();
            return Datatables::of($merekkmobil)
              ->addColumn('action',function($merekk){
                return view('datatable._action', [
                    'model'     => $merekk,
                    'form_url'  => route('Merekk.destroy',$merekk->id),
                    'edit_url'  => route('Merekk.edit',$merekk->id),
                    'confirm_message' => 'Yakin Ingin Menghapus ' . $merekk->name . ' ?' ]);
            })->make(true);

              }


        $html = $htmlBuilder
        ->addColumn(['data'=>'id','name'=>'id', 'title'=>'No'])
        ->addColumn(['data'=>'merek','name'=>'merek', 'title'=>'Merek'])
        ->addColumn(['data'=>'model','name'=>'model', 'title'=>'Model'])

        

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
