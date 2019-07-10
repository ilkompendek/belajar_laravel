<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'npm',
        'nama_mahasiswa',
        'tanggal_lahir',
        'jenis_kelamin',
        'id_prodi'
    ];

    public function getNamaMahasiswaAttribute($nama_mahasiswa){
        return ucwords($nama_mahasiswa);
    }

    protected $dates = ['tanggal_lahir'];

    public function prodi(){
        return $this->belongsTo('App\Prodi', 'id_prodi');
    }
}
