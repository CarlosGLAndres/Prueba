<!DOCTYPE html>
<html>
<head>       
        <meta charset="UTF-8">
        <meta name ="description" content="Base proyecto emprendimiento Proteccion Organizacional"><!-- comment -->
        <meta name ="keywords" content="Salud,Afiliaciones EPS,Afiliaciones,Afiliaciones EPS"><!-- comment -->
        <title>Proteccion Organizacional S.A.S</title>
        <!-- icono del Proyecto-emprendimiento -->
        <link rel=" icon" href="Vista/imagenes/Logo.jpg" type="image/jpeg" sizes="16x16" >
        <!-- PARA LLAMAR CSS Y OTRAS CARPETAS --> 
        <link rel="stylesheet" href="vista/miscss/micssprotecc.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
        <h2>Registrarse</h2>
        <form action="clsUsuario.php" method="POST">
            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" required>
            <br>
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>
            <br>
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            <br>
            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>
            <br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
            <br>
            <input type="submit" value="Registrarse">
        </form>
        </div>
     
         
     <div class="form-container">
         <h2>Iniciar Sesión</h2>
        <form action="clsUsuario.php" method="POST">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            <br>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
            <br>
            <input type="submit" value="Iniciar Sesión">
        </form>
         
        
        </div>
    </div>
  

</body>
</html>
