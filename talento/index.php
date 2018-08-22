<!DOCTYPE html>
<html lang="en">
<?php

  session_start();

  if(!isset($_COOKIE["eluser"])) {
  } else {
      $cookie_S = $_COOKIE["eluser"];
      $elpass_S = $_COOKIE["elpass"];
  }

  if(isset($_SESSION['idUser'], $_SESSION["tipoUser"])){

    $idUsuario = $_SESSION['idUser'];
    $tipoDeUsuario = $_SESSION['tipoUser'];
    
    echo "<script type='text/javascript'> var idUsuario = ".$idUsuario."; var tipoUsuario = '".$tipoDeUsuario."'; </script>";
  }else{
    echo "<script type='text/javascript'> var idUsuario = 0; var tipoUsuario = 'F'; </script>";
  }
?>

<head>
  <meta charset="utf-8">
  <title>Grupo IS</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  
  <link href="img/icon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Gugi|Lato|Open+Sans|Roboto+Condensed|Slabo+27px" rel="stylesheet">
  
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

  <link rel="stylesheet" href="css/infinite-slider.css">

  <!-- animate -->

  <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">
  <!-- or -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
  integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
  crossorigin="anonymous">

  <!-- timeline -->

  <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Source+Sans+Pro:400" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">  
  <link rel="stylesheet" href="css/styleTL.css">

  <link href="https://fonts.googleapis.com/css?family=Acme|Berkshire+Swash|Bree+Serif|Crete+Round|Fjalla+One|Francois+One|Gloria+Hallelujah|Indie+Flower|Libre+Baskerville|Lobster|Noto+Serif|Pacifico|Patua+One" rel="stylesheet">

</head>

