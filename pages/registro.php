<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Login</title>
</head>
<body>
   <main class="contenedor">
      <div class="centro">
         <div class="login">
            <div class="titulo">Registro usuario</div>
            <form id="loginForm" method="post">
               <input type="text" placeholder="Nombre">  
               <input type="text" placeholder="Apellidos">  
               <input type="text" placeholder="Usuario">
               <input type="text" placeholder="contraseña">  
               <input type="text" placeholder="correo electronico">  
               <input type="button" value="Registrarse">
            </form>
            <div class="pieForm">
               <a href="pages/recuperar_pass.php" target="_blank">¿Perdiste la contraseña?</a>
            </div>
         </div>
         <div class="footer">
            <a href="index.php">Iniciar Sesion</a>
         </div>
      </div>
   </main>
   <script src="js/index.js"></script>
</body>
</html>
