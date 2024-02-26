<?php
require_once("c://xampp/htdocs/cafeteria/views/head/head.php");

session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: ../menu/shop.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es" style="color-scheme: dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolce Vita - Tienda</title>
</head>

<body>
<header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" id="shop-name">Dolce Vita</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a style="color: #fff; font-weight: 500" class="nav-link active" aria-current="page" href="../../index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                        <a style="color: #fff; font-weight: 500" class="nav-link active" aria-current="page" href="../menu/menu.php">Menú</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                        <a href="../user/login.php" id="btn-iniciar-sesion">Iniciar sesión</a>
                        <a href="../user/register.php" id="btn-registrarse">Registrarse</a>
                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                        <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- ----------------------------- -->

    <div class="alert alert-warning" role="alert">
        Adquiere los productos para que estos puedan mostrarse en tu <strong>carrito</strong> de <strong>compras</strong>.
    </div>

    <br>
    <h1 style="text-align: center; color: #916b5e;">Bebidas</h1>
    <hr>

    <section class="bebidas-shop-list">
        <div class="bebidas-card">
            <img src="../../images/bebidas/MANJAR_BLANCO_FRAPP_V2.png" alt="">
            <div class="bebidas-content">
                <h1>Capuccino</h1>
                <p>s/15.00</p>
                <a href="">Añadir</a>
            </div>
        </div>
        <div class="bebidas-card">
            <img src="../../images/bebidas/MANJAR_BLANCO_FRAPP_V2.png" alt="">
            <div class="bebidas-content">
                <h1>Capuccino</h1>
                <p>s/15.00</p>
                <a href="">Añadir</a>
            </div>
        </div>
        <div class="bebidas-card">
            <img src="../../images/bebidas/MANJAR_BLANCO_FRAPP_V2.png" alt="">
            <div class="bebidas-content">
                <h1>Capuccino</h1>
                <p>s/15.00</p>
                <a href="">Añadir</a>
            </div>
        </div>
        <div class="bebidas-card">
            <img src="../../images/bebidas/MANJAR_BLANCO_FRAPP_V2.png" alt="">
            <div class="bebidas-content">
                <h1>Capuccino</h1>
                <p>s/15.00</p>
                <a href="">Añadir</a>
            </div>
        </div>
        <div class="bebidas-card">
            <img src="../../images/bebidas/MANJAR_BLANCO_FRAPP_V2.png" alt="">
            <div class="bebidas-content">
                <h1>Capuccino</h1>
                <p>s/15.00</p>
                <a href="">Añadir</a>
            </div>
        </div>
        <div class="bebidas-card">
            <img src="../../images/bebidas/MANJAR_BLANCO_FRAPP_V2.png" alt="">
            <div class="bebidas-content">
                <h1>Capuccino</h1>
                <p>s/15.00</p>
                <a href="">Añadir</a>
            </div>
        </div>
    </section>

    <br>
    <br>
    <h1 style="text-align: center; color: #916b5e;">Alimentos</h1>
    <hr>

    <section class="alimentos-shop-list">
        <div class="alimentos-card">
            <img src="../../images/alimentos/PACK_COFFEE_MIXTO_V3.png" alt="">
            <div class="alimentos-content">
                <h1>Postres</h1>
                <p>s/23.40</p>
                <a href="">Añadir</a>
            </div>
        </div>
        <div class="alimentos-card">
            <img src="../../images/alimentos/PACK_COFFEE_MIXTO_V3.png" alt="">
            <div class="alimentos-content">
                <h1>Postres</h1>
                <p>s/23.40</p>
                <a href="">Añadir</a>
            </div>
        </div>
        <div class="alimentos-card">
            <img src="../../images/alimentos/PACK_COFFEE_MIXTO_V3.png" alt="">
            <div class="alimentos-content">
                <h1>Postres</h1>
                <p>s/23.40</p>
                <a href="">Añadir</a>
            </div>
        </div>
        <div class="alimentos-card">
            <img src="../../images/alimentos/PACK_COFFEE_MIXTO_V3.png" alt="">
            <div class="alimentos-content">
                <h1>Postres</h1>
                <p>s/23.40</p>
                <a href="">Añadir</a>
            </div>
        </div>
        <div class="alimentos-card">
            <img src="../../images/alimentos/PACK_COFFEE_MIXTO_V3.png" alt="">
            <div class="alimentos-content">
                <h1>Postres</h1>
                <p>s/23.40</p>
                <a href="">Añadir</a>
            </div>
        </div>
        <div class="alimentos-card">
            <img src="../../images/alimentos/PACK_COFFEE_MIXTO_V3.png" alt="">
            <div class="alimentos-content">
                <h1>Postres</h1>
                <p>s/23.40</p>
                <a href="">Añadir</a>
            </div>
        </div>
    </section>


    <!-- ----------------------------- -->



    <footer>
        <div class="name-shop">
            <h1>Dolce Vita</h1>
            <div class="redes-shop">
                <a href=""><i class="fi fi-brands-facebook"></i></a>
                <a href=""><i class="fi fi-brands-instagram"></i></a>
            </div>
        </div>
        <div class="menu-options">
            <ul>
                <h5>Tienda</h3>
                <li><a href="../user/home.php">Sobre Nosotros</a></li>
                    <li><a href="shop.php">Menú</a></li>
                    <li><a href="">Términos y condiciones</a></li>
            </ul>
        </div>
    </footer>
