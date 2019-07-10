@extends('template')
@section('main')
    <div>
        <h2>Tambah Program Studi</h2>

        {!! Form::open(['url'=>'prodi']) !!}
        @include('prodi.form', ['text'=> 'Tambah'])
        {!! Form::close() !!}
    </div>
@endsection
@section('footer')
@include('footer')
@endsection
