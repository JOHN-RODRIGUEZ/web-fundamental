<?php
include('../app/config/config.php');
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$email_tabla='';
$password_tabla='';
$query_login = $pdo->prepare("SELECT * FROM tb_usuarios  WHERE email = '$email' AND password ='$password'" );
//print_r($query_login);

$query_login->execute();
$usuarios = $query_login->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario)
    {
        $email_tabla= $usuario['email'];
        $password_tabla=$usuario['password'];
    }
    if (($email==$email_tabla)&&($password==$password_tabla))
    {
        //echo "El usuario correcto";
        $_SESSION['u_usuario'] = $email;
        header('Location: ../principal.php');
    }
    else{
       // echo "El correo y password es incorrecta";
        header('Location:' .$URL.'/login/');
    }