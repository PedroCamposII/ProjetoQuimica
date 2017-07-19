<?php 
    require_once("head.php");
    require_once("modal.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="_css/modal.css">
        	<script type="text/javascript">
		function validaRadio() {
		  if (document.form1.tipoEndereco[2].checked == true) {
		    window.location = "Animacao_2.html"
		    return false;
		  }else{
			// alert('seu corno vc escolheu a opção errada - fdp');
		  	window.location = "Dica_1.html"
		  	return false;
		  }
		  return true;
		}
	</script> 
    </head>
    <body>
        <img src="_img/856289-atom-minimalistic-science.jpg" class="bg_video">
        <div class="container-fluid">
            <div>
                <center>
                    
                    <img src="_img/the-question-mark.png" class="img-thumbnail e" width="15%" height="15%"/>
                    <img src="_img/the-question-mark.png" class="img-thumbnail e" width="15%" height="15%"/>
                    <img src="_img/the-question-mark.png" class="img-thumbnail e" width="15%" height="15%"/>
                    <img src="_img/the-question-mark.png" class="img-thumbnail e" width="15%" height="15%"/>
                </center>
            </div>
            <div >
                <ul class="posicao1">
                    <center>
                    <li>
                    <div class="rounded">
                    <img src="_img/modelos/thomson.png" width="200px" height="200px" alt="...">
                    <div class="caption">
                       <center>
                           <a href="#openModalthomson1"><button class="form-control"><img src="_img/icone-cadeado.png" class="b"></button></a>
                           <a href="#openModalthomson2"><button class="form-control"><img src="_img/icone-cadeado.png" class="b"></button></a>
                           <a href="#openModalthomson3"><button class="form-control"><img src="_img/icone-cadeado.png" class="b"></button></a>
                        </center>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div class="rounded">
                    <img src="_img/modelos/bohr.jpg" width="200px" height="200px" alt="...">
                    <div class="caption">
                        <center>
                            <a href="#openModalbohr1"><button class="form-control"><img src="_img/icone-cadeado.png" class="b"></button></a>
                            <a href="#openModalbohr2"><button class="form-control"><img src="_img/icone-cadeado.png" class="b"></button></a>
                            <a href="#openModalbohr3"><button class="form-control"><img src="_img/icone-cadeado.png" class="b"></button></a>
                        </center>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div class="rounded">
                    <img src="_img/modelos/dalton.png" width="200px" height="200px" alt="...">
                    <div class="caption">
                       <center>
                            <a href="#openModaldalton"><button type="button" class="form-control"><img src="_img/icone-cadeado.png" class="b" data-toggle="modal" data-target=".bs-example-modal-lg"></button></a>
                            <a href="#openModaldalton2"><button class="form-control"><img src="_img/icone-cadeado.png" class="b"></button></a>
                            <a href="#openModaldalton3"><button class="form-control"><img src="_img/icone-cadeado.png" class="b"></button></a>
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                            <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                    ...
                        </div>
                    </div>
                </div>
                        </center>
                    </div>
                    </div>
                    </li>
                    <li>
                    <div class="rounded">
                    <img src="_img/modelos/rutherford.png" width="200px" height="200px"  class="sd" alt="...">
                    <div class="caption">
                        <!--<h3>Thumbnail label</h3>-->
                        <center>
                            <a href="#openModalruther1"><button class="form-control"><img src="_img/icone-cadeado.png" class="b"></button></a>
                            <a href="#openModalruther2"><button class="form-control"><img src="_img/icone-cadeado.png" class="b"></button></a>
                            <a href="#openModalruther3"><button class="form-control"><img src="_img/icone-cadeado.png" class="b"></button></a>
                        </center>
                    </div>
                    </div>
                    </li>
                    </center>
                </ul>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>