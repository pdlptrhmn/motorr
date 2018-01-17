<div class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
	{!! Form::label('name','Nama merek',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('nama_merek',null,['class'=>'form-control']) !!}
		{!! $errors->first('nama_merek', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>				 