<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function __autoload($classe) {
    $pagina = sprint('classes/%s.class.php', $classe);
    if (file_exists($pagina))
        require_once($pagina);
}
