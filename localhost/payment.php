<?php
// Файлы phpmailer
require 'admin/phpmailer/PHPMailer.php';
require 'admin/phpmailer/SMTP.php';
require 'admin/phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$email = $_POST['email'];
$firstDate = $_POST['firstDate'];
$lastDate = $_POST['lastDate'];
$price = $_POST['price'];
$number = $_POST['number'];


// Формирование самого письма
$title = "Подтверждение бронирования номера: ". $number ." с ". $firstDate . " по ". $lastDate;
$body = 'Гость - ' . $name .' с почтой: '. $email .'<br>Нажал кнопку потдверждения бронирования номера: '. $number .' с '. $firstDate . ' по '. $lastDate .'<br> Проверьте оплату предоплаты в - '. $price .'руб. и подтвердите бронирование в панели администратора!';

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'hotel-istoria@mail.ru'; // Логин на почте
    $mail->Password   = 'u6kFqjzazhGPXEBUZt1M'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('hotel-istoria@mail.ru', 'Бутик-отель История'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('hotel-istoria@mail.ru');  

    // Прикрипление файлов к письму
if (!empty($file['name'][0])) {
    for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
        $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
        $filename = $file['name'][$ct];
        if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
            $mail->addAttachment($uploadfile, $filename);
            $rfile[] = "Файл $filename прикреплён";
        } else {
            $rfile[] = "Не удалось прикрепить файл $filename";
        }
    }   
}
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);