
<?php include 'ConsultaSelectCliente.php';?>


<?php


    
  


require 'db.php';



    #print_r($_SESSION);

    #if ((!empty($_POST['passwordCon']) && !empty($_POST['password'])) && (($_POST['passwordCon'] == $_POST['password'])){

        #$records = $conn->prepare("UPDATE clientes set Nombre='".$_POST['name']."', Apellidos='".$_POST['surname']."', Telefono='".$_POST['phone']."', 
        #Email='".$_POST['email']."', Contraseña='".$_POST['password']."', Novedades='".$_POST['casillainfo']."' FROM clientes WHERE id = '".$_SESSION['user_id']."'");
        
        #$records = $conn->prepare( "UPDATE clientes set Nombre='HOLA' FROM clientes WHERE id = 'SDFSDF'" );
        
        #$records->execute();
        #$results = $records->fetch(PDO::FETCH_ASSOC);
    #}

    #mysqli_query($conn,"UPDATE clientes set Nombre='".$_POST['name']."', Apellidos='".$_POST['surname']."', Telefono='".$_POST['phone']."', 
    #Email='".$_POST['email']."', Contraseña='".$_POST['password']."', Novedades='".$_POST['casillainfo']."' FROM clientes WHERE id = '".$_SESSION['user_id']."'");



    

  


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
 
<section class="d-flex  flex-column justify-content-between" id="hero">

<nav class="navbar navbar-light navbar-expand-md">
    <section class="container-fluid">
        <a class="navbar-brand" href="#"></a><button data-toggle="collapse" class="navbar-toggler"
            data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                class="navbar-toggler-icon"></span></button>
        <section class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mx-auto">
            <li class="nav-item" role="presentation"><a class="nav-link" href="tesla.html"></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="mercedes.html"></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="audi.html"></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="ModificacionCliente.php"></a></li>
            </ul>
            <ul class="nav navbar-nav">

                <?php if(!isset($_SESSION['user_id'])): ?>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="SignIn.php">CUENTA</a></li>
                    <?php else: ?>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="ModificacionCliente.php">CUENTA</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="CerrarSesion.php">SALIR</a></li>
                <?php endif; ?>
                
                
            </ul>
            
            
              
        </section>
    </section>
</nav>

</section>

    <section id="createAccount" class="container contact-form">
        <form action="CreateAccount.php" method="POST" class="needs-validation" novalidate>
            <h3>Modificar los datos</h3>
            <section class="form-row">
                <section class="center-form">
               
                    <article class="form-group">
                            <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" class="form-control form-text"  value="<?php echo (isset($results['Nombre']))?$results['Nombre']:'';?>" required/>
                        <div class="invalid-feedback">
                            Introduzca un nombre utilizando solamente letras
                          </div>
                    </article>

                    <article class="form-group">
                        <label for="surname">Apellidos</label>
                        <input type="text" id="surname" name="surname" class="form-control form-text"  value="<?php echo (isset($results['Apellidos']))?$results['Apellidos']:'';?>" required/>
                        <div class="invalid-feedback">
                            Introduzca apellidos utilizando solamente letras
                          </div>
                    </article>

                    <article class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="tel" id="phone" name="phone" class="form-control form-text" minlength="9" maxlength="9" value="<?php echo (isset($results['Telefono']))?$results['Telefono']:'';?>" required/>
                        <div class="invalid-feedback">
                            Introduzca un teléfono válido
                          </div>
                    </article>


                    <article class="form-group">
                        <label for="email">Dirección de correo electrónico</label>
                        <input type="email" id="email" name="email" class="form-control form-text"  value="<?php echo (isset($results['Email']))?$results['Email']:'';?>" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required/>
                        <div class="invalid-feedback">
                            Introduzca una dirección de correo electrónico válida
                          </div>
                    </article>

                    <article class="form-group photo-container">
                        <label for="password">Nueva contraseña</label>
                            <a href="#">
                              <img src="assets/img/info_25px.png"  />
                              <span class="rounded">
                                  Introduzca una contraseña válida que contenga el menos ocho caracteres. La contraseña debe contener al menos un número y una letra
                              </span>
                            </a>
                        <input type="password" id="passwordCon" name="passwordCon" class="form-control form-text"  value="" required />
                        <div class="invalid-feedback">
                            Se requiere una contraseña
                          </div>
                    </article>

                    <article class="form-group photo-container">
                        <label for="password">Confirmar nueva contraseña</label>
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
                            <input class="form-check-input" type="checkbox" name="casillainfo" id="casillainfo" value="<?php echo (isset($results['Novedades']))?$results['Novedades']:'';?>" checked> 
                            <label class="form-check-label" >Deseo recibir información sobre novedades y ofertas</label>
                        </div>

                        
                    </article>
                    <article class="form-group">
                        <input type="submit" name="btnCreateAccount" class="btnSubmit" value="Modificar datos" />
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