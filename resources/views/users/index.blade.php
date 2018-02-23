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
		      <th class="col-1 text-center align-middle">#</th>
		      <th class="col-2 text-center align-middle">Nom</th>
		      <th class="col-3 text-center align-middle">Correu electrònic</th>
		      <th class="col-2 text-center align-middle">Rol</th>
		      <th class="col-2 text-center align-middle">Permisos</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach ($users as $user)

		    <div class="row">
	            <tr class="table-warning">
	                <td class="col-1 text-center align-middle">{{ $user->id }}</td>
	                <td class="col-2 text-center align-middle">{{ $user->name }}</td>
	                <td class="col-3 text-center align-middle">{{ $user->email }}</td>
	                <td class="col-2 text-center align-middle">{{ $user->getRoleNames()->implode('name')}} <button class="btn btn-primary btn-md">Editar</button></td>
	                <td class="col-2 text-center align-middle">{{ $user->getAllPermissions()->implode('name', ', ')}}</td>
	            </tr>
	        </div>
	        @endforeach
		  </tbody>
		</table>
	</div>
</div>






@endsection