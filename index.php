<?php
    $title = "Главная";
    require "blocks/header.php"; //деректива require, если есть какая то ошибка, файл дальше грузиться не будет.

    // include "blocks/header.php" // деректива, которая продолжает выполнять код дальше, даже если есть какая-то проблема в нахождении файла.

    // require_once "blocks/header.php"; //деректива require_once, имеет теже свойства что и выше, только отличее в том что его можно подключить только один раз

    // include_once "blocks/header.php"  //деректива include_once, имеет теже свойства что и выше, только отличее в том что его можно подключить только один раз
?>

<h1>
    Главная
</h1>

<?php 
    // $file = fopen("text.txt", "a");     //w=write   a=append  файл создааться сам

    // fwrite($file, "\n2,Nikita molodec \nmykyta");

    // fclose($file);   //файл всегда надо закрывать
    // $filename = "text.txt";
    // $file = fopen("text.txt", "r");

    // $content = fread($file, filesize($filename));
    // echo $content;

    // file_put_contents("a.txt", "lkslfk\nflksdkf"); //Пишет данные в файл быстро, не прописывая полную структуру к файл

    // echo '<br> <br>';

    // // echo file_get_contents("a.txt"); //выводим на сайт  то что написано в файле

    // echo '<br> <br>';
    
    // echo file_exists("a.txt");  //выводим на сайт цифру 1 если этот файл существует

    // // rename("a.txt", "new_name.txt");// переименовуваем файл

    // // unlink("new_name.txt"); // так помжно удалить любой файл, даже с расширением .php
    // echo '<br> <br>';

    // echo __FILE__;  //выводим путь к файлу
    // echo fileperms(__FILE__); //выводим какие права мы имеем у файлу
    // chmod(__FILE__, 0777);   //даём полные права файлу

    // echo '<br> <br>';

    // fclose($file); //всегда надо закрывать файл

    // // phpinfo();   показывает информацио о пхп
    // //////////////////////////////////////////////////////////
    // // echo '<pre>';
    // // print_r($_SERVER);
    // // echo '</pre>';
    // ////////////////////////////////////////////////////////

    // // echo $_SERVER['HTTPS'];    УЗНАТЬ ЧЕРЕЗ КАКОЙ ПРОТОКОЛ РАБОТАЕТ СЕРВЕР
    // // echo $_SERVER['HTTP_USER_AGENT'];  //выводит данные пользователя на экран
    // // echo $_SERVER['HTTP_HOST'] . '-' . $_SERVER['REQUEST_URI'];  //ВЫВОДИТ ПОЛНЫЙ ПУТЬ К URL СТРАНИЦЫ // ВЫВОДИТ ДАЛЬНЕЙШИЙ URI СТРАНИЦЫ

    
?>

<?php

    $message = "Message";
    $to = "tkacnikita716@gmail.com";
    $from = "exempl@gmail.com";
    $subject = "Тема письма";

    $subject = "=?utf-8?b?" . base64_encode($subject) . "?=";   ///=?utf-8?b? кодировка для отправки сообщений      /// base64_encode  кодировка для отправки сообщения на латинице

    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

    mail($to, $subject, $message, $headers);

    // $lis = [5, 7, 9, 2, 0, 15, 11, 12];
    // unset($lis[1]);  //unset удаляем по индексу элемент масива
    // $lis = array_values($lis);  //array_values обновляем порядочность эелемнотв в масиве после манипуляции с ними
    // // sort($lis);   //сортируем элементы от найменьшего к большому(если напиать rsort будет от большего к меньшему)


    // // if (in_array(0, $lis) == "") {   //in_array проверяет есть ли элемент в массиве
    // //     echo "Not found";
    // // } else {
    // //     echo "Found";
    // // }

    // $arr = array_slice($lis, 2, 2);  //array_slice обрезаем данные до определенного индекса, и через запятую убирает последние 2 элемента

    // $arr_1 = [11, 14, 17.2];
    // $arr_2 = [21, 22, 23];
    // $arr_3 = array_merge($arr_1, $arr_2);  //array_merge с помощью этой функции объединяем масивы;
    // print_r($arr_3);
    // echo '<br>';

    // print_r($arr);   //выводиться для объектов
    // echo '<br>';
    // // shuffle($lis);   упорядочивает элементы в хаотичном порядке 
    // print_r($lis);  //print_r используеться для масивов 
    // echo '<br>';


    // $x = "dfsf";
    // echo gettype($x);

    // echo '<br>';

    // $str = "Example";
    // echo strpos($str, "ple");

    // echo '<br>';

    // $words = "john,bob,alex";
    // $arr_words = explode(",", $words);  //explode() выводит на экран слова без пробелов в осоциативном массиве
    // print_r($arr_words);

    require "blocks/footer.php";
?>

    

    