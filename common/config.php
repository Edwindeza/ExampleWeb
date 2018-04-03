<?php
@header("Content-type:text/html; charset=utf-8");

// Datos generales
define('URL',basename($_SERVER['REQUEST_URI']));

// Envio de mail
define('MAIL_SECURE','ssl');
define('MAIL_HOST','mail.beerlandfactory.com');
define('MAIL_PORT','465');
define('MAIL_USER','paginaweb@beerlandfactory.com');
define('MAIL_USER_PASS','hdc2016%');
define('MAIL_ALTBODY','Pedido desde intranet de cliente');
?>
