<!--:::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::Ing. Yelitza Arreaza:::::::::::::::
::::::::::Diplomado en Programación Web::::::::::
:::::::::::::::::::::::::::::::::::::::::::::::::-->
<!DOCTYPE html>
<html  lang='es'>
	<head>
		<title>Portafolio</title>
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
<!--::::::::::::::::::::::::::::::::::::::FIN MENÚ::::::::::::::::::::::::::::::::::::::::::-->
<!--::::::::::::::::::::::::::::::::::INICIO VIDEO Y TEXTO NOSOTROS:::::::::::::::::::::::::-->

     	 	<div class="ContenedorColumnas"> 
     	 	
	  			<article>
	     			 <img src="../imagenes/prueba1.jpg" class="img-descriservi">    
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
				        <p><b>Título del Servicio</b><br><br>Descripción del Servicio: Buscar continuamente la mejora de la calidad tanto de entornos productivos como de nuestra cotidianidad, desarrollando e implementando con carácter creativo e innovador tecnologías de punta al servicio de nuestros clientes.   Descripción del Servicio: Buscar continuamente la mejora de la calidad tanto de entornos productivos como de nuestra cotidianidad, desarrollando e implementando con carácter creativo e innovador tecnologías de punta al servicio de nuestros clientes<br>
				    </p>
		
				    </p>
				   </div>			 
				</article>
						
		</div>
<!--::::::::::::::::::::::::::::::::::FIN VIDEO Y TEXTO NOSOTROS:::::::::::::::::::::::::::::::::::::::::-->

<!--::::::::::::::::::::::::::::::::::FIN VIDEO Y TEXTO NOSOTROS:::::::::::::::::::::::::::::::::::::::::-->
<!--::::::::::::::::::::::::::::::::::INICIO "ALGUNO DE NUESTROS SERVICIOS":::::::::::::::::::::::::::::::-->
     				<div class="ContenedorColumnas">
     				<img src="../imagenes/logo1.png" class="VinetaInnodite"> 
					<h2>Nuestros Servicios</h2>
					</div>      	
					<article class="columnas columna1">
					   <a href="servi1.html" class="titulo-imagen"><img src="../imagenes/prueba1.jpg" class="img-servicios"><br><br>
							<h4>Título Servicio Nro 1</h4>
						</a>
					</article>
					<article class="columnas columna3">
					   <a href="servi2.html" class="titulo-imagen"><img src="../imagenes/prueba2.jpg" class="img-servicios"><br><br>
							<h4>Título Servicio Nro 2</h4>
						</a>
					</article>
					<article class="columnas columna1">
					   <a href="servi3.html" class="titulo-imagen"><img src="../imagenes/prueba3.jpg" class="img-servicios"><br><br>
							<h4>Título Servicio Nro 3</h4>
						</a>
					</article>
					<article class="columnas columna3">
					   <a href="servi4.html" class="titulo-imagen"><img src="../imagenes/prueba4.jpg" class="img-servicios"><br><br>
							<h4>Título Servicio Nro 4</h4>
						</a>
					</article><br>
		
<!--::::::::::::::::::::::::::::::::::FIN"ALGUNO DE NUESTROS SERVICIOS":::::::::::::::::::::::::::::::-->	
<!--::::::::::::::::::::::::::::::::::INICIO "ALGUNO DE NUESTROS SERVICIOS":::::::::::::::::::::::::::::::-->
     					<article class="columnas columna1">
					   <a href="servi5.html" class="titulo-imagen"><img src="../imagenes/prueba4.jpg" class="img-servicios"><br><br>
							<h4>Título Servicio Nro 5</h4>
						</a>
					</article>
					<article class="columnas columna3">
					   <a href="servi6.html" class="titulo-imagen"><img src="../imagenes/prueba3.jpg" class="img-servicios"><br><br>
							<h4>Título Servicio Nro 6</h4>
						</a>
					</article>
					<article class="columnas columna1">
					   <a href="servi7.html" class="titulo-imagen"><img src="../imagenes/prueba2.jpg" class="img-servicios"><br><br>
							<h4>Título Servicio Nro 7</h4>
						</a>
					</article>
					<article class="columnas columna3">
					   <a href="servi8.html" class="titulo-imagen"><img src="../imagenes/prueba1.jpg" class="img-servicios"><br><br>
							<h4>Título Servicio Nro 8</h4>
						</a>
					</article><br>
					</article><br>
		
<!--::::::::::::::::::::::::::::::::::FIN"ALGUNO DE NUESTROS SERVICIOS":::::::::::::::::::::::::::::::-->		
<!--:::::::::::::::::::::INICIO FOOTER:::::::::::::::::::::::::::-->            
             <?php include 'footer.php';?>
<!--:::::::::::::::::::::::FIN FOOTER:::::::::::::::::::::::::::-->
		   </section> <!--Cierre Sección Contenedor-->
	</body>
</html>
