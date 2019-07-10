@extends('template')

@section('main')
<div>
    <h2>Daftar Program Studi</h2>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th scope="col">Nama Program Studi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr><?php $i = 0?>
            
            @foreach ($prodi_list as $prodi)
            
                <td>{{ ++$i}}</td>
                <td>{{ $prodi->nama_prodi}}</td>
                <td>
                    <div class="button-toolbar">
                        <div class="btn-group">
                            {{ link_to('prodi/'.$prodi->id.'/edit','Edit', ['class'=>'btn btn-warning btn-sm mr-2'])}}
                        </div>
                        <div class="btn-group">
                            {!! Form::open(['method'=>'DELETE','action'=>['prodiController@destroy', $prodi->id]]) !!}
                            {!! Form::submit('Hapus', ['class'=>'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <div>
        <div>
            <a href="prodi/create" class="btn btn-info"> Tambah Program Studi</a>
        </div>
    </div>
</div>
@endsection
