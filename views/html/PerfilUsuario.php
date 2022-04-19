<?php require_once('../../config/conexion.php'); 
    if (isset($_SESSION['usr_nom']) ) {
        
?>

<!doctype html>
<html lang="es">
    <head>
        <?php require_once('../html/MainHead.php'); ?>

        <title> Perfil | Correo Masivos </title>
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
                <h1>Dashboard</h1>

                <ol class="breadcrumb">
                    <li class="item"><a href="dashboard-analytics.html">
                        <i class='bx bx-home-alt'></i></a></li>

                    <li class="item">Perfil</li>
                </ol>
                </div>
                <section class="profile-area">
                <div class="profile-header mb-30">
                    <div class="user-profile-images">
                        <img src="..\..\public\assets\img\profile-banner.jpg" class="cover-image" alt="image">

                        <div class="upload-cover-photo">
                            <a href="#"><i class="bx bx-camera"></i> <span>Update Cover Photo</span></a>
                        </div>

                        <div class="profile-image">
                            <img src="..\..\public\assets\img\user1.jpg" alt="image">

                            <div class="upload-profile-photo">
                                <a href="#"><i class="bx bx-camera"></i> <span>Update</span></a>
                            </div>
                        </div>

                        <div class="user-profile-text">
                            <h3>Andro Smith</h3>
                            <span class="d-block">Developer</span>
                        </div>
                    </div>

                    <div class="user-profile-nav">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                                <div class="row">
                                    <!--START Contenido Principal Perfil -->
                                    <!--END Contenido Principal Perfil -->

                                </div>
                            </div>

                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card user-intro-box mb-30">
                                        
                                        </div>

                                        
                                    </div>

                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <div class="card user-settings-box mb-30">
                                    <div class="card-body">
                                        <form>
                                            <h3><i class="bx bx-user-circle"></i> Personal Info</h3>
        
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Primer Nombre</label>
                                                        <input type="text" class="form-control" placeholder="Enter first name">
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Apellidos</label>
                                                        <input type="text" class="form-control" placeholder="Enter last name">
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Trabajo</label>
                                                        <input type="text" class="form-control" placeholder="Enter job name">
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Bio</label>
                                                        <textarea cols="30" rows="5" placeholder="Write something..." class="form-control"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Joined Date</label>
                                                        <input type="text" class="form-control" placeholder="dd/mm/yy">
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <input type="text" class="form-control" placeholder="dd/mm/yy">
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Email Address</label>
                                                        <input type="email" class="form-control" placeholder="Enter email address">
                                                        <span class="form-text text-muted d-block">
                                                            <small>If you want to change email please <a href="#" class="d-inline-block">click</a> here.</small>
                                                        </span>
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Phone Number</label>
                                                        <input type="text" class="form-control" placeholder="Enter phone number">
                                                        <span class="form-text text-muted d-block">
                                                            <small>If you want to change phone number please <a href="#" class="d-inline-block">click</a> here.</small>
                                                        </span>
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" placeholder="Enter password">
                                                        <span class="form-text text-muted d-block">
                                                            <small>If you want to change password please <a href="#" class="d-inline-block">click</a> here.</small>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>

                                            <h3><i class="bx bx-building"></i> Company Info</h3>
        
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter company name">
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Website</label>
                                                        <input type="text" class="form-control" placeholder="Enter website url">
                                                    </div>
                                                </div>
                                            </div>

                                            <h3><i class="bx bx-world"></i> Social</h3>
        
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input type="text" class="form-control" placeholder="Enter facebook url">
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <input type="text" class="form-control" placeholder="Enter twitter url">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Instagram</label>
                                                        <input type="text" class="form-control" placeholder="Enter instagram url">
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Linkedin</label>
                                                        <input type="text" class="form-control" placeholder="Enter linkedin url">
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Pinterest</label>
                                                        <input type="text" class="form-control" placeholder="Enter pinterest url">
                                                    </div>
                                                </div>
        
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>Stack Overflow</label>
                                                        <input type="text" class="form-control" placeholder="Enter stack overflow url">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn-box text-right">
                                                <button type="submit" class="submit-btn"><i class="bx bx-save"></i> Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    
                </div>
            </section>
            
            <!-- End Breadcrumb Area -->

            <div class="flex-grow-1"></div>
            
        </div>
        <!-- End Main Content Wrapper Area -->
        
        <?php require_once('../html/MainJs.php'); ?>
    </body>
    
                <!-- Start Footer End -->
            <?php require_once('../html/MainFooter.php'); ?>
                
                <!-- End Footer End -->
</html>

<?php
}else{
    header("Location:".Conectar::ruta()."index.php");
    exit();
}
?>