@csrf    

<div class="form-group">
    <label for="last_name" class="col-form-label">Apellido</label>
    <input type="text" 
    class="form-control" 
    id="last_name" 
    name="last_name" 
    value="{{ $employee->last_name }}"
    required>
</div>

<div class="form-group">
    <label for="name" class="col-form-label">Nombre</label>
    <input type="text" 
    class="form-control" 
    id="name" name="name"
    value="{{ $employee->name }}" 
    required>
</div>

<div class="form-group">
    <label for="phone" class="col-form-label">Telefono</label>
    <input type="text" 
    class="form-control" 
    id="phone" 
    name="phone"
    value="{{ $employee->phone }}" 
    placeholder="(XXX) XXX-XXXX" required>

</div>

<div class="form-group">
    <label for="email" class="col-form-label">Correo</label>
    <input type="email" 
    class="form-control" 
    id="email" 
    name="email"
    value="{{ $employee->email }}" 
    placeholder="email@dominio.com" required>
</div>

<div class="form-group">
    <label for="contrated" class="col-form-label">Fecha de Inscripción</label>
    <input type="date" 
    class="form-control" 
    id="contrated" 
    name="contrated" 
    value="{{ $employee->contrated }}" 
    required>
</div>