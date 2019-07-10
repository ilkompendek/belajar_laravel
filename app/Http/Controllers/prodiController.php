<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prodi;


class prodiController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $prodi_list = Prodi::all();
        return view('prodi/index', compact('prodi_list'));
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('prodi.create');
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        prodi::create($request->all());
        return redirect('prodi');
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
        $prodi = Prodi::findOrFail($id);
        return view('prodi.edit', compact('prodi'));
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
        $prodi = Prodi::findOrFail($id);
        $prodi->update($request->all());
        return redirect('prodi')        ;
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $prodi = Prodi::findOrFail($id);
        $prodi->delete();
        return redirect('prodi');
    }
}
