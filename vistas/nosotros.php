<!--:::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::Ing. Yelitza Arreaza:::::::::::::::
::::::::::Diplomado en Programación Web::::::::::
:::::::::::::::::::::::::::::::::::::::::::::::::-->
<!DOCTYPE html>
<html  lang='es'>
	<head>
		<title>Nosotros</title>
		<meta charset ='utf-8'/> 
		<meta name="description" content="Mejoramos tu vida con tecnología"/>
		<meta name= "keywords" content="innodite, tecnología, sistemas, informática, soporte, asesorías"/>
		<link rel="ahortout icon" href="../imagenes/innodite.ico"> <!--Agrega ícono a la pestaña del navegador-->
		<link rel="stylesheet/less" type="text/less" href="../less/estilos.less"/>
		<script type="text/javascript" src="../js/less-1.5.0.min.js"></script>
		<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
<!--:::::::::::::::::::::FIN SCRIPT SLIDER:::::::::::::::::-->
<!--:::::::::::::::::::::::::::INICIO TWITTER::::::::::::::::::::::-->
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");	
		</script>
<!--:::::::::::::::::::::::::::FIN TWITTER::::::::::::::::::::::-->

<!--:::::::::::::::::::::::::::::::::INICIO FACEBOOK::::::::::::::::::::::::::::::::-->

		<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=308327845867165&version=v2.0";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
<!--:::::::::::::::::::::::::::::::::FIN FACEBOOK::::::::::::::::::::::::::::::::-->
 <!--::::::::::::::::::INICIO SCRIPT MENU TRANSPARENTE::::::::::::::::-->
                <script type="text/javascript">
                    $(document).ready( function() { 
                        //$('#slider').nivoSlider();
                        //$('#tab-container').easytabs();
                        
              				          // grab the initial top offset of the navigation 
                        var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;

                        // our function that decides weather the navigation bar should have "fixed" css position or not.
                        var sticky_navigation = function(){
                            var scroll_top = $(window).scrollTop(); // our current vertical position from the top

                            // if we've scrolled more than the navigation, change its position to fixed to stick to top,
                            // otherwise change it back to relative
                            if (scroll_top > sticky_navigation_offset_top) { 
                                $('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0, 'width':'100%', 'opacity':0.75 });
                                document.getElementById("logofffocus").style.visibility = 'visible';
                                document.getElementById("contactsocial").style.visibility = 'visible';
                            } else {
                                $('#sticky_navigation').css({ 'position': 'relative', 'opacity':1});
                                document.getElementById("logofffocus").style.visibility = 'hidden';
                                document.getElementById("contactsocial").style.visibility = 'hidden';
                            }   
                        };

                        // run our function on load
                        sticky_navigation();

                        // and run it again every time you scroll
                        $(window).scroll(function() {
                             sticky_navigation();
                        });
                        
                    });
                </script>
 <!--::::::::::::::::::FIN SCRIPT MENU TRANSPARENTE::::::::::::::::-->
	</head>
	<body>		
<!--::::::::::::::::::::::::::::::::::INICIO CABECERA:::::::::::::::::::::::::::::::::::::::-->            
             <?php include 'cabecera.php';?>
<!--::::::::::::::::::::::::::::::::::::::FIN CABECERA::::::::::::::::::::::::::::::::::::::-->		

		 <section id="contenedor"> <!--Inicio Sección Contenedor-->
<!--::::::::::::::::::::::::::::::::::INICIO MENÚ::::::::::::::::::::::::::::::::::::::::::-->
		<?php include 'menu.php';?>
<!--:::::::::::::::::::::::::::::::::::::::::::::FIN MENÚ::::::::::::::::::::::::::::::::::::::::::-->
<!--:::::::::::::::::::::::::::::::::::::::::INICIO "NOSOTROS":::::::::::::::::::::::::::::::::::::::::-->
				<div class="ContenedorColumnas">
					<img src="../imagenes/logo1.png" class="VinetaInnodite"> 
					<h2>Conociendo a Innodite:</h2>
					</div>
     				<div class="ContenedorColumnas">
						<article class="columnas columna1" >
						<h3>Misión</h3>											
								<p id="ver-mas">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como</p>
						</article>

						<article class="columnas columna1">
						<h3>Visión</h3>												
								<p id="ver-mas">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como</p>
						</article>

						<article class="columnas columna1">	
						<h3>Objetivo</h3>											
								<p id="ver-mas">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como</p>
						</article>
		
					</div>
<!--:::::::::::::::::::::::::::::::::::::::::FIN "NOSOTROS":::::::::::::::::::::::::::::::::::::::::-->	
<!--:::::::::::::::::::::::::::::::::::::::::INICIO "NOSOTROS":::::::::::::::::::::::::::::::::::::::::-->
					<div class="ContenedorColumnas">
					<img src="../imagenes/logo1.png" class="VinetaInnodite"> 
					<h2>Equipo de Trabajo:</h2>
					</div>
     				<div class="ContenedorColumnas">
     			
     					<article class="columnas columna1" >
						<img class="image" src="../imagenes/yelitza.jpg" alt="Yelitza Arreaza">
						<p class="p">Yelitza Arreaza</p>
						<h5>Ing. en Informática</h5><br>									
								<p id="ver-mas">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como</p>
						</article>

						<article class="columnas columna1">
						<img class="image" src="../imagenes/javier.jpg" alt="Javier Urbano">
						<p class="p">Javier Urbano</p>
						<h5>Ing. en Informática</h5><br>											
								<p id="ver-mas">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como</p>
						</article>

						<article class="columnas columna1">							
							<img class="image" src="../imagenes/anthony.jpg" alt="Anthony Filgueira">
							<p class="p">Anthony Filgueira</p>
							<h6>Tlgo. en Computación</h5><br></br>																					
																					
								<p id="ver-mas">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como</p>
						</article>
		
					</div>
<!--:::::::::::::::::::::::::::::::::::::::::FIN "NOSOTROS":::::::::::::::::::::::::::::::::::::::::-->	
<!--:::::::::::::::::::::INICIO FOOTER:::::::::::::::::::::::::::-->            
             <?php include 'footer.php';?>
<!--:::::::::::::::::::::::FIN FOOTER:::::::::::::::::::::::::::-->
		   </section> <!--Cierre Sección Contenedor-->
	</body>
</html>
