<?php require_once '../functions/connect.php' ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="welcome__div">
    <h1>Редактирование Услуги</h1>
    <?php if(!empty($_SESSION['login'])) :?>

    <?php echo 'Добрый день, '.$_SESSION['login'].'!'; ?>
    <br>
    <a href="/logout.php">Выйти</a>
        <br>
        <br>

    <?php
    $sql=$pdo->prepare("SELECT * FROM uslugi");
    $sql->execute();
    while($res=$sql->fetch(PDO::FETCH_OBJ)):?>
    
    
    <form action="uslugi/uslugi.php/<?php echo $res->id ?>" method="post" enctype="multipart/form-data">

        <input type="text" name="title" value="<?php echo $res->title?>">
        <textarea name="price" cols="30" rows="10"><?php echo $res->price?></textarea>
        <input type="file" name="im" id="">
        <input class="sbm-btn" name="save" type="submit" value="Сохранить новые изменения">

    </form>
        <br>
    <img src="../admin/img/<?php echo $res->filename?>" width="200">

    <?php endwhile ?>

    <?php else:
        echo '<h1>Вы не авторизованы</h1>';
        echo '<a href="/">На главную</a>';
    ?>

    <?php endif ?>
    </div>

</body>
</html>
