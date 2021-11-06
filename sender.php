<?php
    $name = $_POST['name'];
   
    $email = $_POST['email'];


	$to = "elenagrasovskaya@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name /n
 
    Почта: $email /n
	mail($to, $subject, "From: $from ");

?>

<p>Привет, форма отправлена</p>
