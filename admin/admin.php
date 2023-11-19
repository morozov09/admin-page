<?php require_once '../functions/connect.php' ?>
<?php session_start();?>
<?php
$login=$_POST["admin__login"];
$password=$_POST["admin__pswrd"];

$sql = $pdo->prepare("SELECT id,login FROM user WHERE login=:login AND password=:password");
$sql->execute(array('login' =>$login, 'password'=>$password));
$array=$sql->fetch(PDO::FETCH_ASSOC);
if($array["id"]>0) {
    $_SESSION['login']=$array["login"];
    header('Location:/admin.php');
} else {
    header('Location:/login.php');
}

