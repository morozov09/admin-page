<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="welcome__div">
    <a href="index.php" class="admin_h1">Сайт </a>
    <?php if(!empty($_SESSION['login'])) :?>

    <?php echo 'Добрый день, '.$_SESSION['login'].'!'; ?>
    <br>
    <a href="/logout.php">Выйти</a>
        <br>
    <a href="admin/contact.php">Контакты</a>
    <a href="/logout.php">Хедер</a>
    <a href="admin/uslugi.php">Услуги</a>
    <a href="admin/about.php">О нас</a>

    <?php else:
        echo '<h1>Вы не авторизованы</h1>';
        echo '<a href="/">На главную</a>';
    ?>

    <?php endif ?>
    </div>
</body>
</html>
