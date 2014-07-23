<!DOCTYPE html>
<html  lang='es'>
	<head>
		<title>Innodite</title>
		<meta charset ='utf-8'/> 
		<meta name="description" content="Mejoramos tu vida con tecnología"/>
		<meta name= "keywords" content="innodite, tecnología, sistemas, informática, soporte, asesorías"/>
		<link rel="ahortout icon" href="imagenes/innodite.ico"> <!--Agrega ícono a la pestaña del navegador-->
		<link rel="stylesheet/less" type="text/less" href="../less/estilos.less"/>
		<script type="text/javascript" src="../js/less-1.5.0.min.js"></script>
		<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
   		<script type="text/javascript" src="../js/jquery.nivo.slider.js"></script>
                <script type="text/javascript" src="../js/easytabs/jquery.hashchange.min.js"></script>
                <script type="text/javascript" src="../js/easytabs/jquery.easytabs.min.js"></script>
 <!--::::::::::::::::::INICIO SCRIPT SLIDER::::::::::::::::-->
		<script type="text/javascript">
    				/*$(window).load(function() {
                                    $('#slider').nivoSlider();
                                    $('#tab-container').easytabs();
                                });*/
   		</script>
                <script type="text/javascript">
                    $(document).ready( function() { 
                        $('#slider').nivoSlider();
                        $('#tab-container').easytabs();
                        
                        // grab the initial top offset of the navigation 
                        var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;

                        // our function that decides weather the navigation bar should have "fixed" css position or not.
                        var sticky_navigation = function(){
                            var scroll_top = $(window).scrollTop(); // our current vertical position from the top

                            // if we've scrolled more than the navigation, change its position to fixed to stick to top,
                            // otherwise change it back to relative
                            if (scroll_top > sticky_navigation_offset_top) { 
                                $('#sticky_navigation').css({ 'position': 'fixed', 'top':0, 'left':0, 'width':'100%', 'opacity':0.75 });
                            } else {
                                $('#sticky_navigation').css({ 'position': 'relative', 'opacity':1}); 
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
         
	</head>
	<body>				
<!--::::::::::::::::::::::::::::::::::INICIO CABECERA:::::::::::::::::::::::::::::::::::::::-->            
        <?php include 'cabecera.php';?>
<!--::::::::::::::::::::::::::::::::::::::FIN CABECERA::::::::::::::::::::::::::::::::::::::-->
		 <section id="contenedor"> <!--Inicio Sección Contenedor-->
<!--::::::::::::::::::::::::::::::::::INICIO MENÚ::::::::::::::::::::::::::::::::::::::::::-->
		<?php include 'menu.php';?>
<!--::::::::::::::::::::::::::::::::::::::FIN MENÚ::::::::::::::::::::::::::::::::::::::::::-->
<!--::::::::::::::::::::::::::::::::::INICIO VIDEO Y TEXTO NOSOTROS:::::::::::::::::::::::::-->
     		<br>
     	 	<div class="ContenedorColumnas"> 
     	 	
	  			<article class="columna2-1">
	     			<video  controls autoplay  poster='' id="video">
	     				 <source src="../video.mp4" type="video/mp4" id="video" />                         
	    			</video>     
	 			</article>	
	 			
				<!-- <article class="columnas columna1-1">
				 <div class="particular1">
				    <p><b>Conoce mas de Innodite</b><br><br>Misión: Buscar continuamente la mejora de la calidad tanto de entornos productivos como de nuestra cotidianidad, desarrollando e implementando con carácter creativo e innovador tecnologías de punta al servicio de nuestros clientes.<br>
				    <a id="ver-mas" href="vistas/nosotros.html" class="submit"> Leer Mas</a>
				    </p>
				   </div>			 
				</article>-->
				
				  <article class="columnas columna1-1">
				 <div class="particular1">
				    <p><b>Conoce mas de Innodite</b><br><br>Visión: Buscar continuamente la mejora de la calidad tanto de entornos productivos como de nuestra cotidianidad, desarrollando e implementando con carácter creativo.<br>
				    <a id="ver-mas" href="nosotros.php" class="submit"> Leer Mas</a>
				    </p>
				   </div>			 
				</article>
						
		</div>
<!--::::::::::::::::::::::::::::::::::FIN VIDEO Y TEXTO NOSOTROS:::::::::::::::::::::::::::::::::::::::::-->		
     	<div class="ContenedorColumnas"> <!--Inicio Contenedor Columnas-->			
     		<article class="ContenedorPrincipal">   <!--Inicio Contenedor Principal-->	

<!--::::::::::::::::::::::::::::::::::INICIO "ALGUNO DE NUESTROS SERVICIOS":::::::::::::::::::::::::::::::-->
     			<div class="ContenedorColumnas">
     			<img src="../imagenes/logo1.png" class="VinetaInnodite"> 
				<h2>Alguno de Nuestros Servicios</h2>
				</div> 
				 <div class="particular2">
					<article class="columnas columna1">
					   <a href="servicios.php" class="titulo-imagen"><img src="../imagenes/prueba4.jpg" class="img-servicios"><br><br>
							<h4>Servicio</h4>
						</a>
					</article>
					<article class="columnas columna3">
					   <a href="servicios.php" class="titulo-imagen"><img src="../imagenes/prueba4.jpg" class="img-servicios"><br><br>
							<h4>Servicio</h4>
						</a>
					</article>
					
					<article class="columnas columna3">
					   <a href="servicios.php" class="titulo-imagen"><img src="../imagenes/prueba4.jpg" class="img-servicios"><br><br>
							<h4>Servicio</h4>
						</a>
					</article><br>
					<a href="servicios.php" class="ver-mas"> Ver Mas</a>
				</div>
		 
<!--::::::::::::::::::::::::::::::::::FIN"ALGUNO DE NUESTROS SERVICIOS":::::::::::::::::::::::::::::::-->
<!--:::::::::::::::::::::::::::::::::::::::::::::INICIO SLIDER::::::::::::::::::::::::::::::::::::::::-->
					<div class="ContenedorColumnas">
					<img src="../imagenes/logo1.png" class="VinetaInnodite"> 
					<h2>Galería</h2>
					</div> 
					<div class="particular2">     	
						<section>
							<div id="wrapper">
								<div class="slider-wrapper slideshow">
									<div id="slider" class="nivoSlider">
										<img src="../imagenes/slider/imagen-corporativa1.png" data-thumb="imagenes/slider/imagen-corporativa1.png" alt="" />
										<img src="../imagenes/slider/imagen-corporativa2.png" data-thumb="imagenes/slider/imagen-corporativa2.png" alt=""/> 
										<img src="../imagenes/slider/imagen-corporativa3.png" data-thumb="imagenes/slider/imagen-corporativa3.png" alt="" data-transition="slideInLeft" />
										<img src="../imagenes/slider/imagen-corporativa4.png" data-thumb="imagenes/slider/imagen-corporativa4.png" alt="" title="#htmlcaption" />
									</div>						  
								</div>
							</div>
						</section>
					</div>
<!--::::::::::::::::::::::::::::::::::::::::::::::::FIN SLIDER::::::::::::::::::::::::::::::::::::::::-->	
<!--:::::::::::::::::::::::::::::::::::::::::INICIO REDES SOCIALES:::::::::::::::::::::::::::::::::::::-->
			</article> <!--Fin Contenedor Principal-->	

			<article class="columnas columna4">
                            <div id="tab-container" class='tab-container'>
                                <ul class='etabs'>
                                  <li class='tab'><a href="#tabs1-fb">Facebook</a></li>
                                  <li class='tab'><a href="#tabs1-tw">Twitter</a></li>
                                </ul>
                                <div class='panel-container'>
                                 <!--<div class="column"></div>-->
                                 <div id="tabs1-fb">
                                    <h5>Facebook</h5><br>
                                    <div id="fb-root"></div><!--::::::::::::Facebook::::::::-->		
				    <div class="fb-like-box" data-href="https://www.facebook.com/pages/Innodite/433915703395100?fref=ts" data-width="30px" data-height="400" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                                 </div>
                                 <div id="tabs1-tw">
                                    <h5>Twitter</h5><br>
                                    <div class="grid-unit"> <!--::::::::::Twitter:::::::::::-->	
                                        <a class="twitter-timeline" href="https://twitter.com/innodite" data-widget-id="477036300768256001" data-show-faces="true">Tweets por @innodite</a>
                                    </div>
                                 </div>
                                </div>
                            </div>
			</article>	
		
		</div>	<!--Fin Contenedor Columnas-->	
<!--::::::::::::::::::::::::::::::::::INICIO "ALGUNOS DE NUESTROS PROYECTOS":::::::::::::::::::::::::::::::-->
					<div class="ContenedorColumnas">
					<img src="../imagenes/logo1.png" class="VinetaInnodite"> 
					<h2>Algunos de Nuestros Proyectos</h2>
					</div>   	
	     				<div class="particular2">
						<article class="columnas columna1">
						   <a href="servicios.php" class="titulo-imagen"><img src="../imagenes/prueba4.jpg" class="img-servicios"><br><br>
								<h4>Servicios</h4>
							</a>
						</article>
						<article class="columnas columna3">
						   <a href="servicios.php" class="titulo-imagen"><img src="../imagenes/prueba4.jpg" class="img-servicios"><br><br>
								<h4>Servicios</h4>
							</a>
						</article>
						<article class="columnas columna1">
						   <a href="servicios.php" class="titulo-imagen"><img src="../imagenes/prueba4.jpg" class="img-servicios"><br><br>
								<h4>Servicios</h4>
							</a>
						</article><br><br>
						
						<a href="vistas/servicios.html" class="ver-mas"> Ver Mas</a>
					</div>	
<!--::::::::::::::::::::::::::::::::::FIN "ALGUNOS DE NUESTROS PROYECTOS":::::::::::::::::::::::::::::::-->	
<!--:::::::::::::::::::::::::::::::::::::::::INICIO "NOTICIAS":::::::::::::::::::::::::::::::::::::::::-->
					<div class="ContenedorColumnas">
					<img src="../imagenes/logo1.png" class="VinetaInnodite"> 
					<h2>Noticias de Interés</h2>
					</div>
     				<div class="ContenedorColumnas">
						<article class="columnas columna1" >
						<h3>Título Noticia</h3>											
								<p id="ver-mas">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. <br><a href="#" class="submit"> Leer Mas</a></p>
						</article>

						<article class="columnas columna1">
						<h3>Título Noticia</h3>												
								<p id="ver-mas">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño.<br><a href="#" class="submit"> Leer Mas</a></p>
						</article>

						<article class="columnas columna1">	
						<h3>Título Noticia</h3>											
								<p id="ver-mas">Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. <br><a href="#" class="submit"> Leer Mas</a></p>
						</article>
		
					</div>
<!--:::::::::::::::::::::::::::::::::::::::::FIN "NOTICIAS":::::::::::::::::::::::::::::::::::::::::-->
<!--:::::::::::::::::::::INICIO FOOTER:::::::::::::::::::::::::::-->            
             <?php include 'footer.php';?>
<!--:::::::::::::::::::::::FIN FOOTER:::::::::::::::::::::::::::-->
		   </section> <!--Cierre Sección Contenedor-->
	</body>
</html>