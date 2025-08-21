<?php
setlocale(LC_ALL, "pt_BR");
date_default_timezone_set('America/Sao_Paulo');

define('DIRETORIO', '');
define('HTTP', 'https://'.$_SERVER['HTTP_HOST'].DIRETORIO);
define('IMG_PATH', 'https://'.$_SERVER['HTTP_HOST'].DIRETORIO.'/assets/images');
define('SITE_HAMMER', 'https://hammerweb.com.br');