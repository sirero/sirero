<?php 

require 'db.php';

session_start();





?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tesla</title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="assets/js/myjs.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">

    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet"
        href="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic-Main.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/vue">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://gstatic.com/firebasejs/4.0.0/firebase.js">
    <link rel="stylesheet" href="https://unpkg.com/vuefire/dist/vuefire.js">
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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="tesla.html">TESLA</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="mercedes.html">MERCEDES-BENZ</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="audi.html">AUDI</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="ModificacionCliente.php">MOD</a></li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </li>
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
        <article class="title-tesla">
            <h1 class="text-title-tesla" data-aos="fade-up" data-aos-duration="700" data-aos-once="true" id="title">Tesla</h1>
        </article>
       
      
        <article class="boton">
            <a  href="tesla.html" class="btn btn-primary rounded-pill">VER MODELOS</a>
        </article>
    </section>



    <section class="" id="mercedesMain">
        <div class="d-flex justify-content-center">
            <article class="title-mercedes">
                <h1 class="text-center" data-aos="fade-up" data-aos-duration="700" data-aos-once="true" id="title">Mercedes</h1>
            </article>
            
            <article class="boton-mercedes">
                <a  href="mercedes.html" class="btn btn-primary rounded-pill">VER MODELOS</a>
            </article>
        </div>
    </section>


    <section class="" id="audiMain">
        <div class="d-flex justify-content-center">
            <article class="title-mercedes">
                <h1 class="text-center" data-aos="fade-up" data-aos-duration="700" data-aos-once="true" id="title">Audi</h1>
            </article>
        <article class="boton-audi">
            <a  href="audi.html" class="btn btn-primary rounded-pill">VER MODELOS</a>
        </article>
    </div>
    </section>


    <section class="info-renting">
        <section class="container">
            <h2>EL MEJOR RENTING DE COCHES</h2>
            <p> <span class="font-weight-bold">Rápido y fácil.</span> Una cuota mensual con todo incluido hacen que
                tener coche sea mucho más barato. Preocúpate sólo de conducir.</p>
            <p>Aprovecha la ocasión que ofrece el renting de vehículos, <span class="font-weight-bold">totalmente
                    flexible y sin entrada</span>. No dejes escapar la <span class="font-weight-bold">oportunidad de
                    conseguir los mejores coches a buen precio</span>.
                Eléctricos, híbridos, automáticos o deportivos, tú decides.</p>
            <p>Toda la información sobre el renting de coches para particulares, autonomos o empresas. Elige por tipo de
                vehículo o por marca, selecciona un periodo por años y encuentra el coche que más se adapte a lo que
                buscas. </p>
            <p>Olvídate de depósitos y fianza. <span class="font-weight-bold">100% online y sin papeleos</span> para que
                puedas disfrutar de tu contrato de renting cuanto antes.</p>
            <section class="row d-flex justify-content-center">
                <section class="col-md-2">
                    <article class="text-center">
                        <img src="/assets/img/cash_in_hand_100px.png" alt="Italian Trulli">
                        <h5 class="m_1"><span>SIN ENTRADA</span></h5>
                    </article>
                </section>
                <section class="col-md-2">
                    <article class="text-center">
                        <img src="/assets/img/vehicle_insurance_100px.png" alt="Italian Trulli">
                        <h5 class="m_1"><span>SEGURO A TODO RIESGO</span></h5>

                    </article>
                </section>
                <section class="col-md-2">
                    <article class="text-center">
                        <img src="/assets/img/work_100px.png" alt="Italian Trulli">
                        <h5 class="m_1"><span>MANTENIMIENTO Y REVISIONES</span></h5>

                    </article>
                </section>
                <section class="col-md-2">
                    <article class="text-center">
                        <img src="/assets/img/rent_100px.png" alt="Italian Trulli">
                        <h5 class="m_1"><span>IMPUESTOS INCLUÍDOS</span></h5>

                    </article>
                </section>
                <section class="col-md-2">
                    <article class="text-center">
                        <img src="/assets/img/technical_support_100px.png" alt="Italian Trulli">
                        <h5 class="m_1"><span>ASISTENCIA EN CARRETERA</span></h5>
                    </article>
                </section>
            </section>
        </section>
    </section>


    <section class="services" id="work">
        <section class="container">
            <!-- <h2 class="text-as text-center">¿Qué opinan nuestros clientes?</h2> -->
            <section class="row service_grid">
                <section class="col-md-3">
                    <article class="post_block text-center">
                        <img src="/assets/img/car_70px.png" alt="Italian Trulli">
                        <h5 class="m_1"><span>ELIGE TU VEHÍCULO</span></h5>
                        <p class="m_2">Consulta todas las marcas y modelos disponibles, así como sus características
                            técnicas</p>
                    </article>
                </section>
                <section class="col-md-3">
                    <article class="post_block1 text-center">
                        <img src="/assets/img/list_70px.png" alt="Italian Trulli">
                        <h5 class="m_1"><span>PERSONALIZADO</span></h5>
                        <p class="m_2">Asesoramos tu caso particular y realizamos las gestiones de los servicios que
                            contrates.</p>
                    </article>
                </section>
                <section class="col-md-3">
                    <article class="post_block2 text-center">
                        <img src="/assets/img/laptop_key_70px.png" alt="Italian Trulli">
                        <h5 class="m_1"><span>CONTRATA ONLINE</span></h5>
                        <p class="m_2">Te ofrecemos el mejor precio disponible para tu coche, con todo incluido en una
                            cuota.</p>
                    </article>
                </section>
                <section class="col-md-3">
                    <article class="post_block text-center">
                        <img src="/assets/img/key_70px.png" alt="Italian Trulli">
                        <h5 class="m_1"><span>ENTREGA DEL COCHE</span></h5>
                        <p class="m_2">Tramitamos la entrega para que recojas tu vehículo en tu concesionario más
                            cercano.</p>
                    </article>
                </section>
            </section>
        </section>
    </section>
    


    <!-- <section class="opiniones">
        <section class="container">

            <section class="row ">
                <section class="col-md-3">
                    <article class="caja text-center">
                        <img src="../DISEÑOWEBTESLA/assets/img/car_70px.png" alt="Italian Trulli">
                        <h5 class="m_1"><a href="#">ELIGE TU VEHÍCULO</a></h5>
                        <p class="m_2">Consulta todas las marcas y modelos disponibles, así como sus características
                            técnicas</p>
                    </article>
                </section>
                <section class="col-md-3">
                    <article class="caja text-center">
                        <img src="../DISEÑOWEBTESLA/assets/img/list_70px.png" alt="Italian Trulli">
                        <h5 class="m_1"><a href="#">PERSONALIZADO</a></h5>
                        <p class="m_2">Asesoramos tu caso particular y realizamos las gestiones de los servicios que
                            contrates.</p>
                    </article>
                </section>
                <section class="col-md-3">
                    <article class="caja text-center">
                        <img src="../DISEÑOWEBTESLA/assets/img/laptop_key_70px.png" alt="Italian Trulli">
                        <h5 class="m_1"><a href="#">CONTRATA ONLINE</a></h5>
                        <p class="m_2">Te ofrecemos el mejor precio disponible para tu coche, con todo incluido en una
                            cuota.</p>
                    </article>
                </section>
                <section class="col-md-3">
                    <article class="caja text-center">
                        <img src="../DISEÑOWEBTESLA/assets/img/key_70px.png" alt="Italian Trulli">
                        <h5 class="m_1"><a href="#">ENTREGA DEL COCHE</a></h5>
                        <p class="m_2">Tramitamos la entrega para que recojas tu vehículo en tu concesionario más
                            cercano.</p>
                    </article>
                </section>
            </section>
        </section>
    </section> -->




   <!--
    
    
   INI


