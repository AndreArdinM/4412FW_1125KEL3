@extends('masterr')
@section('container')
<div class="panel panel-info">
	<div class="panel-heading">
		<strong><a href="{{url('manajer')}}">
			<i class="fa text-default fa-chevron-left"></i>
		</a>Perbarui Data manajer</strong>
	</div>
	{!! Form::model($manajer,['url'=>'manajer/edit/'.$manajer->id,'class'=>'form-horizontal'])!!}
		@include('manajer.form')
		<div style="width:100%;text-align:right;">
			<button class="btn btn-info"><i class="fa fa-save"></i> Perbarui</button>
			<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Ulangi</button>
		</div>
		{!!Form::close()!!}
</div>
@stop