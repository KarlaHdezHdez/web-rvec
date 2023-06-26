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
  <li><i class="fa fa-file-text-o"></i> Aviso de Cookies</li>
</ul>

<div class="panel-group" id="accordion" align="center">
  <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">
        <h2 data-toggle="collapse" data-parent="#accordion" href="#collapse1">Diabetes</h2>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">La diabetes es una enfermedad crónica (de larga duración) que afecta la forma en que el cuerpo convierte los alimentos en energía.

Su cuerpo descompone la mayor parte de los alimentos que come en azúcar (también llamada glucosa) y los libera en el torrente sanguíneo. El páncreas produce una hormona llamada insulina, que actúa como una llave que permite que el azúcar en la sangre entre a las células del cuerpo para que estas la usen como energía.</div>
   
<a href="registro">Conocer mas...</a>
 </div>

  </div>
  <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">
        <h2 data-toggle="collapse" data-parent="#accordion" href="#collapse2">Parkinson</h2>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">La enfermedad de Parkinson es un tipo de trastorno del movimiento. Ocurre cuando las células nerviosas (neuronas) no producen suficiente cantidad de una sustancia química importante en el cerebro conocida como dopamina. Algunos casos son genéticos pero la mayoría no parece darse entre miembros de una misma familia.

Los síntomas comienzan lentamente, en general, en un lado del cuerpo. Luego afectan ambos lados. Algunos son:

Temblor en las manos, los brazos, las piernas, la mandíbula y la cara
Rigidez en los brazos, las piernas y el tronco
Lentitud de los movimientos
Problemas de equilibrio y coordinación

</div>
<a href="registro">Conocer mas...</a>


    </div>
  </div>
  <div class="panel">
    <div class="panel-heading">
      <h4 class="panel-title">
        <h2 data-toggle="collapse" data-parent="#accordion" href="#collapse3">Esclerosis multiple</h2>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">La esclerosis múltiple (EM) es la más común de las enfermedades inflamatorias que dañan la cubierta de las fibras nerviosas (mielina) del Sistema Nervioso Central (SNC). En los adultos jóvenes ocupa el primer puesto entre los trastornos neurológicos que causan incapacidad.

La esclerosis múltiple conlleva la destrucción preferentemente de la vaina mielínica de las fibras nerviosas, aunque también se dañan las propias fibras nerviosas (axones), en el sistema nervioso central.

Afecta a encéfalo y médula espinal de modo diseminado, con cierta predilección por nervios ópticos, sustancia blanca del cerebro, tronco cerebral y médula espinal.</div>
    
<a href="registro">Conocer mas...</a>
</div>


  </div>
</div>

<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="blogs">
          <div class="text-center">
            <h2>REVEC</h2>
            <br>
            <p>¡Conoce todo acerca de las enfermedades crónicas degenerativas actuales en este sitio, para que estes bien informado!
            <div class="alert alert-success hidden" style="color:black; font-weight:bold; text-align:center;" role="alert" id="alertSuccess">

            </div>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>


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