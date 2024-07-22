<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['token'];
    $nueva_clave = password_hash($_POST['nueva_clave'], PASSWORD_DEFAULT);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tienda-online";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Verificar el token
    $sql = "SELECT id FROM clientes WHERE token = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Actualizar la contraseña y eliminar el token
        $sql = "UPDATE clientes SET clave = ?, token = NULL WHERE token = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $nueva_clave, $token);
        if ($stmt->execute()) {
            echo "Contraseña restablecida exitosamente.";
        } else {
            echo "Error al restablecer la contraseña.";
        }
    } else {
        echo "Token no válido.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Método de solicitud no válido.";
}
?>
