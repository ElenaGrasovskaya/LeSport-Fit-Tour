<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

	$to = "elenagrasovskaya@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
    Фамилия: $surname /n
    Телефон: $phone /n
    Почта: $email /n
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

<p style="font-size: 3rem; text-align: center; margin: 10rem;">Спасибо за заявку!</p>
<a href="index.html" style="font-size: 2rem;  margin: 3rem auto; text-decoration:none; color: #45858C">Назад &larr;</a>
