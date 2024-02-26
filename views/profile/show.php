<?php
require_once("c://xampp/htdocs/cafeteria/views/head/head.php");

session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    // Si el usuario no ha iniciado sesión, redirigir a index.php
    header("Location: ../error404.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cafeteria";

$conn = new mysqli($servername, $username, $password, $dbname);

$userId = $_SESSION['user_id'];
// Consulta la información del usuario
$query = "SELECT id, nombre, apellido, dni, fechaNa, telefono, email FROM usuarios WHERE id = $userId";
$result = $conn->query($query);

// Verifica si se encontró el usuario
if ($result->num_rows > 0) {
    // Obtiene los datos del usuario
    $row = $result->fetch_assoc();

    // Muestra la información en la página
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolce Vita - <?php
                        $userName = $_SESSION['user_name'];

                        if (strlen($userName) > 20) {
                            $truncatedName = substr($userName, 0, 20) . '...';
                            echo $truncatedName;
                        } else {
                            echo $userName;
                        }
                        ?>
    </title>
    <link rel="stylesheet" href="profile.css">
</head>

<body>

<section class="box-profile">
        <div class="perfil-header">
            <img style="border-radius: 100%" width="150px" height="150px" src="../../images/icons/usernofound.jpg" alt="">
            <div class="header-content">
                <h2><?php echo $row['nombre'] . ' ' . $row['apellido']; ?></h2>
                <p>ID: <?php echo $row['id']; ?></p>
            </div>
        </div>
        <div class="info-user-profile">
            <div class="primary-data">
                <h4>Nombre</h4>
                <p><?php echo $row['nombre']; ?></p>
                <!--  -->
                <h4>Correo electrónico</h4>
                <p><?php echo $row['email']; ?></p>
                <!--  -->
                <h4>DNI</h4>
                <p><?php echo $row['dni']; ?></p>
            </div>
            <div class="secondary-data">
                <h4>Apellido</h4>
                <p><?php echo $row['apellido']; ?></p>
                <!--  -->
                <h4>Número de teléfono</h4>
                <p><?php echo $row['telefono']; ?></p>
                <!--  -->
                <h4>Fecha de nacimiento</h4>
                <p><?php echo $row['fechaNa']; ?></p>
            </div>
        </div>
        <div class="btn-logout">
            <a href="../user/logout.php">Cerrar sesión</a>
        </div>
        <br>
        <a class="back-home" href="../../index.php">Volver al inicio</a>
    </section>
    <?php
} else {
    // Si no se encuentra el usuario, muestra un mensaje de error
    echo "Error: Usuario no encontrado";
}
?>
</body>

</html>

<style>
    @import url('https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-straight/css/uicons-solid-straight.css');
    @import url('https://cdn-uicons.flaticon.com/2.1.0/uicons-bold-rounded/css/uicons-bold-rounded.css');
    @import url('https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-rounded/css/uicons-solid-rounded.css');
    /*  */
    @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-image: url(../../images/bg/coffee-bg3.jpg);
        background-size: cover;
    }

    /*  */

    .box-profile {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        padding: 30px 0;
        flex-wrap: wrap;
    }

    .box-profile .perfil-header {
        display: flex;
        gap: 30px;
        width: 1000px;
        justify-content: left;
        flex-wrap: wrap;
        padding: 10px;
        border-radius: 100px;
        box-shadow: #000000 0 0 10px 1px;
        /* background-color: #916b5e; */
        /* background-image: url(coffee-bg.jpg); */
        /* background-size: cover; */
        backdrop-filter: blur(50px);
        align-items: center;
    }

    .perfil-header h2 {
        font-weight: 600;
        color: #fff;
    }

    .perfil-header p {
        font-weight: 500;
        color: #c0c0c0;
    }

    .info-user-profile {
        display: flex;
        gap: 20vh;
        padding: 50px 0;
    }

    .primary-data {
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 30px 50px;
        backdrop-filter: blur(50px);
        border-radius: 10px;
    }

    .primary-data h4 {
        color: #fff;
    }

    .primary-data p {
        outline: 1px solid #E2E4E9;
        padding: 5px 100px 5px 10px;
        color: #fff;
        border-radius: 5px;
        margin-bottom: 10px;
        text-align: left;
    }

    /*  */

    .secondary-data {
        display: flex;
        flex-direction: column;
        gap: 10px;
        padding: 30px 50px;
        backdrop-filter: blur(50px);
        border-radius: 10px;
    }

    .secondary-data h4 {
        color: #fff;
    }

    .secondary-data p {
        outline: 1px solid #E2E4E9;
        padding: 5px 100px 5px 10px;
        color: #fff;
        border-radius: 5px;
        margin-bottom: 10px;
        text-align: left;
    }

    /*  */
    .btn-logout {
        background-color: #505050;
        padding: 8px 20px;
        border-radius: 50px;
    }

    .btn-logout a {
        color: #fff;
        text-decoration: none;
    }

    .btn-logout:hover {
        background-color: red;
    }

    .back-home {
        background-color: #505050;
        color: #fff;
        text-decoration: none;
        border-radius: 50px;
        padding: 8px 20px;
    }

    .back-home:hover {
        background-color: green;
        color: #fff;
    }

    /*  */

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #222222;
    }
</style>

<?php
require_once("c://xampp/htdocs/cafeteria/views/head/footer.php");
?>