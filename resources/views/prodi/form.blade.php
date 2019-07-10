@if (isset($prodi))
{!! Form::hidden('id', $prodi->id) !!}
@endif

@if ($errors->any())
<div class="form-group {{ $erors->has('nama_prodi') ? 'has error' : 'has success' }}">
@else
<div class="form group"></div>
@endif
    {!! Form::label('nama_prodi', 'Nama Program Studi: ') !!}
    {!! Form::text('nama_prodi', null, ['class'=>'form-control']) !!}
    <span class="form-text text-muted">{{ $errors->first('nama_prodi')}}</span>
</div>

<div class="form group">
    {!! Form::submit($text, ['class'=>'btn btn-info']) !!}
</div>