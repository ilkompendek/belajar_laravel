@extends('template')

@section('main')
<div>
    <h2>Edit Data Mahasiswa</h2>
    
    {!! Form::model($mhs, ['method'=>'PATCH', 'action'=>['mahasiswaController@update',$mhs->id]]) !!}
    <input type="hidden" name="_method" value="PATCH">
    @include('mahasiswa.form', ['text'=>'Edit'])
    {!! Form::close() !!}
</div>
@endsection

@section('footer')
    @include('footer')
@endsection