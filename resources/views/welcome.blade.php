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



 <!--CARRUSEL-->
<div id="myCarouselCustom" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarouselCustom" data-slide-to="0" class="active"></li>
        <li data-target="#myCarouselCustom" data-slide-to="1"></li>
        <li data-target="#myCarouselCustom" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
        <div class="item active">
            <img src="img/doc1.jpg" alt="">
            <div class="carousel-caption">
                <h3>Reposito Virtual de Enfermedades Cronicas</h3>
                <p>Debemos aceptar la decepción finita, pero nunca perder la esperanza infinita</p>
            </div>
        </div>
  
        <div class="item">
            <img src="img/hospital1.jpg" alt="">
            <div class="carousel-caption">
                <h3>Reposito Virtual de Enfermedades Cronicas</h3>
                <p>Una actitud positiva te da poder sobre tus circunstancias en lugar de que tus circunstancias tengan poder sobre ti</p>
            </div>
        </div>
        
        <div class="item">
            <img src="img/hospital2.jpg" alt="">
            <div class="carousel-caption">
                <h3>Reposito Virtual de Enfermedades Cronicas</h3>
                <p>La curación requiere coraje, y todos tenemos coraje, incluso si tenemos que cavar un poco para encontrarlo</p>
            </div>
        </div>
        
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="javascript:void(0);" data-slide="prev" id="prevBtn">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="javascript:void(0);" data-slide="next" id="nextBtn">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="product-category section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title text-center">
					<h2>Enfermedades Cronicas</h2>
				</div>
			</div>
			<div class="col-md-6">
				<div class="category-box">
					<a href="#!">
						<img src="https://www.farmaciagt.com/blog/wp-content/uploads/2021/10/istockphoto-953795236-612x612-1.jpg" alt="" />
						<div class="content">
							<h3>Diabetes</h3>
							<p>No tienes que vivir para la diabetes, sino vivir con la diabetes</p>
						</div>
					</a>	
				</div>
				<div class="category-box">
					<a href="#!">
						<img src="https://clinicalasmonjas.com/wp-content/uploads/2020/12/LA-EPILEPSIA-EN-EL-DESARROLLO-DEL-NINO.jpg" alt="" />
						<div class="content">
							<h3>Epilepsia</h3>
							<p>Se caracteriza por convulsiones recurrentes no provocadas.</p>
						</div>
					</a>	
				</div>
			</div>
			<div class="col-md-6">
				<div class="category-box category-box-2">
					<a href="#!">
						<img src="https://1.bp.blogspot.com/-4oZNwT7n03Q/X9oBf4R6YyI/AAAAAAAAA7U/9WyRI9c78B4NjTEHFiBRELgVBu875FHWwCLcBGAsYHQ/s2804/infograma%2BFASES%2BALZHEIMER%25282%2529.jpg" alt="" />
						<div class="content">
							<h3>Alzheimer</h3>
							<p>Del Alzheimer he aprendido a dejar la razón de lado y comunicarme con la emoción</p>
						</div>
					</a>	
				</div>
			</div>
		</div>
	</div>
</section>

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
                    <a href="Aviso_Privacidad" class="menu-item-footer"><i class="fa fa-file-text"></i> Aviso de Privacidad</a>
                    <a href="Cockies_Aviso" class="menu-item-footer"><i class="fa fa-file-text-o"></i> Cookies</a>
                   
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


       <!-- COCKIES-->

  <div class="wrapper">
    <img src="img/cookie.png" alt="">
    <div class="content">
      <header>Cookies</header>
      <p>Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
      <div class="buttons">
        <button class="item">De acuerdo</button>
        <a href="Cockies_Aviso" class="item">Leer  mas...</a>
      </div>
    </div>
  </div>


<script src="{{ asset('/js/carrusel.js') }}"></script>
</body>
</html>