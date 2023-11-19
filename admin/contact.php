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
    <h1>Редактирование Контактов</h1>
    <?php if(!empty($_SESSION['login'])) :?>

    <?php echo 'Добрый день, '.$_SESSION['login'].'!'; ?>
    <br>
    <a href="/logout.php">Выйти</a>
        <br>
    

    <?php
    $sql=$pdo->prepare("SELECT * FROM contact");
    $sql->execute();
    $res=$sql->fetch(PDO::FETCH_OBJ);
    ?>
    
    <form action="" method="post">
        
        <input type="text" name="city" value="<?php echo $res->city?>">
        <input type="text" name="phone" value="<?php echo $res->phone?>">
        <input type="text" name="email" value="<?php echo $res->email?>">
        <input class="sbm-btn" type="submit" value="Сохранить новые изменения">

    </form>

<?php
    
    $city=$_POST["city"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $row="UPDATE contact SET city=:city,phone=:phone,email=:email";
    $query=$pdo->prepare($row);
    $query->execute(["city"=>$city,"phone"=>$phone,"email"=>$email]);
    ?>
    

    <?php else:
        echo '<h1>Вы не авторизованы</h1>';
        echo '<a href="/">На главную</a>';
    ?>

    <?php endif ?>
    </div>

    <script>
        const formBtn = document.querySelector('.sbm-btn');
        formBtn.addEventListener('click', () => {
            alert("Данные сохранены!");
        });
    </script>
</body>
</html>