</body>
<style>
    /* icons */
    @import url('https://cdn-uicons.flaticon.com/2.1.0/uicons-brands/css/uicons-brands.css');
    /* fonts */
    @import url(../../styles/fonts/font.css);
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

    #btn-iniciar-sesion {
        background-color: none;
        padding: 7px 20px;
        color: #000;
        border-radius: 10px;
        background-color: #916b5e;
        border: 1px solid #916b5e;
        color: #fff;
        text-decoration: none;
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


    body {
        font-family: 'Poppins', sans-serif;
        background-color: #121212;
        color: #fff
    }

    /* header-start */

    /* header-end */

    /* Carousel-start */

    /* Carousel-end */

    /* alert-start */
    .alert {
        text-align: center;
    }

    /* ---------------- */
    .bebidas-shop-list {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 50px;
    }

    .bebidas-card {
        display: flex;
        align-items: center;
        width: 500px;
        gap: 30px;
        justify-content: center;
    }

    .bebidas-card img {
        width: 200px;
        height: 200px;
    }

    .bebidas-card .bebidas-content h1 {
        font-size: 25px;
        font-weight: 600;
        color: #fff;
    }

    .bebidas-card .bebidas-content p {
        color: #a1a1aa;
    }

    .bebidas-card .bebidas-content a {
        background-color: #916b5e;
        padding: 5px 10px;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
    }

    /*  */

    .alimentos-shop-list {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 50px;
    }

    .alimentos-card {
        display: flex;
        align-items: center;
        width: 500px;
        gap: 30px;
        justify-content: center;
    }

    .alimentos-card img {
        width: 200px;
        height: 200px;
    }

    .alimentos-card .alimentos-content h1 {
        font-size: 25px;
        font-weight: 600;
        color: #fff;
    }

    .alimentos-card .alimentos-content p {
        color: #a1a1aa;
    }

    .alimentos-card .alimentos-content a {
        background-color: #916b5e;
        padding: 5px 10px;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
    }

    /* ---------------- */

    footer {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        background-color: #1f1f1f;
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

    footer .name-shop .redes-shop i {
        color: #916b5e;
        font-size: 30px;
    }

    footer .menu-options {
        display: flex;
        /* justify-content: center; */
        flex-wrap: wrap;
    }

    footer .menu-options a {
        text-decoration: none;
        color: #fff;
    }
    
    footer h5 {
        color: #916b5e;
    }

    footer .menu-options a:hover {
        color: #916b5e
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