-->
  
<section class="support" id="support-chat">
    <button class="mensaje border rounded-circle" onclick="openForm()">

        <img src="assets/img/chat_30px.png" alt="abrir chat" />
    </button>
</section>

<section class="chat-popup" id="myForm">
    <form action="/action_page.php" class="form-container">
        <!--
  <button type="submit" class="btn">Send</button>
  <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  -->
    </form>
    <section class="chatBox" id="chatBox">
        <section class="card">

            <header class="card-header header-title">
                <span class="text-head">Chat activo</span>
                <button class="cerrar" onclick="closeForm()">
                    <img src="assets/img/macos_minimize_30px.png" alt="minimizar ventana" /></button>

            </header>

            <section id="chatbox-area">
                <section class="card-content chat-content">
                    <section class="content">

                        <section class="chat-message-group">

                            <section class="chat-messages">
                                <article class="message">
                                   <span>Hola, ¿en qué puedo ayudarle?</span></article>
                                <article class="from">
                                   <span>Hora 14:55</span></article>
                            </section>
                        </section>

                    </section>
                </section>

                <footer class="card-footer" id="chatBox-textbox" style="width: 100%;">
                    <section>
                        <textarea style="width: 67%;" id="chatTextarea" class="chat-textarea"
                            placeholder="Digite aqui"
                            ></textarea>
                        <button class="btn-send">Enviar</button>
                    </section>
            
                </footer>
            </section>


        </section>

    </section>
</section>








<!--


CHAT


-->







    <div class="footer-basic-main">
        <footer>

            <!--<button class="btn btn-primary reserve-button" type="button">Reserve Now</button>-->
            <ul class="list-inline" style="color: rgb(255,255,255);font-size: 12px;">
                <li class="list-inline-item"><a href="#">Top Car © 2021&nbsp;</a></li>
                <li class="list-inline-item"><a href="#">Privacidad legal </a></li>
                <li class="list-inline-item"><a href="#">Contacto</a></li>
            </ul>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://unpkg.com/@bootstrapstudio/bootstrap-better-nav/dist/bootstrap-better-nav.min.js"></script>
</body>

</html>