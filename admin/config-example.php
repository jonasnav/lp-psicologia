<?php
setlocale(LC_ALL, "pt_BR");
date_default_timezone_set('America/Sao_Paulo');

define('DIRETORIO', '');
define('HTTP', 'https://'.$_SERVER['HTTP_HOST'].DIRETORIO);
define('IMG_PATH', 'https://'.$_SERVER['HTTP_HOST'].DIRETORIO.'/files/images');
define('SITE_HAMMER', 'https://hammerweb.com.br');


// sass assets/scss/style.scss assets/css/style.css --atyle=compressed