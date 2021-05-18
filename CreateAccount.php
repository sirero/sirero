<?php

  require 'db.php';

  $message = '';

 

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    
    $sql = "INSERT INTO clientes (Nombre, Apellidos, Telefono, Email, Contraseña,Novedades) 
    VALUES (:name,:surname,:phone,:email, :password,:news)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':surname', $_POST['surname']);
    $stmt->bindParam(':phone', $_POST['phone']);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);

    if(isset($_POST['casillainfo'])){
        $a = 1;
        $stmt->bindParam(':news', $a);
    }else{
        $a = 0;
        $stmt->bindParam(':news', $a);
    }
    #$stmt->bindParam(':news', $_POST['casillainfo']);

    if ($stmt->execute()) {
      $message = 'Successfully created new user';
      header('Location: /tesla/SignIn.php');
    } else {
      $message = 'Sorry there must have been an issue creating your account';
    }
  }
?>





<!DOCTYPE html>
<html lang="es">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/formulario.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>

<body>

<section class="d-flex flex-column justify-content-between" id="hero">

    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid"><a class="navbar-brand" href="index.php"></a>
        </div>
    </nav>

</section>

    <section id="createAccount" class="container contact-form">
        <form action="CreateAccount.php" method="POST" class="needs-validation" novalidate>
            <h3>Crear una cuenta</h3>
            <section class="form-row">
                <section class="center-form">

                    <article class="form-group">
                            <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control form-text"  value=<?php echo (isset($variable))?$variable:'';?> required/>
                        <div class="invalid-feedback">
                            Introduzca un nombre utilizando solamente letras
                          </div>
                    </article>

                    <article class="form-group">
                        <label for="surname">Apellidos</label>
                        <input type="text" id="surname" name="surname" class="form-control form-text"  value="" required/>
                        <div class="invalid-feedback">
                            Introduzca apellidos utilizando solamente letras
                          </div>
                    </article>

                    <article class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="tel" id="phone" name="phone" class="form-control form-text" minlength="9" maxlength="9" value="" required/>
                        <div class="invalid-feedback">
                            Introduzca un teléfono válido
                          </div>
                    </article>


                    <article class="form-group">
                        <label for="email">Dirección de correo electrónico</label>
                        <input type="email" id="email" name="email" class="form-control form-text"  value="" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required/>
                        <div class="invalid-feedback">
                            Introduzca una dirección de correo electrónico válida
                          </div>
                    </article>

                    <article class="form-group photo-container">
                        <label for="password">Contraseña</label>
                            <a href="#">
                              <img src="assets/img/info_25px.png"  />
                              <span class="rounded">
                                  Introduzca una contraseña válida que contenga el menos ocho caracteres. La contraseña debe contener al menos un número y una letra
                              </span>
                            </a>
                        <input type="password" id="password" name="password" class="form-control form-text"  value="" required />
                        <div class="invalid-feedback">
                            Se requiere una contraseña
                          </div>
                    </article>




                    <article class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="casilladeclar" id="casilladeclar" value="on" required> 
                            <label class="form-check-label" for="invalidCheck">Declaro haber leído y aceptar las condiciones generales 
                                del programa y la normativa sobre protección de datos</label>
                            <div class="invalid-feedback">
                                Debe aceptar esta opción
                            </div>
                        </div>
                    </article>

                    <article class="form-group">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="casillainfo" id="casillainfo" value="1" checked> 
                            <label class="form-check-label" >Deseo recibir información sobre novedades y ofertas</label>
                        </div>

                        
                    </article>
                    <article class="form-group">
                        <input type="submit" name="btnCreateAccount" class="btnSubmit" value="CREAR CUENTA" />
                    </article>
                    <article class="span"> OR </article>
                    <article class="form-group">
                        <input type="submit" name="btnSubmit" class="btnContact" value="INICIAR SESIÓN" onclick="location.href='SignIn.php';"/>
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


      


</body>
</html>