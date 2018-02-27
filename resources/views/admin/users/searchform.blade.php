@extends('layouts.app')

@section('content')


<div class="container col-6" style="margin-top: 50px;">
	<h2>Cercar usuaris</h2>
	<form class="navbar-form navbar-left" role="search" method="GET" action="{{ route('users.searchredirect')}}">
	 <div class="form-group">
	  <input type="text" class="form-control" name='search' placeholder="Cercar ..." />
	 </div>
	 <button type="submit" class="btn btn-default">Buscar</button>
	</form>
</div>

@endsection