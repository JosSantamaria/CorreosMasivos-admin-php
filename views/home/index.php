<?php require_once('../../config/conexion.php'); 
    if (isset($_SESSION['usr_nom']) ) {
        
?>

<!doctype html>
<html lang="es">
    <head>
        <?php require_once('../html/MainHead.php'); ?>

        <title> Inicio | Correo Masivos</title>
    </head>

    <body>

        <!-- Start Sidemenu Area -->
        <?php require_once('../html/SideMenu.php'); ?>
          <!-- End Sidemenu Area -->

        <!-- Start Main Content Wrapper Area -->
        <div class="main-content d-flex flex-column">

            <!-- Top Navbar Area -->
            <?php require_once('../html/MainNavBar.php')?>
            <!-- End Top Navbar Area -->
            
            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>Inicio</h1>

                <ol class="breadcrumb">
                    <li class="item"><a href="../home/"><i class='bx bx-home-alt'></i></a></li>

                    <li class="item">Inicio</li>
                </ol>
            </div>
            <!-- End Breadcrumb Area -->

            <div class="flex-grow-1"></div>

            <!-- Start Footer End -->
        <?php require_once('../html/MainFooter.php'); ?>
            
            <!-- End Footer End -->
            
        </div>
        <!-- End Main Content Wrapper Area -->
        
        <?php require_once('../html/MainJs.php'); ?>
        <script src="home.js" ></script>

    </body>
</html>

<?php
}else{
    header("Location:".Conectar::ruta()."index.php");
    exit();
}
?>