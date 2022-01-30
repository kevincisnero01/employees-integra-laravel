@extends('layouts.app')
@section('title','Empleados')
@section('content')
<div class="row">
	<div class="col-md-12">
		

    <h1 class="display-4">Listado de Empleados</h1>    
    
    <div class="row">
        <div class="col-md-6">
            <form action="" method="GET">
                <div class="input-group "> 
                    <input type="text" 
                    class="form-control" 
                    id="search" 
                    name="search" 
                    value="{{ old('', $search) }}" 
                    placeholder="Ingrese el apellido o correo para buscar..." >
                    <button type="submit" class="btn btn-outline-secondary">Buscar</button>
                </div>
            </form>
        </div>    
        <div class="col-md-6">
            <a href="{{ route('employee.create') }}" class="btn btn-primary float-end">
            Registrar Empleado
            </a>
        </div>
    </div>

    <table class='table table-responsive' id="tableEmployees">
        <thead>
            <tr>
            <th>ID</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Fecha de Ingreso</th>
            <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        	@forelse($employees as $employee)

            <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->last_name }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->contrated }}</td>
            <td> 
                <a href="{{ route('employee.edit', $employee) }}" class='btn btn-info'>Editar</a>

                <form class="d-inline-block" id="form-employeeDelete" method="POST" action="{{ route('employee.destroy',$employee->id) }}">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class='btn btn-danger'>Eliminar</button>
                </form>

            </td>  
            </tr>

            @empty
			<li class="list-group-item border-0 mb-3 shadow-sm"> No hay elementos</li>
			@endforelse
        </tbody>
    </table>

    {{ $employees->links() }}
		
	
	</div>
</div>
@endsection