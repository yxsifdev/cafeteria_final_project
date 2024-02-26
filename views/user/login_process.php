<?php
include '../../db/connect.php';
session_start();

if (isset($_SESSION['user_id'])) {
    // Si el usuario no ha iniciado sesión, redirigir a index.php
    header("Location: ../error404.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, nombre, password FROM usuarios WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_name'] = $row['nombre'];
            header("Location: home.php");
        } else {
            echo "Contraseña incorrecta <br>";
            echo "Vuelve a iniciar sesión aquí.";
            echo "<a href='login.php'>Iniciar sesión</a>";
        }
    } else {
        echo "Usuario no encontrado<br>";
        echo "Si no tienes una cuenta crea una aquí.";
        echo "<a href='register.php'>Crear cuenta</a>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>