<body class="content_b">

  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left hide">
        <a href="#hero"><img src="img/logoGrupoISNuevoWEB.png" alt="" title="" width="auto" height="36px" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class=""><a href="../index.php">Inicio</a></li>
          <li><a href="../index.php#facts">Conocenos</a></li>
          <li class="menu-has-children menu-active"><a href="">Servicios</a>
            <ul>
              <li><a href="#">Talento</a></li>
              <li><a href="../profesionales/">Servicios profesionales</a></li>
              <li><a href="../administrados/">Servicios administrados</a></li>
              <li><a href="../asset_recovery/">Asset recovery</a></li>
            </ul>
          </li>
          <li><a href="../index.php#contact">Contactanos</a></li>
          <li><a href="../bolsa/">Bolsa de Trabajo</a></li>
          <li><a><button type="button" class="btn btn-dark" onclick="javascript:irIntra();">Intranet</button></a></li>
        </ul>
      </nav>
    </div>
  </header>
    
  <section id="hero">    
    <div class="hero-container">      
      <h1>Talento</h1>
      <a href="#facts" class="btn-get-started"><i class="fa fa-angle-down animated infinite bounce"></i></a>
    </div>
  </section>

  <main id="main">

    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header  fadeInUp">
          <!-- <h3 class="section-title">Talento</h3> -->
          <p class="section-description wow fadeInUp">Buscamos y generamos oportunidades para cualquier persona con las habilidades y aptitudes requeridas, centrándonos en capacidades y talento.</p>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-7 col-lg-7">
            <section id="services">
              <div class="container wow fadeIn">
                <div class="row">
                  <div class="col-12 animated fadeInDown">
                    <h2>Staffing</h2>
                    <p>
                    Reclutamos el mejor talento IT mediante filtros especializados basándonos en los objetivos de su proyecto, absorbemos toda la responsabilidad administrativa sobre el capital humano, además de realizar seguimiento, motivación y coaching.
                    </p>
                    <h2>Headhunting</h2>
                    <p>
                    Reclutamos el talento con todas las herramientas necesarias para que tu empresa lo absorba como interno y alcance satisfactoriamente todos los objetivos.                    
                    </p>
                  </div>
                  
                </div>
              </div>
            </section>

            <section id="success">
              <div class="container wow fadeIn">
                <div class="row wow fadeInUp">
                  <div class="col-12 col-sm-12">

                    <h2>Caso de éxito</h2>

                    <p>“Nuestro equipo de reclutamiento logró atraer a 40 especialistas en IT en 1 semana, provenientes de diferentes estados de la república mexicana, recibieron capacitación en ciudad de México y luego partieron a sus estados de origen para liderar en las oficinas de nuestro cliente. </p>

                    <p>Actualmente nuestro cliente está posicionado como el n° 1 entre las empresas de telecomunicación.”</p>
                    
                    <p class="firma">- Enrique Gutierrez</p>
                  </div>
              </div>
            </section>
            
          </div>
          <div class="col-12 col-sm-12 col-md-1 col-lg-1"></div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <section id="contact">
              <div class="container wow fadeInUp">
                <div class="section-header">
                  <h3 class="section-title">Contáctanos</h3>
                  <p class="section-description">Compartenos tus inquitudes, podemos ayudarte.</p>
                </div>
              </div>
              <div class="container wow fadeInUp">
                <div class="row justify-content-center">

                  <div class="col-12">

                    <div class="info">

                      <div>
                        <i class="fa fa-envelope"></i>
                        <p>contacto@grupois.com</p>
                      </div>

                      <div>
                        <i class="fa fa-phone"></i>
                        <p>5260-6208 / 5260-6241 / 6385-0060 / 6272-4700 Ext 114</p>
                      </div>
                    </div>

                  </div>

                  <div class="col-12">
                    <div class="form">
                      <div id="sendmessage">Gracias por enviarnos tus comentarios!</div>
                      <div id="errormessage"></div>
                      <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Proporciona tu nombre" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" data-rule="email" data-msg="Digita una dirección de correo válida" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Cuál es el tema de tu interes" />
                          <div class="validation"></div>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Deja un comentario" placeholder="Mensaje"></textarea>
                          <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Enviar mensaje</button></div>
                      </form>
                    </div>
                  </div>

                </div>

              </div>
            </section>
            
          </div>
        </div>
      </div>
    </section>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog form-dark" role="document">
        <div class="modal-content card card-image">
          <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
            <div class="modal-header text-center pb-4">
              <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>Acceso</strong> <a class="green-text font-weight-bold"><strong> GIS</strong></a></h3>
              <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <div class="md-form mb-2 text-center">
                <label data-error="wrong" data-success="right" for="Form-email5"><b style="color: white; font-style: italic; font-size: 1.4rem;">Usuario</b></label>
                <input type="email" id="user" class="form-control validate white-text" placeholder="Correo electrónico" required="yes" autofocus="yes">
              </div>

              <div class="md-form pb-3 mt-3 mb-5 text-center">
                <label data-error="wrong" data-success="right" for="Form-pass5"><b style="color: white; font-style: italic; font-size: 1.4rem;">Contraseña</b></label>
                <input type="password" id="pass" class="form-control validate white-text" placeholder="Contraseña" required="yes">
              </div>

              <div class="row d-flex align-items-center mb-4">
                <span id="mensajeInfo" style="color: white;" class="form-control-static pull-left">&nbsp;</span>
                <div class="text-center mb-3 col-md-12">
                    <button type="button" class="btn btn-info btn-block btn-rounded z-depth-1" onclick="javascript:procesaIntra();">Entrar</button>
                </div>
                <div id="elmensaje" class="alert alert-infoGIS">
                  <p id="cualmensaje" class="mensajeGIS"><strong>Listo!</strong>XXX</p>
                </div>                    
              </div>

              <div class="row">
                <div class="col-md-12">
                    <p class="font-small white-text d-flex justify-content-end">¿No tienes tu cuenta? <a href="../registro/" class="green-text ml-1 font-weight-bold"> Registrate</a></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        2018 &copy; Copyright <strong>Grupo IS</strong>. Todos los derechos reservados.
      </div>
      <div class="credits">
        
        Desarrollado por <a href="http://www.grupois.com.mx/">Grupo IS</a>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <!-- <script src="lib/jquery/jquery-migrate.min.js"></script> -->
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  
  
  <script src="lib/superfish/hoverIntent.js"></script>

  
  <script src="contactform/contactform.js"></script>

  
  <script src="js/main.js"></script>

  <script>
    $("#elmensaje").css("display", "none");

    $("#myModal").on('shown.bs.modal', function() {

      $("#myModal .modal-body #user").val("");
      $("#myModal .modal-body #pass").val("");

    });

    function irIntra(){
      if(idUsuario>0){
        window.location.replace("../intranet/?");
      }else{
        $('#myModal').modal('show');
      }
    }

    var pwd = document.getElementById("pass");
    pwd.addEventListener("keydown", function (e) {
      if (e.keyCode === 13) {
        procesaIntra();
        return false;
      }
    });

    var usr = document.getElementById("user");
    usr.addEventListener("keydown", function (e) {
      if (e.keyCode === 13) {
        procesaIntra();
        return false;
      }
    });

    function procesaIntra(){

      var correcto = true;

      var user = $('#user').val();
      var pass = $('#pass').val();

      if(user==""){
        correcto = false;
        $('#myModal .modal-body #user').focus();
        // alert("Por favor, digita tu usuario");

        $("#cualmensaje").html("<font color='white'><strong>Advertencia!</strong> Completa los campos.</font>");

        $('#elmensaje').slideDown('1000', function() {
          $('#elmensaje').slideUp('2000', function() {

          }).delay(750);
        }).delay(750);
      }

      if(pass==""){
        correcto = false;
        $('#myModal .modal-body #pass').focus();
        // alert("Por favor, digita tu clave de acceso");

        $("#cualmensaje").html("<font color='white'><strong>Advertencia!</strong> Completa los campos.</font>");

        $('#elmensaje').slideDown('1000', function() {
          $('#elmensaje').slideUp('2000', function() {
            
          }).delay(750);
        }).delay(750);
      }

      if(correcto){

        $("#myModal .modal-footer #mensajeInfo").html('Procesando usuario...');

        $.ajax({

          type: 'POST',
          url: '../validaAcceso.php',
          data: {
            'user': user,
            'pass' : pass
          },

          success: function (response) {

            if (response.info[0].success) {

              $("#cualmensaje").html("<font color='white'><strong>Listo!</strong> Bienvenido al portal.</font>");

              $('#elmensaje').slideDown('1000', function() {
                $('#elmensaje').slideUp('2000', function() {
                  window.location.replace("../intranet/?");
                }).delay(750);
              }).delay(750);

            }
            else{
              $("#cualmensaje").html("<font color='white'><strong>Error!</strong> Los datos no coinciden. Inténtalo nuevamente!.</font>");

              $('#elmensaje').slideDown('1000', function() {
                $('#elmensaje').slideUp('2000', function() {
                }).delay(750);
              }).delay(750);
            }
          }
        });
      }
    }

  </script>

  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68201310-2"></script>
  
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-68201310-2');
  </script> -->

</body>
</html>