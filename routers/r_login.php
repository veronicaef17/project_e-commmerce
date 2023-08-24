<?php
include_once '../controllers/C_login.php';

$login = new C_login();


    if ($_GET['aksi'] == 'register') {

        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $role = $_POST['role'];

        $login->register($id,$nama,$email,$pass,$role);
    }
    elseif ($_GET ['aksi'] == 'login'){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $login->login($email, $pass)
    }

?>