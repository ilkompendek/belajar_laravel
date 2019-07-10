@extends('template')

@section('main')

<div>
    <h2>Daftar Mahasiswa</h2>
    @if (!empty($mahasiswa_list))
    <table class="table table-hover">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Program Studi</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mahasiswa_list as $mahasiswa)
            <tr>
                
                <td>{{ $mahasiswa->npm}}</td>
                <td>{{ $mahasiswa->nama_mahasiswa}}</td>
                <td>{{ $mahasiswa->prodi->nama_prodi}}</td>
                <td>{{ $mahasiswa->tanggal_lahir->format('d-m-Y')}}</td>
                <td>{{ $mahasiswa->jenis_kelamin}}</td>
                
                <td >
                    <div class="btn-toolbar"> 
                        <div class="btn-group">
                            {{ link_to('mahasiswa/'.$mahasiswa->id,'Detail', ['class'=>'btn btn-info btn-sm mr-2'])}}
                        </div>
                        @if (Auth::check())
                        <div class="btn-group">
                            {{ link_to('mahasiswa/'.$mahasiswa->id.'/edit','Edit', ['class'=>'btn btn-warning btn-sm mr-2'])}}
                        </div>
                        <div class="btn-group">
                            {!! Form::open(['method'=>'DELETE','action'=>['mahasiswaController@destroy', $mahasiswa->id]]) !!}
                            {!! Form::submit('Hapus', ['class'=>'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </div>
                        @endif
                    </div>
                    
                </td>
                
            </tr>
            @endforeach
            
        </tbody>
    </table>
    @else
    <p>Tidak ada mahasiswa terdaftar.</p>
    @endif
    
    <div class="table-nav">
        <div class="float-left">
            <strong>Jumlah Mahasiswa: {{$jumlah_mhs}}</strong>
        </div>
        <div class="float-right">
            <p>pagination</p>
        </div>
        <!--<div class="paging">
            {{-- $mahasiswa_list->links()--}}
        </div>-->
        
    </div>
    <br>
    @if (Auth::check())
    <div class="bottom-nav">
        <div>
            <a href="mahasiswa/create" class="btn btn-info"> Tambah Mahasiswa</a>
        </div>
    </div>
    @endif
</div>
@endsection

