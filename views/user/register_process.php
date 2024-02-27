<?php
include '../../config/connect.php'; // Incluye tu archivo de conexión


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $fechaNa = $_POST['fechaNa'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Verificar si el correo electrónico ya está registrado
    $email_check_query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $conn->query($email_check_query);

    if ($result->num_rows > 0) {
        // El correo electrónico ya está registrado
        echo "Error: Este correo electrónico ya está registrado. Por favor, elige otro.<br>";
        echo "<a href='../../index.php'>Volver al inicio</a>";
    } else {
        // El correo electrónico no está registrado, procede con la inserción
        $sql = "INSERT INTO usuarios (nombre, apellido, dni, fechaNa, telefono, email, password) VALUES ('$nombre', '$apellido', '$dni', '$fechaNa', '$telefono', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            header("Location: registration_success.php");
            exit();
        } else {
            echo "Error al registrar: " . $conn->error;
        }
    }
}

$conn->close();