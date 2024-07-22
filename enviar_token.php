<?php
require 'vendor/autoload.php';
require 'Config/config.php'; 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $servername = HOST;
    $username = USER;
    $password = PASS;
    $dbname = DB;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Verificar si el correo electrónico existe en la base de datos
    $sql = "SELECT id FROM clientes WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Generar un token único
        $token = bin2hex(random_bytes(50));

        // Guardar el token en la base de datos
        $sql = "UPDATE clientes SET token = ? WHERE correo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();

        // Enviar el correo electrónico con el enlace de recuperación
        $reset_link = BASE_URL . "reset_password.php?token=" . $token;
        $subject = "Restablecer la contraseña";
        $message = "Haz clic en el siguiente enlace para restablecer tu contraseña: " . $reset_link;

        $mail = new PHPMailer(true);
        try {
            //Configuración del servidor
            $mail->SMTPDebug = 0;                      //Habilitar salida detallada para depuración
            $mail->isSMTP();                                            //Enviar utilizando SMTP
            $mail->Host       = HOST_SMTP;                //Establecer el servidor SMTP para enviar a través de él
            $mail->SMTPAuth   = true;                                   //Habilitar autenticación SMTP
            $mail->Username   = USER_SMTP;                  //Nombre de usuario SMTP
            $mail->Password   = PASS_SMTP;                              //Contraseña SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Habilitar cifrado TLS explícito
            $mail->Port       = 465;                                    //Puerto TCP para conectarse; usa 587 para TLS

            //Destinatarios
            $mail->setFrom(USER_SMTP, TITLE);
            $mail->addAddress($email);

            //Contenido
            $mail->isHTML(true);                                  //Establecer formato de correo como HTML
            $mail->Subject = $subject;
            $mail->Body    = $message;
            $mail->AltBody = strip_tags($message);

            $mail->send();
            $mensaje = array('msg' => 'CORREO ENVIADO, REVISA TU BANDEJA DE ENTRADA - SPAM', 'icono' => 'success');
        } catch (Exception $e) {
            $mensaje = array('msg' => 'ERROR AL ENVIAR CORREO: ' . $mail->ErrorInfo, 'icono' => 'error');
        }
    } else {
        $mensaje = array('msg' => 'El correo electrónico no está registrado.', 'icono' => 'error');
    }
    echo json_encode($mensaje, JSON_UNESCAPED_UNICODE);
    die();

    $stmt->close();
    $conn->close();
} else {
    echo "Método de solicitud no válido.";
}
?>
