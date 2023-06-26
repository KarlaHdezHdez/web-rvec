<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>RVEC</title>
    
<link rel="stylesheet" href="{{ asset('/css/estilos.css') }}"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</head>
<body>
<!-- CABECERA -->
<div class="header">
    <img src="img/logo.png" alt="" width="200" height="70">
  
  <div class="header-right">
  <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="#"><i class="fa fa-hand-peace-o"></i> Quienes somos</a>
  <a href="#"><i class="fa fa-shopping-cart"></i> Tienda</a>
  <a href="#"><i class="fa fa-newspaper-o"></i>Informacion</a>
  <a href="#"><i class="fa fa-pencil-square-o"></i>Contactanos</a>
  <a href="#"><i class="fa fa-user-plus"></i>Registrate</a>
  <a href="#"><i class="fa fa-sign-in"></i>Iniciar Sesion</a>
  </div>
</div>

<ul class="breadcrumb">
  <li><a href="#"><i class="fa fa-fw fa-home"></i> Home</a></li>
  <li><i class="fa fa-file-text"></i> Aviso de Privacidad Integral</li>
</ul>

<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="text-center">
          <h2><br><br><br>ESCRIBENOS UN MENSAJE</h2>
          <p>DESCRIBE TU PROBLEMA BREVEMENTE <br>ESTE CORREO SERA ENVIADO A <br>revec@gmail.com
            <br></p>
        </div>
        <hr>
      </div>
    </div>
  </div>


  <section id="contact-page">
    <div class="container">
      <div class="row contact-wrap">
        <div class="col-md-8 col-md-offset-2">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder=" Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Correo " data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
              <div class="validation"></div>
            </div>

            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Enviar Correo</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->
  <br>
  <br>
  <br>
  <br>

   <!-- PIE DE PAGINA-->
<footer>
        <div class="footer-container">
            <div class="footer-content-container">
                <h3 class="website-logo">RVEC</h3>
                <span class="footer-info">Repositorio Virtual de las </span>
                <span class="footer-info">Enfermedades Cronicas</span>
            </div>
            <div class="footer-menus">
                <div class="footer-content-container">
                    <span class="menu-title"><i class="fa fa-bars"></i> Menu</span>
                    <a href="index.php" class="menu-item-footer"><i class="fa fa-fw fa-home"></i> Home</a>
                    <a href="informacion" class="menu-item-footer"><i class="fa fa-newspaper-o"></i> Informacion</a>
                    <a href="" class="menu-item-footer"><i class="fa fa-camera-retro"></i> Testimonios</a>
                </div>
                <div class="footer-content-container">
                    <span class="menu-title"><i class="fa fa-gavel"></i> legal</span>
                    <a href="avisoprivacidad" class="menu-item-footer"><i class="fa fa-file-text"></i> Aviso de Privacidad</a>
                    <a href="avisocockie" class="menu-item-footer"><i class="fa fa-file-text-o"></i> Cookies</a>
                   
                </div>
            </div>
            
            
            <div class="footer-content-container">
                <span class="menu-title">Siguenos</span>
                <div class="social-container">
                    <a href="" class="social-link"><i class="fa fa-facebook-official"></i></a>
                    <a href="" class="social-link"><i class="fa fa-instagram"></i></a>
                    <a href="" class="social-link"><i class="fa fa-twitter-square"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright-container">
            <span class="copyright">Copyright 2023, RVEC.com. Todos los derechos reservados.</span>
        </div>
    </footer>

</body>
</html>