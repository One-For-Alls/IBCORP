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
         <div class="cab">
               <img src="img/ibc.jpg" alt="ibc">
         </div>
         <div class="login">
            <div class="titulo">Ingreso</div>
            <form id="loginForm">
               <input type="text" placeholder="Usuario">
               <input type="text" placeholder="contraseña">  
               <input type="button" value="Ingresar">
            </form>
            <div class="pieForm">
               <a href="pages/recuperar_pass.php" target="_blank">¿Perdiste la contraseña?</a>
               <a href="pages/registro.php">Registrarte</a>
            </div>
         </div>
         <div class="footer">
            <div>
               &#169 Todos los derechos reservados
            </div>
         </div>
      </div>
   </main>
   <script src="js/index.js"></script>
</body>
</html>
