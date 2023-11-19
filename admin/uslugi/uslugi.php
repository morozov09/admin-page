<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$user="bazilywl_bd";
$password="Gfgfvfvf28!";
$host="localhost";
$db="bazilywl_bd";
$dbh = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';
$pdo=new PDO($dbh,$user,$password);
?>

<?php
if(isset($_POST["save"])){

    $list=['.php','.zip','.rar','.js','.html'];
        foreach($list as $item) {
            if(preg_match("/$item$/",$_FILES['im']['name']))exit("Расширение файла не подходит");
        }
        $type=getimagesize($_FILES['im']['tmp_name']);
        if($type && ($type['mime'] !='image/png' || $type['mime'] !='image/jpg' || $type['mime'] !='image/jpeg')) {
            if($_FILES['im']['size']<1024*1000) {
                $upload='../img/'.$_FILES['im']['name'];

                if(move_uploaded_file($_FILES['im']['tmp_name'],$upload)) echo "Файл загружен";
                else echo "Ошибка при загрузке файла";


            }
            else exit("Размер файла превышен");
        }


        else exit("Тип файла не подходит");
}
?>

<?php

$title=$_POST["title"];
$price=$_POST["price"];
$url=$_SERVER['REQUEST_URI'];
$url=explode('/',$url);
$str=$url[4];


$sql="UPDATE uslugi SET title=:title,price=:price,filename=:filename WHERE id=$str";
$query=$pdo->prepare($sql);
$query->execute(["title"=>$title,"price"=>$price,"filename"=>$_FILES['im']['name']]);
?>


</body>
</html>
