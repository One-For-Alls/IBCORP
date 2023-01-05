<?php
   $user = 'root';
   $pass = '';

   try{
      $pdo = new PDO('mysql:host=localhost;dbname=ibcorp', $user, $pass);
      if($pdo){
         echo 'conexion exitosa';
      }else{
         echo 'error';
      }

      
      foreach($pdo->query("SELECT * FROM user") as $row) {
         echo "<ul>" . $row['id_user'] ; 
         echo "<li>" . $row['nombre_user'] . "</li>";
         echo "<li>" . $row['apellido_user'] . "</li>";
         echo "<li>" . $row['usuario_user'] . "</li>";
         echo "<li>" . $row['correo_user'] . "</li>";
         echo "</ul>";

      }
      
   }catch(PDOException $e){
      echo "error:" . $e->getMessage() . "<br>";
   }
?>