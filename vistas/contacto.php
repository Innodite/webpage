<!--:::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::Ing. Yelitza Arreaza:::::::::::::::
::::::::::Diplomado en Programación Web::::::::::
:::::::::::::::::::::::::::::::::::::::::::::::::-->
<!DOCTYPE html>
<html  lang='es'>
	<head>
		<title>Contacto</title>
		<meta charset ='utf-8'/> 
		<meta name="description" content="Mejoramos tu vida con tecnología"/>
		<meta name= "keywords" content="innodite, tecnología, sistemas, informática, soporte, asesorías"/>
		<link rel="ahortout icon" href="../imagenes/innodite.ico"> <!--Agrega ícono a la pestaña del navegador-->
		<link rel="stylesheet/less" type="text/less" href="../less/estilos.less"/>
		<script type="text/javascript" src="../js/less-1.5.0.min.js"></script>
		<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
		<script type="text/javascript">
                    function myFunction1() {
    					alert("Debe agregar por lo menos el Campo  Nombre y Correo");
							}

                    function guardarComentario(){
                        if (validaContacto()){
                            $.post('../controlador/contacto.php', 
                                    // Parametros enviados POST
                                   {
                                    opc: 'IN',
                                    name:$('#nombre').val(),
                                    tlf:$('#telefono').val(),
                                    email:$('#email').val(),
                                    comentario:$('#mensaje').val()
                                   }, 
                                   function(respuesta){
                                        cliente = JSON.parse(respuesta);
                                        alert(cliente['response']);
                                   }
                            );
                        }else{
                            $('#result_oper').html(myFunction1());
                        }
                    }
                    


                    function validaContacto(){
                        if ( ($('#nombre').val().length <= 0) || ($('#email').val().length <= 0) )
                            return false;
                        return true;
                    }
             
                </script>
 <!--::::::::::::::::::INICIO SCRIPT MENU TRANSPARENTE::::::::::::::::-->
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
<!--::::::::::::::::::::::::::::::::::INICIO "ALGUNO DE NUESTROS SERVICIOS":::::::::::::::::::::::::::::::-->
     			<div class="ContenedorColumnas">	     			
					<article class="columnas columna2">
					
						<article id="estilo-formulario">
                                                                        <!-- action="../modelos/contacto.php" method="POST" -->
									<form class="formulario-contacto">
										<h2>Envíanos un Mensaje</h2><br></br>
										<label>Nombre Completo:</label>
										<input id="nombre" name="nombre" type="text" placeholder=""  required/><br></br>
										<label>Teléfono:</label>
										<input id="telefono" name="telefono" type="text" placeholder=""  required/><br></br>
										<label>Email:</label>
										<input id="email" name="email" type="text"  required/><br></br>
										<label for="mensaje">Mensaje:</label>
										<textarea id="mensaje" name="mensaje" required></textarea><br></br>
                                                                                <button class="submit" type="button" onclick="guardarComentario()" >Enviar</button>
                                                                                <div id="result_oper"></div>
									</form>						
						</article>	
					</article>
					<article class="columnas columna1">					   
						<article id="estilo-contacto">
							<h2>Contáctanos:</h2><br>
							<p>0416-583.38.09</p>
							<p>0414-879.92.87</p>
							<p>0426-594.00.45</p>
							<p>contacto@innodite.com</p>
						</article>
					</article>
					
				</div>
<!--::::::::::::::::::::::::::::::::::FIN"ALGUNO DE NUESTROS SERVICIOS":::::::::::::::::::::::::::::::-->
<!--:::::::::::::::::::::INICIO FOOTER:::::::::::::::::::::::::::-->            
             <?php include 'footer.php';?>
<!--:::::::::::::::::::::::FIN FOOTER:::::::::::::::::::::::::::-->
		   </section> <!--Cierre Sección Contenedor-->
	</body>
</html>
