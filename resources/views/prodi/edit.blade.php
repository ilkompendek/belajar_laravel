@extends('template')

@section('main')
<div>
    <h2>Edit Program Studi</h2>
    
    {!! Form::model($prodi, ['method'=>'PATCH', 'action'=>['prodiController@update',$prodi->id]]) !!}
    <input type="hidden" name="_method" value="PATCH">
    @include('prodi.form', ['text'=>'Edit'])
    {!! Form::close() !!}
</div>
@endsection

@section('footer')
    @include('footer')
@endsection