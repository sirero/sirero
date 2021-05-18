<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /tesla');
  }
  require 'db.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id,Nombre, Apellidos, Telefono, Email, Contraseña, Novedades FROM clientes WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';
    

    if (count($results) > 0 && password_verify($_POST['password'], $results['Contraseña'])) {
      $_SESSION['user_id'] = $results['id'];
      $_SESSION['email'] = $results['Email'];
      $_SESSION['password'] = $results['Contraseña'];

      
      print_r($_SESSION);
      header("Location: /tesla");
    } else {
      $message = 'Los datos introducidos no son correctos';
    }
  }

?>










<!DOCTYPE html>
<html lang="es">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/formulario.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>


    <section class="d-flex flex-column justify-content-between" id="hero">

        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid"><a class="navbar-brand" href="index.php"></a>
            </div>
        </nav>

    </section>






    <section id="signIn" class="container contact-form">
        <form action="SignIn.php" method="POST" class="needs-validation" novalidate>
            <h3>Iniciar Sesión</h3>
            <section class="row">
                <section class="center-form ">
                <?php if(!empty($message)): ?>
                    <div class="alert alert-danger" role="alert">
                    <p> <?= $message ?></p>
                    </div>
                <?php endif; ?>
                    <article class="form-group photo-container">
                        <label for="email">Dirección de correo electrónico</label>
                        <a href="#">
                            <img src="assets/img/info_25px.png"/>
                            <span class="rounded">
                                Si su cuenta está vinculada a una dirección de correo electrónico a la que ya no tiene acceso, inicie sesión en su cuenta y actualice la dirección de correo electrónico en la configuración de la cuenta
                            </span>
                          </a>
                        
                          <input type="email" id="email" name="email" class="form-control form-text"  value="" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required/>
                          <div class="invalid-feedback">
                              Introduzca una dirección de correo electrónico válida
                            </div>
                    </article>
                    <article class="form-group">
                        <label for="password">Contraseña</label>
    
                    
                   
                    <input type="password" id="password" name="password" class="form-control form-text"  value="" required />
                    <div class="invalid-feedback">
                        Se requiere una contraseña
                      </div>
                    </article>
                    <article class="form-group">
                        <input type="submit" name="btnSubmit" class="btnSubmit" value="INICIAR SESIÓN"/>
                    </article>
                    <article class="center">
                        <a href="#" class="tds-link">¿Olvidó su correo?</a>
                        <span class="tmp-link-separator">|</span>
                        <a href="#" class="tds-link">¿Olvidó su contraseña?</a>
                    </article>
                    <article class="span"> OR </article>
                    <article class="form-group">
                        <input type="submit" name="btnCreateAccount" class="btnContact" value="CREAR CUENTA" onclick="location.href='CreateAccount.php';"/>
                    </article>
                </section>
            </section>
            <section class="row">
                <section class="footer-basic">
                    <footer>
                        <ul class="list-inline" style=" color:black; font-size: 12px;">
                            <li class="list-inline-item"><a href="#">Top Car © 2021&nbsp;</a></li>
                            <li class="list-inline-item"><a href="#">Privacidad Legal</a></li>
                            <li class="list-inline-item"><a href="#">Contacto</a></li>
                        </ul>
                    </footer>
                </section>
            </section>
        </form>
    </section>


    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>
</body>
</html>