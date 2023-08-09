<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Afiliaciones</title>
<link rel="stylesheet" href="./miscss/micssafiliaciones.css">
<link rel=" icon" href="./vista/imagenes/Logo_1.jpg" type="image/jpeg" sizes="16x16" >
</head>
<body>
  <div class="container">
    <h2>Formulario Afiliaciones Proteccion Organizacional</h2>
    <form>
      <div class="form-column">
        <div class="form-group">
          <label for="telefono">Teléfono:</label>
          <input type="text" id="telefono" name="telefono" required>
        </div>

        <div class="form-group">
          <label for="estrato">Estrato:</label>
          <select id="estrato" name="estrato" required>
            <option value="">Selecciona un estrato</option>
            <option value="1">Estrato 1</option>
            <option value="2">Estrato 2</option>
            <option value="3">Estrato 3</option>
            <option value="4">Estrato 4</option>
            <option value="5">Estrato 5</option>
            <option value="6">Estrato 6</option>
          </select>
        </div>

        <div class="form-group">
          <label for="cedula">Cédula:</label>
          <input type="text" id="cedula" name="cedula" required>
        </div>

        <div class="form-group">
          <label for="tipo_identificacion">Tipo de Identificación:</label>
          <select id="tipo_identificacion" name="tipo_identificacion" required>
            <option value="">Selecciona un tipo</option>
            <option value="cc">Cédula de Ciudadanía</option>
            <option value="ti">Tarjeta de Identidad</option>
            <option value="ce">Cédula de Extranjería</option>
            <!-- Agrega más opciones según sea necesario -->
          </select>
        </div>

        <div class="form-group">
          <label for="eps">EPS:</label>
          <input type="text" id="eps" name="eps" required>
        </div>
      </div>

      <div class="form-column">
        <div class="form-group">
          <label for="direccion">Dirección:</label>
          <input type="text" id="direccion" name="direccion" required>
        </div>

        <div class="form-group">
          <label for="ciudad">Ciudad:</label>
          <select id="ciudad" name="ciudad" required>
            <option value="">Selecciona una ciudad</option>
            <option value="bogota">Bogotá</option>
            <option value="medellin">Medellín</option>
            <option value="cali">Cali</option>
            <option value="barranquilla">Barranquilla</option>
            <!-- Agrega más ciudades aquí -->
          </select>
        </div>

        <div class="form-group">
          <label for="estado_laboral">Estado Laboral:</label>
          <select id="estado_laboral" name="estado_laboral" required>
            <option value="">Selecciona un estado laboral</option>
            <option value="empleado">Empleado</option>
            <option value="desempleado">Desempleado</option>
            <option value="independiente">Independiente</option>
            <!-- Agrega más opciones según sea necesario -->
          </select>
        </div>
      </div>

      <div class="form-group">
        <input type="submit" value="Enviar">
      </div>
    </form>
  </div>
</body>
</html>
