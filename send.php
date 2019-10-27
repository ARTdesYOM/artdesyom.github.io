<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$subject = $_POST['subject'];
$email = $_POST['email'];

$fname = htmlspecialchars($fname);
$lname = htmlspecialchars($lname);
$subject = htmlspecialchars($subject);
$email = htmlspecialchars($email);

$fname = urldecode($fname);
$lname = urldecode($lname);
$subject = urldecode($subject);
$email = urldecode($email);


$fname = trim($fname);
$lname = trim($lname);
$subject = trim($subject);
$email = trim($email);


if (mail("aptemuk@gmail.com", ".$subject.", "ФИ:".$fname.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
 {
    echo "Сообщение успешно отправлено";
} else {
    echo "При отправке сообщения возникли ошибки";
}

}?>
