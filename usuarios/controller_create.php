<?php

include('../app/config/config.php');
$nombres = $_POST['nombres'];
$apellido_p = $_POST['apellido_p'];
$apellido_m = $_POST['apellido_m'];
$ci = $_POST['ci'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$celular = $_POST['celular'];
$sexo = $_POST['sexo'];
$email = $_POST['email'];
$password = $_POST['password'];
$cargo = $_POST['cargo'];

$user_creacion = "john@gmail.com";
date_default_timezone_set("America/Caracas");
$fyh_creacion = date('Y-m-d h:i:s');
$estado = "1";

/*echo $nombres;
echo $apellido_p;
echo $apellido_m;
echo $ci;
echo $fecha_nacimiento;
echo $celular;
echo $sexo;
echo $email;
echo $password;
echo $cargo;*/
$email_tabla = '';
$query_login = $pdo->prepare("SELECT * FROM tb_usuarios  WHERE email = '$email'");
//print_r($query_login);

$query_login->execute();
$usuarios = $query_login->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $email_tabla = $usuario['email'];
}
if ($email_tabla == $email) {
    echo "Este usuario ya existe en la base de datos";
} else {
    echo "El usuario no existe";
}

$nombre_foto_perfil = "SisFarmaciaImg" . date('Y-m-d-h-i-s');
$filename = $nombre_foto_perfil . "_" . $_FILES['file']['name'];
$location = "update_usuarios/" . $filename;
move_uploaded_file($_FILES['file']['tmp_name'], $location);

$sentencia = $pdo->prepare("INSERT INTO tb_usuarios
                                     (nombres,apellido_p,apellido_m,ci,fecha_nacimiento,celular,foto_perfil,sexo,email,password,cargo,user_creacion,fyh_creacion,estado)
VALUES(:nombres,:apellido_p,:apellido_m,:ci,:fecha_nacimiento,:celular,:foto_perfil,:sexo,:email,:password,:cargo,:user_creacion,:fyh_creacion,:estado)");

$sentencia->bindParam('nombres', $nombres);
$sentencia->bindParam('apellido_p', $apellido_p);
$sentencia->bindParam('apellido_m', $apellido_m);
$sentencia->bindParam('ci', $ci);
$sentencia->bindParam('fecha_nacimiento', $fecha_nacimiento);
$sentencia->bindParam('celular', $celular);
$sentencia->bindParam('foto_perfil', $filename);
$sentencia->bindParam('sexo', $sexo);
$sentencia->bindParam('email', $email);
$sentencia->bindParam('password', $password);
$sentencia->bindParam('cargo', $cargo);
$sentencia->bindParam('user_creacion', $user_creacion);
$sentencia->bindParam('fyh_creacion', $fyh_creacion);
$sentencia->bindParam('estado', $estado);

$sentencia->execute();
if ($sentencia->execute()) {
    //echo "Usuario registrado correctamente";
    header('Location: ' . $URL . '/usuarios/');
} else {
    echo "No se registro correctamente";
}