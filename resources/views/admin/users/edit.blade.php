@extends('layouts.app')

@section('content')


<div class="container col-6" style="margin-top: 100px;"> 
	{{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}

	    <div class="form-group">
	        {{ Form::label('name', 'Nom') }}
	        {{ Form::text('name', null, array('class' => 'form-control')) }}
	    </div>

	    <div class="form-group">
	        {{ Form::label('email', 'E-mail') }}
	        {{ Form::email('email', null, array('class' => 'form-control')) }}
	    </div>

	    <div class="form-group">
	        {{ Form::label('role_name', 'Rol') }}
	        {{ Form::select('role_name', array('0' => 'Selecciona un rol', 'Admin' => 'Admin', 'treballador' => 'Treballador', 'Client' => 'Client'), null, array('class' => 'form-control')) }}
	    </div>

	    {{ Form::submit('Modifica l\'usuari!', array('class' => 'btn btn-primary')) }}

	{{ Form::close() }}
</div>

@endsection