 
<div class="form-group{{ $errors->has('judul') ? 'has-error' : '' }}">
	{!! Form::label('name','Judul',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('judul',null,['class'=>'form-control']) !!}
		{!! $errors->first('judul', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('deskripsi') ? 'has-error' : '' }}">
	{!! Form::label('name','Deskripsi',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::textarea('deskripsi',null,['class'=>'form-control']) !!}
		{!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('kondisi') ? 'has-error' : '' }}">
	{!! Form::label('name','Kondisi',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('kondisi',null,['class'=>'form-control']) !!}
		{!! $errors->first('kondisi', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('harga') ? 'has-error' : '' }}">
	{!! Form::label('name','Harga',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('harga',null,['class'=>'form-control']) !!}
		{!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('tahun') ? 'has-error' : '' }}">
	{!! Form::label('name','Tahun',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('tahun',null,['class'=>'form-control']) !!}
		{!! $errors->first('tahun', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('merek_id') ? 'has-error' : '' }}">
	{!! Form::label('name','Merek',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('merek_id',null,['class'=>'form-control']) !!}
		{!! $errors->first('merek_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('wilayah_id') ? 'has-error' : '' }}">
	{!! Form::label('name','Wilayah',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('wilayah_id',null,['class'=>'form-control']) !!}
		{!! $errors->first('wilayah_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group{{ $errors->has('akun_id') ? 'has-error' : '' }}">
	{!! Form::label('name','Akun',['class'=>'col-md-2 control-label']) !!}
	<div class="col-md-4">
		{!! Form::text('akun_id',null,['class'=>'form-control']) !!}
		{!! $errors->first('akun_id', '<p class="help-block">:message</p>') !!}
	</div>
</div>


 



<div class="form-group">
	<div class="col-md-4 col-md-offset-2">
		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
	</div>
</div>