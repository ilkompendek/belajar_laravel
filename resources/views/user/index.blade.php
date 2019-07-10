@extends('template')

@section('main')
<div>
    <h2>Daftar User</h2>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th scope="col">Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr><?php $i = 0?>
            
            @foreach ($user_list as $user)
            
                <td>{{ ++$i}}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->email}}</td>
                <td>{{ $user->level}}</td>
                <td>
                    <div class="button-toolbar">
                        <div class="btn-group">
                            {{ link_to('user/'.$user->id.'/edit','Edit', ['class'=>'btn btn-warning btn-sm mr-2'])}}
                        </div>
                        <div class="btn-group">
                            {!! Form::open(['method'=>'DELETE','action'=>['userController@destroy', $user->id]]) !!}
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
            <a href="user/create" class="btn btn-info"> Tambah User</a>
        </div>
    </div>
</div>
@endsection
