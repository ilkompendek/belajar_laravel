@extends('template')

@section('main')
<div>
    <h2>Tambah Data Mahasiswa</h2>
    {{--@include('form_error_lists')--}}
    {!! Form::open(['url'=>'mahasiswa']) !!}
    @include('mahasiswa.form', ['text'=>'Simpan'])
    {!! Form::close() !!}
</div>
@endsection

@section('footer')
    @include('footer')
@endsection
