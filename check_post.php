<?php
    // print_r($_POST);  //выводиться на экран инфа как осоциативный масив

    $name = $_POST['username']; //находим значение по ключу username
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(trim($name) == "")    //trim удаляет пробелы до и после строки 
        echo "Вы не ввели имя пользователя";
    else if(strlen($name) <=1)
        echo "Такого имени не существует";
    else if(trim($email) == "" || trim($pass) == "" || trim($_POST['message']) == "" )  //мы пишем  trim($_POST['message']  ($_POST) тоесть обращаемся к name=message через глобальный масив $_POST, потому что мы не создавали специально переменную для massege
        echo "Введите все данные"; 
    else {
        $_POST['password'] = md5($pass);
        foreach ($_POST as $key => $value)
            echo "<p>$value</p>";
        // echo "<h1>Все данные</h1> <p>$name</p> <p>$email</p> <p>$pass</p> <p>$_POST[message]</p>";
    }
    header('Location: /index.php');  //после выполнения условий перекидываем на главную страницу
    exit;
?>    
    