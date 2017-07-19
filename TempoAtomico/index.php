<?php
require_once("head.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
            <video autoplay loop poster="polina.jpg" class="bg_video">
			<!-- <source src="videos/bg.webm" type="video/webm"> -->
                <source src="_video/animated-atom-model-on-a-grunge-background.mp4" type="video/mp4">
            </video>
        <div class="container-fluid">
            <center>
                <h1 class="inicio">Tempo Atômico</h1>
                <form action="inicio.php">
                    <input type="submit" name="button" class="btn btn-default ini" value="Iniciar" >
                </form>
            </center>

        </div> 
        <?php
        // put your code here
        ?>
    </body>
</html>
