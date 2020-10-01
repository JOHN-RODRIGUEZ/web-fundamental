<?php


define('SERVIDOR','localhost');
define('USUARIO','root');
define('PASSWOD','');
define('BD','sisfarmacia');

$URL = 'http://localhost/farmacia';

$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWOD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
   // echo "<script>alert('la base de datos fue exitosa')</script>";
    }
catch (PDOException $e)
{
    echo "<script>alert('NO SE CONECTO A la base de datos fue exitosa')</script>";
}