<?php require_once './functions/connect.php' ?>

<!DOCTYPE html>
<html lang="en">
<?php
$sqlhead = $pdo->prepare("SELECT * FROM metatags");
$sqlhead -> execute();
$reshead=$sqlhead->fetch(PDO::FETCH_ASSOC);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $reshead["title"]?></title>
    <meta name="description" content="<?php echo $reshead["descriprion"]?>">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$sql = $pdo->prepare("SELECT * FROM contact");
$sql -> execute();
$res=$sql->fetch(PDO::FETCH_ASSOC);
?>
    <header>
        <div class="container d-flex a-items j-cont">
            <a href="index.php"><img src="./admin/about/img/<?php echo $res["filename"] ?>"></a>
            <a href="second-page.php"><?php echo $res["city"]?></a>
            <a href="#"><?php echo $res["phone"]?></a>
            <a href="#"><?php echo $res["email"]?></a>
        </div>
    </header>