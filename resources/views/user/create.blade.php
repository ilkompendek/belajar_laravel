@extends('template')
@section('main')
    <div>
        <h2>Tambah User</h2>

        {!! Form::open(['url'=>'user']) !!}
        @include('user.form', ['text'=> 'Tambah User'])
        {!! Form::close() !!}
    </div>
@endsection
@section('footer')
@include('footer')
@endsection
