<?php
	if($_GET) {
		$name = htmlspecialchars($_GET['text']);
		$mail = htmlspecialchars($_GET['email']);
		$msg = htmlspecialchars($_GET['coment']);
		$to = 'nexus-studio@yandex.ru';
		
		$msg .= '
Имя: '.$name.'
E-mail: '.$mail;

		$result = mail($to, "Обратная связь!", $msg);
		
		if($result) {
			echo 'Принято к доставке!';
		} else {
			echo 'Не принято к доставке!';
		}
	} else {
		echo 'not data!';
	}