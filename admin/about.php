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
    <h1>Редактирование О Нас</h1>
    <?php if(!empty($_SESSION['login'])) :?>

    <?php echo 'Добрый день, '.$_SESSION['login'].'!'; ?>
    <br>
    <a href="/logout.php">Выйти</a>
        <br>
    <a href="../admin.php">Назад</a>

    <?php
    $sql=$pdo->prepare("SELECT * FROM about");
    $sql->execute();
    $res=$sql->fetch(PDO::FETCH_OBJ);
    ?>
    
    <form action="about/about.php" method="post" enctype="multipart/form-data">

        <input type="text" name="title" value="<?php echo $res->title?>">
        <textarea name="decription" cols="30" rows="10"><?php echo $res->decription?></textarea>
        <input type="file" name="im" id="">
        <input class="sbm-btn" name="save" type="submit" value="Сохранить новые изменения">

    </form>
        <br>
    <img src="../admin/about/img/<?php echo $res->filename?>">


    <?php else:
        echo '<h1>Вы не авторизованы</h1>';
        echo '<a href="/">На главную</a>';
    ?>

    <?php endif ?>
    </div>

</body>
</html>
