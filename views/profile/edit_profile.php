<?php
require_once("../head/head.php");
require_once("../../controller/userController.php");

session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    // Si el usuario no ha iniciado sesión, redirigir a index.php
    header("Location: ../error404.php");
    exit();
}

include("../../config/connect.php");

$obj = new userController();
$user = $obj->show($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en" style="color-scheme: dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar perfíl</title>
</head>

<body style="background-color: #121212">
    <br>
    <div class="mb-3">
        <form action="../../actions/user/update.php" method="post" enctype="multipart/form-data">
            <label style="color: #fff; font-weight: 500;" class="form-label">Name</label>
            <input style="background-color: #1F1F1F; color: #fff; border-color: #4d4d4d;" required type="text" class="form-control" value="<?= $user['nombre'] ?>" name="nombre" placeholder="Ingresa tu nombre" />
            <br>
            <!--  -->
            <label style="color: #fff; font-weight: 500;" class="form-label">Apellido</label>
            <input style="background-color: #1F1F1F; color: #fff; border-color: #4d4d4d;" required type="text" class="form-control" value="<?= $user['apellido'] ?>" name="apellido" placeholder="Ingresa tu apellido" />
            <br>
            <!--  -->
            <label style="color: #fff; font-weight: 500;" class="form-label">Dni</label>
            <input style="background-color: #1F1F1F; color: #fff; border-color: #4d4d4d;" required type="text" class="form-control" value="<?= $user['dni'] ?>" name="dni" pattern="[0-9]{8}" placeholder="Ingresa tu dni" />
            <br>
            <!--  -->
            <label style="color: #fff; font-weight: 500;" class="form-label">Fecha de nacimiento</label>
            <input style="background-color: #1F1F1F; color: #fff; border-color: #4d4d4d;" required type="date" class="form-control" value="<?= $user['fechaNa'] ?>" name="fechaNa" placeholder="Ingresa tu fecha de nacimiento" />
            <br>
            <!--  -->
            <label style="color: #fff; font-weight: 500;" class="form-label">Teléfono</label>
            <input style="background-color: #1F1F1F; color: #fff; border-color: #4d4d4d;" required type="tel" class="form-control" value="<?= $user['telefono'] ?>" name="telefono" pattern="[0-9]{9}" placeholder="Ingresa tu número de teléfono" />
            <br>
            <!--  -->
            <label style="color: #fff; font-weight: 500;" class="form-label">Perfil</label>
            <input style="background-color: #1F1F1F; color: #fff; border-color: #4d4d4d;" type="file" class="form-control" value="<?= $user['perfil'] ?>" name="perfil" placeholder="Ingresa tu foto de perfil" />
            <br>
            <!--  -->
            <div class="d-flex gap-2">
                <a href="show.php?id=<?php echo $_SESSION['user_id']; ?>" class="btn btn-danger"> Cancelar</a>
                <button name="update" type="submit" class="btn btn-success">
                    Confirmar cambios
                </button>
            </div>

        </form>
    </div>


</body>

</html>

<?php require_once("../head/footer.php"); ?>