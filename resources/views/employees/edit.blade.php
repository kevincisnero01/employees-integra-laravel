@extends('layouts.app')
@section('title','Empleados')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
      
	<div class="card  mt-3">
	    <div class="card-header"><h1 class="display-5">Editar Empleado</h1></div>
	    <div class="card-body">

	        <form action="{{ route('employee.update', $employee) }}" method='POST' id='formEmployees' >
	        	@method('put')
	        	@include('employees._form')

	        </form>
	    </div>
	    <div class="card-footer">

	        <div class="row">
	        <div class="col-md-3">
	           
                <a href="{{ route('employee.index') }}" class="btn btn-outline-secondary">Listado</a>
	            
	        </div>
	        <div class="col-md-9">
	            <div class="d-grid gap-2">
	                <button type="submit" form="formEmployees" class="btn btn-primary">Editar</button>
	            </div>
	        </div>
	        </div>

	    </div>
	</div>

    </div>

   <!--

   	

	-->
</div><!--container-->
@endsection
    