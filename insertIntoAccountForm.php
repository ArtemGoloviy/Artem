<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("account.php")
    ?>

    <form action="insertIntoAccount.php" method="post">
        <label>id гравця</label><input name="id_player" type="text"><br>
        <label>Steam guard</label><input name="steam_guard" type="text"><br>
        <label>Ім'я</label><input name="name" type="text"><br>
        <label>Вік</label><input name="age" type="text"><br>
        <label>Логін</label><input name="login" type="text"><br>
        <label>Пароль</label><input name="password" type="age"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>