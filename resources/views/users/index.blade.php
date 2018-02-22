@extends('layouts.app')

@section('content')


<div class="col-3">&nbsp;</div>
<div class="col-3">&nbsp;</div>
<div class="container">
	<div class="table-responsive">
		<div>&nbsp;</div>
		<table class="table table-hover">
		  <thead class="bg-success">
		    <tr>
		      <th class="col-1">#</th>
		      <th class="col-2">Nom</th>
		      <th class="col-3">Correu electrònic</th>
		      <th class="col-2">Rol</th>
		      <th class="col-4">Permisos disponibles</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach ($users as $user)

		    <div class="row">
	            <tr class="table-warning">
	                <td class="col-1">{{ $user->id }}</td>
	                <td class="col-2">{{ $user->name }}</td>
	                <td class="col-3">{{ $user->email }}</td>
	                <td class="col-2">{{ $roles->name}}</td>
	                <td class="col-4">{{ $user->permissions}}</td>
	            </tr>
	        </div>
	        @endforeach
		  </tbody>
		</table>
	</div>
</div>






@endsection