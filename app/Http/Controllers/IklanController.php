<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Iklan;
use App\Merekk;
use App\Tipe;   
use Session;
use App\Role;

class IklanController extends Controller
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
            $iklan = Dataiklan::with('wilayah','merekmobil','user');
            return Datatables::of($iklan)
              ->addColumn('action',function($iklan){
                return view('datatable._action', [
                    'model'     => $iklan,
                    'form_url'  => route('Iklan.destroy',$iklan->id),
                    'edit_url'  => route('Iklan.edit',$iklan->id),
                    'confirm_message' => 'Yakin Ingin Menghapus ' . $iklan->name . ' ?' ]);
            })->make(true);

              }


        $html = $htmlBuilder
        ->addColumn(['data'=>'id','name'=>'id', 'title'=>'No'])
        ->addColumn(['data'=>'judul','name'=>'judul', 'title'=>'Judul'])
        ->addColumn(['data'=>'deskripsi','name'=>'deskripsi', 'title'=>'Deskripsi'])
        ->addColumn(['data'=>'kondisi','name'=>'kondisi', 'title'=>'Kondisi'])
        ->addColumn(['data'=>'harga','name'=>'harga', 'title'=>'Harga'])
        ->addColumn(['data'=>'tahun','name'=>'tahun', 'title'=>'Tahun'])
        ->addColumn(['data'=>'merekmobil.nama_merek','name'=>'merekmobil.nama_merek', 'title'=>'Merek Mobil'])
        ->addColumn(['data'=>'wilayah.name_wilayah','name'=>'wilayah.nama_wilayah', 'title'=>'Wilayah'])
        ->addColumn(['data'=>'user.name','name'=>'user.name', 'title'=>'Akun'])

        ->addColumn(['data'=>'action','name'=>'action','title'=>'Action','orderable'=>false,'searchable'=>false]);
        return view('iklan.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('iklan.create');
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
        $this->validate($request, [
            'judul'=>'required',
            'deskripsi'=>'required',
            'kondisi'=>'required',
            'harga'=>'required',
            'tahun'=>'required',
            'merekmobil.nama_merek'=>'required',
            'wilayah.nama_wilayah'=>'required',
            'user.name'=>'required',
            ]);

        $user = new Dataiklan;
        $user->judul = $request['judul'];
        $user->deskripsi = $request['deskripsi'];
        $user->kondisi = $request['kondisi'];
        $user->harga = $request['harga'];
        $user->tahun = $request['tahun'];


        $adminrole = Role::where('name', 'admin')->first();
        $user->save();
        return validate('/admin/Iklan');

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
        $hapusiklan = Dataiklan::destroy($id);
        return redirect()->route('Iklan.index');
    } 
}
