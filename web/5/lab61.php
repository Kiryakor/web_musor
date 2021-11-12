<html>
<head>
  <title>Example</title>
</head>
<body>
  <?php echo "<h1>База данных про создателей языков программирования </h1><br/><br/>"; ?>

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

/* Посылаем запрос серверу */
if ($result = mysqli_query($link, 'SELECT id_author, id_language, first_name, second_name FROM author')) {

    /* Выборка результатов запроса */
    while( $row = mysqli_fetch_assoc($result) ){
        printf("id автора = %s<br/> id языка = %s<br/> Имя основателя = %s<br/> Фамилия основателя = %s<br/><br/><br/><br/>", $row['id_author'], $row['id_language'], $row['first_name'], $row['second_name']);
    }

    /* Освобождаем используемую память */
    mysqli_free_result($result);
}

/* Закрываем соединение */
mysqli_close($link);
  ?>

</body>
</html>
