crear mantenciones
<form action="{{ url('/mantencion') }}" method="post" enctype="multipart/form-data">
@csrf
<label for="Nombre">Nombre</label>
<br>
<input type="text" name="Nombre" id="Nombre">
<br><br>
<label for="Tipo">Tipo</label>
<br>
<input type="text" name="Tipo" id="Tipo">
<br><br>
<label for="Costo">Costo</label>
<br>
<input type="number" name="Costo" id="Costo">
<br><br>
<label for="Empresa">Empresa encargada</label>
<br>
<input type="text" name="Empresa" id="Empresa">
<br><br>
<label for="Fecha">Fecha</label>
<br>
<input type="date" name="Fecha" id="Fecha">
<br><br>
<label for="Descripcion">Descripcion</label>
<br>
<input type="text" name="Descripcion" id="Descripcion">
<br><br>
<input type="submit" name="Enviar">
<br><br>
</form>