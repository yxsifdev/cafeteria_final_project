<?php
require_once("c://xampp/htdocs/cafeteria/views/head/head.php");
?>

<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['user_id'])) {
    // Si el usuario no ha iniciado sesión, redirigir a index.php
    header("Location: ../error404.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es" style="color-scheme: dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolce Vita - Inicio</title>
    <link rel="icon" href="images/image.jpg">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
            <img width="100px" src="./images/dolcevita-2.jpeg" alt="">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a style="color: #fff; font-weight: 500" class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #fff; font-weight: 500" class="nav-link active" aria-current="page" href="views/menu/menu.php">Menú</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                        <a href="views/user/login.php" id="btn-iniciar-sesion">Iniciar sesión</a>
                        <a href="views/user/register.php" id="btn-registrarse">Registrarse</a>
                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <!-- Carousel-start -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img height="400px" src="images/bg/bg-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img height="400px" src="images/bg/bg-3.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img height="400px" src="images/bg/bg-4.jpeg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel-end -->

    <!--  -->
    <!--  -->
    <aside style="text-align: center; margin-top: 20px" class="sobre-nosotros">
        <h2 style="color: #916b5e; font-family: Marshena; font-size: 70px">Sobre nosotros</h2>
        <p style="color: #a1a1aa">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Temporibus aspernatur quos nulla ipsam nemo in! Nihil,
            adipisci necessitatibus corporis obcaecati delectus doloremque tempore,
            magni explicabo vero vitae consequuntur veniam tenetur!
        </p>
        <p style="color: #a1a1aa">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Temporibus aspernatur quos nulla ipsam nemo in! Nihil,
            adipisci necessitatibus corporis obcaecati delectus doloremque tempore,
            magni explicabo vero vitae consequuntur veniam tenetur!
        </p>
    </aside>
    <!--  -->
    <br>
    <hr>
    <!--  -->

    <footer>
        <div class="name-shop">
        <img width="200px" src="images/dolcevita-2.jpeg" alt="">
            <div class="redes-shop">
                <a href=""><i class="fi fi-brands-facebook"></i></a>
                <a href=""><i class="fi fi-brands-instagram"></i></a>
            </div>
        </div>
        <div class="menu-options">
            <ul>
                <h5>Tienda</h3>
                    <li><a href="">Sobre Nosotros</a></li>
                    <li><a href="">Menú</a></li>
                    <li><a href="">Términos y condiciones</a></li>
            </ul>
        </div>
    </footer>
</body>
<style>
    /* icons */
    @import url('https://cdn-uicons.flaticon.com/2.1.0/uicons-brands/css/uicons-brands.css');
    /* fonts */
    @import url(styles/fonts/font.css);
    @import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    #shop-name {
        font-family: Marshena;
        color: #916b5e;
        font-size: 60px;
        padding-right: 10px;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #121212;
        color: #fff;
    }

    /* header-start */

    /* header-end */

    /* Carousel-start */

    .carousel-item img {
        border-radius: 10px;
    }

    #btn-iniciar-sesion {
        background-color: none;
        padding: 7px 20px;
        color: #000;
        border-radius: 10px;
        border: 1px solid #916b5e;
        text-decoration: none;
        color: #fff;
        background-color: #916b5e;
        transition: .3s;
    }

    #btn-registrarse {
        background-color: #916b5e;
        margin-left: 10px;
        padding: 7px 20px;
        color: #fff;
        border-radius: 10px;
        border: 1px solid #916b5e;
        text-decoration: none;
        transition: .3s;
    }

    /* Carousel-end */

    .user-sesion a:hover {
        background-color: #916b5e;
        color: #fff;
    }

    .user-sesion a:active {
        background-color: #916b5ea1;
    }

    .perfil-sesion a:hover {
        color: #fff;
        background-color: #916b5e;
    }

    .perfil-sesion a:active {
        background-color: #916b5ea1;
    }

    .cerrar-sesion a:hover {
        background-color: #916b5e;
        color: #fff;
    }

    .cerrar-sesion a:active {
        background-color: #916b5ea1;
    }


    footer {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        background-color: #121212;
        margin-top: 30px;
        align-items: center;
        /* gap: 35rem; */
        padding: 15px 0;
        border-radius: 5px;
    }

    footer .name-shop {
        display: flex;
        align-items: center;
        flex-direction: column;
    }

    footer .name-shop h1 {
        font-family: Marshena;
        color: #916b5e;
        font-size: 75px;
    }

    footer .name-shop .redes-shop {
        display: flex;
        justify-content: center;
        gap: 30px;
    }

    footer .name-shop .redes-shop a {
        transition: .3s;
        text-decoration: none;
    }

    footer .menu-options a:hover {
        color: #916b5e
    }


    footer .name-shop .redes-shop i {
        color: #916b5e;
        font-size: 30px;
    }

    footer .menu-options {
        display: flex;
        /* justify-content: center; */
        flex-wrap: wrap;
    }

    footer .menu-options h5 {
        color: #916b5e;
    }

    footer .menu-options a {
        text-decoration: none;
        color: #fff;
    }

    footer .menu-options li {
        list-style: none;
    }

    footer .name-shop .redes-shop a:hover {
        transform: translateY(-5px);
    }

    @media (max-width: 768px) {
        footer {
            gap: 0;
        }
    }
</style>

</html>

<?php
require_once("c://xampp/htdocs/cafeteria/views/head/footer.php");
?>