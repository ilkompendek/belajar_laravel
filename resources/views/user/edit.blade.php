@extends('template')

@section('main')
<div>
    <h2>Edit User</h2>
    
    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['userController@update',$user->id]]) !!}
    <input type="hidden" name="_method" value="PATCH">
    @include('user.form', ['text'=>'Edit'])
    {!! Form::close() !!}
</div>
@endsection

@section('footer')
    @include('footer')
@endsection