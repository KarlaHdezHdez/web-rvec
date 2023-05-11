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


<script src="{{ asset('/js/carrusel.js') }}"></script>
</body>
</html>