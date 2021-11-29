<?php
    $title = "Про нас";
    require "blocks/header.php";
?>

<div class="container">
    <h1>Про нас</h1>

    <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="name" class="form-control">
        <input type="email" name="email" placeholder="mail" class="form-control">
        <input type="password" name="password" placeholder="password" class="form-control">
        <textarea name="message" class="form-control" placeholder="mеssage"></textarea>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>
</div>

<?php
    
    echo $_SERVER['HTTP_HOST'] . '-' . $_SERVER['REQUEST_URI'];  //ВЫВОДИТ ПОЛНЫЙ ПУТЬ К URL СТРАНИЦЫ // ВЫВОДИТ ДАЛЬНЕЙШИЙ URI СТРАНИЦЫ


    require "blocks/footer.php";
?>