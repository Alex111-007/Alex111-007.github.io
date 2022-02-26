<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $msg = htmlspecialchars($msg);
    
    $name = urldecode($name);
    $email = urldecode($email);
    $msg = urldecode($msg);
    
    $name = trim($name);
    $email = trim($email);
    $msg = trim($msg);
    
    if (mail("sovet.kuratorov93@gmail.com",
        "Новое письмо",
        "Имя: ".$name. "\n".
        "Почта: ".$email."\n".
        "Текст: ".$msg)
    ){
        echo "Письмо успешно отправлено!";
    }
    else{
        echo "Ошибка!";
    }
?>