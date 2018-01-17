@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Administrator SM</a></li>
				<li><a href="{{ url('/admin/Merek') }}">Merek Mobil</a></li>
				<li class="active">data merek< Mobil</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Ubah data</h2>
				</div>
				<div class="panel-body">
					{!! Form::model($merekk, ['url'=>route('Merek.update', $merekk->id), 'method'=>'put', 'class'=>'form-horizontal']) !!}
					@include('merek._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection