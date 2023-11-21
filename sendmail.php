<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'] . '/action/km/assets/PHPMailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/action/km/assets/PHPMailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/action/km/assets/PHPMailer/src/SMTP.php';

if (isset($_POST["name"], $_POST["phone"], $_POST["source"])) {
    
  $sName = htmlspecialchars($_POST["name"]);
  $sPhone = htmlspecialchars($_POST["phone"]);
  $sSource = htmlspecialchars($_POST["source"]);

  $mail = new PHPMailer(true);

  try {
    // Указываем хост и порт SMTP сервера
    $mail->isSMTP();
    $mail->Host = '172.16.0.17';
    $mail->Port = 25;
    $mail->CharSet = 'UTF-8';
    $mail->ContentType = 'text/html';
    $mail->SMTPAuth = false;
    $mail->SMTPSecure = false;
    $mail->SMTPAutoTLS = false;

    // Настройки письма
    $mail->setFrom('not_reply@arkan.ru', 'info@arkan.ru'); // Отправитель
    $mail->addAddress('marketing@arkan.ru');
    $mail->addAddress('GPKM@arkan.ru');
    $mail->Subject = "Заявка с трекер ARKAN"; // Тема письма

    $messageBody = "";
    $messageBody = "<html><body>";
    $messageBody .= "<div style='font-family: Calibri, sans-serif;'>";
    $messageBody .= "Новая заявка на трекер ARKAN<br><br>";
    $messageBody .= "Имя: $sName<br>";
    $messageBody .= "Телефон: $sPhone<br><br>";
    $messageBody .= "Письмо было отправлено: <br>";
    $messageBody .= "с формы: $sSource<br>";
    $messageBody .= "со страницы: <a href='https://arkan.ru/action/km/'>https://arkan.ru/action/km/</a><br>";
    $messageBody .= "</div></body></html>";

    $mail->Body = $messageBody;
    if ($mail->send()) {
      $response = array(
          "success" => true
      );
    } else {
      $response = array(
          "success" => false,
          "message" => "Ошибка отправки письма: " . $mail->ErrorInfo
      );
    }
  } catch (Exception $e) {
    $response = array(
      "success" => false,
      "message" => "Ошибка инициализации PHPMailer: " . $e->getMessage()
    );
  }

  header('Content-Type: application/json');
  echo json_encode($response);
} else {
  // возвращаем ошибку, если данные отсутствуют
  $response = array(
      "success" => false,
      "message" => "Отсутствуют данные для отправки"
  );
}

?>