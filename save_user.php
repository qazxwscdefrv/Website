<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    
    if (isset($_POST['lname'])) { $lname=$_POST['lname']; if ($lname =='') { unset($lname);} }
    if (isset($_POST['email'])) { $email=$_POST['email']; if ($email =='') { unset($email);} }
    if (isset($_POST['phone'])) { $phone=$_POST['phone']; if ($phone =='') { unset($phone);} }
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    //заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
 if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("You did not enter all the information, go back and fill in all the fields!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $lname = stripslashes($lname);
    $lname = htmlspecialchars($lname);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $phone = stripslashes($phone);
    $phone = htmlspecialchars($phone);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    
 //удаляем лишние пробелы
    $login = trim($login);
    $lname = trim($lname);
    $email = trim($email);
    $phone = trim($phone);
    $password = trim($password);
 // подключаемся к базе
    include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
 // проверка на существование пользователя с таким же логином
   $result = mysqli_query($db, "SELECT id FROM `users` WHERE login='$login'");

$myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
        
    exit ("Sorry, this username already exists.");
    }
 // если такого нет, то сохраняем данные
$result2 = mysqli_query ($db, "INSERT INTO users (login,lname,email,phone,password) VALUES('$login','$lname','$email','$phone','$password')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Successfuly!Now you can go to the site. <a href='index.php'>Home page</a>";
    }
 else {
    echo "Error! You are not registred.";
    }
    ?>