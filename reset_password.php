<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];
} else {
    echo "Token no proporcionado.";
    exit;
}
?>

<form action="restablecer_contraseña.php" method="POST">
  <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
  <label for="nueva_clave">Nueva Contraseña:</label><br>
  <input type="password" id="nueva_clave" name="nueva_clave" required><br><br>
  <input type="submit" value="Restablecer Contraseña">
</form>
