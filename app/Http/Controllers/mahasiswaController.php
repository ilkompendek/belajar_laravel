<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Prodi;
use Validator;

class mahasiswaController extends Controller
{
    public function _construct(){
        $this->middleware('auth', ['except'=>[
            'index','show'
        ]]);
    }
    
    public function index(){
        $mahasiswa_list = Mahasiswa::orderBy('npm','asc')->simplePaginate(10);
        $jumlah_mhs = $mahasiswa_list->count();
        return view('mahasiswa.index', compact('mahasiswa_list', 'jumlah_mhs'));
    }

    public function create(){
        $list_prodi = Prodi::pluck('nama_prodi','id');
        return view('mahasiswa.create', compact('list_prodi'));
    }
    
    public function store(Request $request){
        /*$mhs = new Mahasiswa;
        $mhs->npm = $request->npm;
        $mhs->nama = $request->nama;
        $mhs->tanggal_lahir = $request->tanggal_lahir;
        $mhs->jenis_kelamin = $request->jenis_kelamin;
        $mhs->save();*/
        
        $input = $request->all();

        $validator = Validator::make($input,[
            'npm' => 'required|string|max:15|unique:mahasiswa,npm',
            'nama_mahasiswa'=> 'required|string',
            'tanggal_lahir'=> 'required|date',
            'jenis_kelamin'=> 'required|in:L,P',
            'id_prodi'=> 'required'
        ]);

        if ($validator->fails()){
            return redirect('mahasiswa/create')
            ->withInput()
            ->withErrors($validator);
        }

        Mahasiswa::create($input);
        return redirect('mahasiswa');
    }

    public function show($id){
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswa.show', compact('mahasiswa'));

    }

    public function edit($id){
        $mhs = Mahasiswa::findOrFail($id);
        $list_prodi = Prodi::pluck('nama_prodi','id');
        return view('mahasiswa.edit', compact('mhs', 'list_prodi'));
    }

    public function update($id, Request $request){
        $mhs = Mahasiswa::findOrFail($id);
        /*$mhs->npm = $request->npm;
        $mhs->nama_mahasiswa = $request->nama_mahasiswa;
        $mhs->tanggal_lahir = $request->tanggal_lahir;
        $mhs->jenis_kelamin = $request->jenis_kelamin;
        $mhs->Update();*/

        $input = $request->all();
        $validator = Validator::make($input,[
            'npm' => 'required|string|max:15|unique:mahasiswa,npm'.$request->input('id'),
            'nama_mahasiswa'=> 'required|string',
            'tanggal_lahir'=> 'required|date',
            'jenis_kelamin'=> 'required|in:L,P',
            'id_prodi'=> 'required'
        ]);

        if ($validator->fails()){
            return redirect('mahasiswa/'.$id.'/edit')
            ->withInput()
            ->withErrors($validator);
        }
        $mhs->Update($input);

        return redirect('mahasiswa');
    }

    public function destroy($id){
        $mhs = Mahasiswa::findOrFail($id);
        $mhs->delete();
        return redirect('mahasiswa');
    }

    public function datemutator(){
        $mhs = Mahasiswa::findOrFail();
        $tanggal_lahir = $mhs->tanggal_lahir ->format('d-m-Y');
        
    }


}
