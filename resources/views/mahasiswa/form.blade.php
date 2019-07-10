{{--
    @if (isset($mhs))
    {!! Form::hidden('id', $mhs->id) !!}
    @endif 
    --}}
    
    <div class="form-group">
        {!! Form::label('npm', 'NPM:') !!}
        {!! Form::text('npm', null, ['class'=>'form-control']) !!}
        @if ($errors->has('npm'))
        <span class="form-text text-muted">{{ $errors->first('npm')}}</span>
        @endif
    </div>
    
    <div class="form-group">
        {!! Form::label('nama_mahasiswa', 'Nama:') !!}
        {!! Form::text('nama_mahasiswa', null, ['class'=>'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
        {!! Form::date('tanggal_lahir', !empty($mhs) ? $mhs->tanggal_lahir->format('Y-m-d'):null, ['class'=>'form-control', 'id'=>'tanggal_lahir']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('jenis_kelamin', 'Jenis Kelamin:') !!}
        <div><label for="jenis_kelamin">{!! Form::radio('jenis_kelamin', 'L') !!} Laki-laki</label></div>
        <div><label for="jenis_kelamin">{!! Form::radio('jenis_kelamin', 'p') !!} Perempuan</label></div>
    </div>
    
    <div class="form-group">
        {!! Form::label('id_prodi','Program Studi: ') !!}
        @if (count($list_prodi)>0)
        {!! Form::select('id_prodi', $list_prodi, null, ['class'=>'form-control','id'=>'id_prodi','placeholder'=>'Pilih Program Studi']) !!}
        
        @else
        <p><strong>Sorry. There isn't departement available yet.</strong> </p>
        @endif
    </div>
    
    <div class="form-group">
        {!! Form::submit($text, ['class'=>'from-control btn btn-info']) !!}
    </div>