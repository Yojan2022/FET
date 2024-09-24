<div class="container-wrap">
<form action ="../modelo/registrobusqueda.php" method="post" class="d-flex">
  <div class="col-md-10"> 
    <label  class="form-label">Nombre y Apellidos</label>
    <input type="text" name="Nombre_apellidos" class="form-control"  required>
  </div>
  <div class="col-md-5">
    <label class="form-label">Fecha de nacimiento</label>
    <input type="date" name="Fecha_nacimiento" class="form-control" required>
  </div>
  <div class="col-md-5">
    <label class="form-label">Nombre del papa</label>
    <input type="text" name="Papa" class="form-control" value=".">
  </div>
  <div class="col-md-5">
    <label class="form-label">Nombre de la mama</label>
    <input type="text" name="Mama" class="form-control" value=".">
  </div>
  <div class="col-md-5">
    <label class="form-label">Nombre del padrino</label>
    <input type="text" name="Padrino" class="form-control" value=".">
  </div>
  <div class="col-md-5">
    <label class="form-label">Nombre de la madrina</label>
    <input type="text" name="Madrina" class="form-control" value=".">
  </div>
  <div class="col-md-5">
    <label class="form-label">Fecha Aproximada del bautizo</label>
    <input type="text" name="bautizo" class="form-control" value=".">
  </div>
  <div class="col-md-5">
    <label class="form-label">Abuelo paterno</label>
    <input type="text" name="Abuelop" class="form-control"value=".">
  </div>
  <div class="col-md-5">
    <label class="form-label">Abuela paterna</label>
    <input type="text" name="Abuelap" class="form-control" value=".">
  </div>
  <div class="col-md-5">
    <label class="form-label">Abuelo materno</label>
    <input type="text" name="Abuelom" class="form-control" value=".">
  </div>
  <div class="col-md-5">
    <label class="form-label">Abuela materna</label>
    <input type="text" name="Abuelam" class="form-control" value=".">
  </div>
  <div class="col-md-5">
    <label class="form-label">Para que la solicita</label>
    <input type="text" name="Solicita" class="form-control" value=".">
  </div>
  <div class="col-md-5">
    <label class="form-label">Direccion a la cual se envia la partida de bautismo</label>
    <input type="text" name="Direccion" class="form-control" value=".">
  </div>
  <div class="col-md-5">
  <label class="form-label">La solicita autenticada</label>
    <select  type="text" name="Autenticada" value="." class="form-select" >
      <option name="Autenticada"  value="." selected><div class=""></div></option>
      <option name="Autenticada" value="si">si</option>
      <option name="Autenticada" value="no">no</option>
   </select>
  </div>
  <div class="col-md-5">
    <label class="form-label">Telefono</label>
    <input type="number" name="Telefono" class="form-control" require>
  </div>
  <div class="col-md-6"><br>
  <input type="submit" value="Enviar" class="btn btn-primary btn-modify">
  </div>
  <div class="col-12">
    <div class="form-group">
    <label class="form-label">.</label>
		
  </div>
</form>
<br><br>
