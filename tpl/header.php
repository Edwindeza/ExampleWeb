<?php
$ini=$nos=$ser=$ben=$con=0;
switch (basename($_SERVER['PHP_SELF'])) { // lo que está dentro del switch obtiene la última parte del path(ruta). Ejm: ../carpeta1/carpeta2/index.php , en el ejemplo de devuelbe index.php.
    case "index.php":
      $ini="class='activePage'";
    break;

    case "nosotros.php":
      $nos="class='activePage'";
    break;

    case "servicios.php":
      $ser="class='activePage'";
    break;

    // case "beneficios.php":
    //   $ben="class='activePage'";
    // break;

    case "contactenos.php":
      $con="class='activePage'";
    break;
}

// Movil:
$iniM=$nosM=$serM=$benM=$conM=0;
switch (basename($_SERVER['PHP_SELF'])) { // lo que está dentro del switch obtiene la última parte del path(ruta). Ejm: ../carpeta1/carpeta2/index.php , en el ejemplo de devuelbe index.php.
    case "index.php":
      $iniM="class='activePageM'";
    break;

    case "nosotros.php":
      $nosM="class='activePageM'";
    break;

    case "servicios.php":
      $serM="class='activePageM'";
    break;

    // case "beneficios.php":
    //   $benM="class='activePageM'";
    // break;

    case "contactenos.php":
      $conM="class='activePageM'";
    break;
}
?>

<header>
	<section class="h-header hidden-xs">
		<div class="container h-contain">
			<div class="h-logo">
				<center>
					<img src="app/img/inicio/ol/logo22.jpg" alt="">
				</center>
			</div>
      <div class="h-redesSoc hidden-xs">
        <a href="http://www.facebook.com" target="_blank"><img class="h-redesSoc-img1" src="app/img/cambios/icono1.png" alt=""></a>
        <a href="http://www.instagram.com" target="_blank"><img class="h-redesSoc-img2" src="app/img/cambios/icono2.png" alt=""></a>
        <a href="http://www.whatsapp.com" target="_blank"><img class="h-redesSoc-img3" src="app/img/cambios/icono3.png" alt=""></a>
      </div>
			<div class="h-nav col-sm-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10">
				<ul>
					<li class="h-opcs"><a <?php echo $ini ?> id="activeInicio" href="index.php">Inicio</a></li>
					<li class="h-opcs"><a <?php echo $nos ?> id="activeNosotros" href="#nosotros">Nosotros</a></li>
					<!-- <li class="h-opcs h-servicios"><a href="servicios.php"> --><!-- <img src="app/img/inicio/Objeto.png" alt=""> --><!-- Servicios</a> -->
						<!-- <ul>
							<li class="h-consultoria"><a  href=""><span class="h-submenu">Consultoría</span></a></li>
							<li class="h-auditoria"><a  href=""><span class="h-submenu">Auditoria</span></a></li>
						</ul> -->
          <li class="h-opcs"><a <?php echo $ser ?> id="activeServicios" href="#servicios">Servicios</a>
					</li>
					<!-- <li class="h-opcs"><a <?php echo $ben ?> id="activeBeneficios" href="beneficios.php">Beneficios</a></li> -->
					<li class="h-opcs"><a <?php echo $con ?> id="activeContactenos" href="#contactenos">Contáctenos</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section class="hidden-xs h-header-oculto">
		<div class="container h-contain h-contain-oculto">
			<div class="h-logo h-logo-oculto col-sm-3 col-md-3 col-lg-4">
				<img src="app/img/inicio/ol/logo22.jpg" alt="">
			</div>
			<div class="h-nav h-nav-oculto col-sm-9 col-md-9 col-lg-8">
				<ul>
					<li class="h-opcs h-nav-inicio"><a <?php echo $ini ?> id="activeInicio" href="index.php">Inicio</a></li>
					<li class="h-opcs h-nav-nosotros"><a <?php echo $nos ?> id="activeNosotros" href="#nosotros">Nosotros</a></li>
					<li class="h-opcs h-servicios"><a <?php echo $ser ?> id="activeServicios" href="#servicios"><!-- <img src="app/img/inicio/Objeto.png" alt=""> -->Servicios</a>
<!-- 						<ul>
							<li class="h-consultoria h-consultoria-oculto"><a  href=""><span class="h-submenu">Consultoría</span></a></li>
							<li class="h-auditoria h-auditoria-oculto"><a  href=""><span class="h-submenu">Auditoria</span></a></li>
						</ul> -->
					</li>
					<!-- <li class="h-opcs"><a <?php echo $ben ?> id="activeBeneficios" href="beneficios.php">Beneficios</a></li> -->
					<li class="h-opcs"><a <?php echo $con ?> id="activeContactenos" href="#contactenos">Contáctenos</a></li>
				</ul>
			</div>
		</div>
	</section>


    <!-- menú responsive -->
	<section class="section-general section-header-rp visible-xs">
    <div class="col-xs-3">
      <a href="index.php">
        <img class="logo-menu-rp" src="app/img/inicio/ol/logo22.jpg">
      </a>
    </div>
    <div class="sec-menu-rp">
      <button class="btn-menu-rp" id="btn-open-menu">
        <div class="line-btn-menu-rp"></div>
        <div class="line-btn-menu-rp"></div>
        <div class="line-btn-menu-rp"></div>
      </button>
    </div>
  </section>

</header>

<!-- Menu Responsive -->
<!-- Contenido de menu rp -->
<section class="menu-rp">
  <div class="col-xs-12 sec-close-menu text-right">
    <button class="btn-close-menu no-btn" id="btn-close-menu">
      <span class="menu-rp-btn" aria-hidden="true"></span>
    </button>
  </div>

  <div class="col-xs-12 text-center sec-lista-menu-rp">
    <div class="section-block sec-link-menu-rp">
      <a <?php echo $iniM ?> id="activeInicio" href="index.php">
        INICIO
      </a>
    </div>
    <div class="section-block sec-link-menu-rp">
      <a <?php echo $nosM ?> id="activeNosotros" href="#nosotros">
        NOSOTROS
      </a>
    </div>
    <div class="section-block sec-link-menu-rp">
      <a <?php echo $serM ?> id="activeServicios" href="#servicios">
        SERVICIOS
      </a>
    </div>
    <!-- <div class="section-block sec-link-menu-rp">
      <a <?php echo $benM ?> id="activeInicioM" href="beneficios.php">
        BENEFICIOS
      </a>
    </div> -->
    <div class="section-block sec-link-menu-rp">
      <a <?php echo $conM ?> id="activeContactenos" href="#contactenos">
        CONTÁCTENOS
      </a>
    </div>
  </div>
</section>
<script>
    $(document).ready(function(){
        setTimeout(
            function(){
                $('.cc1').css('opacity','1');
                $('.cc2').css('opacity','1');
            }
        , 1000);
        setTimeout(
            function(){
                $('.cc4').css('transition','all 0s');
                $('.cc5').css('transition','all 0s');
                $('.cc4').css('transform','rotate(90deg)');
                $('.cc5').css('transform','rotate(-90deg)');
                $('.ltr').css('opacity','1');
            }
        , 2000);
        setTimeout(
            function(){
                $('.ltr').css('opacity','1');
            }
        , 1200);
    });
</script>
