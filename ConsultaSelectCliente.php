<?php

session_start();

require 'db.php';



    #print_r($_SESSION);


  $records = $conn->prepare("SELECT id,Nombre, Apellidos, Telefono, Email, Contraseña, Novedades FROM clientes WHERE id = '".$_SESSION['user_id']."'");
  
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  
    


?>