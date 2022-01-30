@extends('layouts.app')
@section('title','Empleados')
@section('content')
<div class="row">
    <div class="col-md-12">
      
        <div class="bg-light p-5 rounded-lg m-3">
          <h1 class="display-4">Bienvenido</h1>
          <p class="lead">Prueba Tecnica Integra -Kevin Cisnero</p>
        </div>

        <pre>
        	Parte I. (TERMINADO)
        	Cree un formulario web para la entrada / salida de datos conexión a base de datos MySQL  
        	•  ID de empleado debe ser único  
        	•  Apellido del empleado  
        	•  Nombre del empleado  
        	•  Teléfono formateado (XXX) XXX-XXXX  
        	•  Correo del empleado  
        	•  Fecha de contratación formateada como MM / DD / AAAA
        	
        	Puntos adicionales:  
        	•  Pantalla de búsqueda donde puede ingresar el apellido del empleado o el correo del empleado y devuelve todos los datos de la búsqueda.  
        	•  El formulario debe ser capaz de crear, modificar, eliminar y consultar los empleados.  
        	•  Usted puede elegir la plataforma para el diseño.  

        	Parte II.(SIN TERMINAR)  
        	Consumir este servicio https://api.coindesk.com/v1/bpi/currentprice.json y mostrar datos en una gráfica que se actualice cada 30 segundos, con una hora de historial. 

        	Algunos consejos:  
        	•  Céntrese en la funcionalidad  
        	•  No entregue algo que se exceda en términos de solución.  
        	•  Asegúrese de que su código esté limpio y documentado / comentado.  
        </pre>

        <P>
        	<strong>Observaciones Personales:</strong> No estaba seguro si utilizar framework o no, pienso que no esta muy bien especificado eso, por ende intente primero hacerlo con php puro pero por unos problemas personasles lo frene a ulttima hora y me pase a laravel para al menos entregar la mitad.
        </P>

    </div>
</div><!--container-->
@endsection
    