<?php 
    include "../controllers/User.php";

    $name = $_POST['nome_cad'];
    $email = $_POST['email_cad'];
    $password = $_POST['senha_cad'];

    $user = new User();
    $user->name = $name;
    $user->email = $email;
    $user->password = $password;
    $user->save();
?>