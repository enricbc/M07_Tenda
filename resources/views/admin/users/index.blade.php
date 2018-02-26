@extends('layouts.app')

@section('content')


<div class="col-3">&nbsp;</div>
<div class="col-3">&nbsp;</div>
<div class="container">
	<a href="{{ route('users.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-user-plus"></i>    Afegir Usuari</a>
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
		      <th class="col-2 text-center align-middle">Accions</th>
		    </tr>
		  </thead>
		  <tbody>
		    @foreach ($users as $user)

		    <div class="row">
	            <tr class="table-warning">
	                <td class="col-1 text-center align-middle">{{ $user->id }}</td>
	                <td class="col-2 text-center align-middle">{{ $user->name }}</td>
	                <td class="col-3 text-center align-middle">{{ $user->email }}</td>
	                <td class="col-2 text-center align-middle">{{ $user->getRoleNames()->implode('name')}} </td>
	                <td class="col-2 text-center align-middle">{{ $user->getAllPermissions()->implode('name', ', ')}}</td>                
	                <td class="col-2 text-center align-middle">
	                	<button type="button" style="margin-left: 10px;" class="btn btn btn-info btn-sm">Editar
	                	</button>
	                	<button class="btn btn btn-danger btn-sm">Eliminar</button>
	                </td>
	            </tr>
	        </div>
	        @endforeach
		  </tbody>
		</table>
	</div>
</div>






@endsection