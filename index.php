<?php
include('assets/php/valido.php'); // Includes Login Script
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

        <meta charset="utf-8">
        <title>.:. SporeGroup.:.</title>

        <meta name="viewport" content="width=device-width, initial-scale=0.8">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="assets/img/ico/spore_ico.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="assets/css/main.css">
	<script>
		$(document).ready(function() {
			$('.button').click(function() {
				type = $(this).attr('data-type');
				$('.overlay-container').fadeIn(function() {
				window.setTimeout(function(){
					$('.window-container.'+type).addClass('window-container-visible');
				}, 100);
				});
			});
			$('.close').click(function() {
				$('.overlay-container').fadeOut().end().find('.window-container').removeClass('window-container-visible');
			});
		});
	</script>
    
    
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	    <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/js/supersized.3.2.7.min.js"></script>
        <script src="assets/js/supersized-init.js"></script>
        <script src="assets/js/scripts.js"></script>        
        

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

    <div class="fondoTransparente">
            <div class="centrado"> 
            <br>
            <img src="assets/img/Logo Spore.png" width="181" height="232">
        </div>

<div id="login" >
             <div id="cajon1">Nuestra página se encuentra en construcción...</div>
                            <p>
                           </p>
                            <p></p>
                            <br>
        <div id="cajon2">Pero tenemos muchas sorpresas que esperan por ti !<br>
                            Ingresa tu correo y te daremos más información :
                            </div>
            <form action="" method="post">
            <input type="email" id="formato_caja" name="email" placeholder="Spore@example.com" >
		
        	<input name="submit" id ="button" type="submit" value=" Enviar ">
            <div>
           
            <div class=""> <span><?php echo $error;?></span>

     
           
    </form>
</div>
</div>

<div class="connect">

<a class="facebook" href=" https://www.facebook.com/SporeGroup"></a>
<a class="twitter" href="https://twitter.com/SporeGroup"></a>
<a class="email" href="mailto:contacto@sporegroup.cl"></a>
                        </div> 
                    
                </p>
            </div>
            </div>
            

    </body>

</html>
