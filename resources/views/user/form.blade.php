@if (isset($user))
{!! Form::hidden('id', $user->id) !!}
@endif

<!--nama-->
@if ($errors->any())
<div class="form-group {{ $erors->has('name') ? 'has error' : 'has success' }}">
    @else
    <div class="form group">
    @endif
    {!! Form::label('name', 'Nama: ') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    <span class="form-text text-muted">{{-- $errors->first('nama_user')--}}</span>
</div>

<!--email-->
@if ($errors->any())
<div class="form-group {{ $erors->has('email') ? 'has error' : 'has success' }}">
    @else
    <div class="form group">
    @endif
    {!! Form::label('email', 'Email: ') !!}
    {!! Form::email('email', null, ['class'=>'form-control']) !!}
    <span class="form-text text-muted">{{-- $errors->first('nama_user')--}}</span>
</div>

<!--level-->
@if ($errors->any())
<div class="form-group {{ $erors->has('level') ? 'has error' : 'has success'}}">
    @else
    <div class="form group">
    @endif
    {!! Form::label('level', 'Level User: ') !!}
    <div><label for="level">{!! Form::radio('level', 'operator') !!} Operator</label></div>
    <div><label for="level">{!! Form::radio('level', 'admin') !!} Administrator</label></div>
    <span class="form-text text-muted">{{-- $errors->first('nama_user')--}}</span>
</div>

<!--password-->
@if ($errors->any())
<div class="form-group {{ $erors->has('password') ? 'has error' : 'has success' }}">
    @else
    <div class="form group">
    @endif
    {!! Form::label('password', 'Password: ') !!}
    {!! Form::password('password', ['class'=>'form-control']) !!}
    <span class="form-text text-muted">{{-- $errors->first('nama_user')--}}</span>
</div>

<!-- konfirmasi password-->
@if ($errors->any())
<div class="form-group {{ $erors->has('password') ? 'has error' : 'has success' }}">
    @else
    <div class="form group">
    @endif
    <div>{!! Form::label('conf_password', 'Konfirmasi Password: ') !!}</div>
    <div>{!! Form::password('conf_password', ['class'=>'form-control']) !!}
    <span class="form-text text-muted"><i>Enter the same password in both fields.</i></span></div>
</div>
<br>
<div class="form group">
    {!! Form::submit($text, ['class'=>'btn btn-info']) !!}
</div>