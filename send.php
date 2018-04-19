<?
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['contacts'])&&$_POST['contacts']!="")){ //Проверка отправилось ли наше поля name и не пустые ли они
    $to = 'vados271092@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
    $subject = 'Обратный звонок'; //Загаловок сообщения
    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Тема письма: '.$_POST['name'].'</p>
                        <p>Контакты: '.$_POST['contacts'].'</p>                        
                                             
                        <p>Комментарий: '.$_POST['message'].'</p>                        
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Отправитель <from@example.com>\r\n"; //Наименование и почта отправителя
    mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
	echo "<script>alert(\"Повідомлення відправлено.\");</script>"; 
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
?>