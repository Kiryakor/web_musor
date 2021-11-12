<html>
<head>
  <title>Example</title>
</head>
<body>
  <?php echo "<h1>База данных про Языки программирования</h1><br/><br/>"; ?>

  <?php echo "<a href='http://localhost/mainPage.html'>Главная страница</a><br/><br/>"; ?>

  <?php

/* Подключение к серверу MySQL */
$link = mysqli_connect(
            'localhost',  /* Хост, к которому мы подключаемся */
            'root',       /* Имя пользователя */
            '',           /* Используемый пароль */
            'test');      /* База данных для запросов по умолчанию */

if (!$link) {
   printf("Невозможно подключиться к базе данных. Код ошибки: %s<br/>", mysqli_connect_error());
   exit;
}

mysqli_query($link, 'INSERT INTO language(id_language, name, description, year_of_creation, language_path) VALUES ("'.$_POST['id_language'].'", "'.$_POST['Name'].'", "'.$_POST['Description'].'", "'.$_POST['Year'].'", "'.$_POST['ImagePath'].'")') or die(mysql_error());


/* Посылаем запрос серверу */
if ($result = mysqli_query($link, 'SELECT id_language, name, description, year_of_creation, language_path FROM language')) {

    /* Выборка результатов запроса */
    while($row = mysqli_fetch_assoc($result) ){
        printf("id = %s<br/> Название языка = %s<br/> Описание = %s<br/> Год основания = %s<br/> <img src='%s' width='100' height='100'><br/><br/><br/><br/>", $row['id_language'], $row['name'], $row['description'], $row['year_of_creation'], $row['language_path']);
    }

    /* Освобождаем используемую память */
    mysqli_free_result($result);
}

/* Закрываем соединение */
mysqli_close($link);
  ?>

</body>
</html>
