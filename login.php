<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход в административную панель</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="index.php" class="admin_h1">Сайт </a>
    <h1 class="admin_h1">Вход в административную панель </h1>
    <form action="admin/admin.php" method="post">

    <input type="text" name="admin__login" id="admin__login-id" class="form__input" placeholder="Введите логин">
    <input type="password" name="admin__pswrd" id="admin__pwsrd-id" class="form__input" placeholder="Введите пароль">
    <button class='form__input' type="submit">Войти</button>
    </form>

</body>
</html>