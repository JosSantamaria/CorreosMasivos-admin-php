<nav class="navbar top-navbar navbar-expand">
                <div class="collapse navbar-collapse" id="navbarSupportContent">
                    <div class="responsive-burger-menu d-block d-lg-none">
                        <span class="top-bar"></span>
                        <span class="middle-bar"></span>
                        <span class="bottom-bar"></span>
                    </div>
                    
                    

                    <form class="nav-search-form d-none ml-auto d-md-block">
                        <!-- <label><i class='bx bx-search'></i></label>
                        <input type="text" class="form-control" placeholder="Buscar Aqui.."> -->
                    </form>

                    <ul class="navbar-nav right-nav align-items-center">
                        <li class="nav-item">
                            <a class="nav-link bx-fullscreen-btn" id="fullscreen-button">
                                <i class="bx bx-fullscreen"></i>
                            </a>
                        </li>
                        
                        <li class="nav-item dropdown profile-nav-item">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="menu-profile">
                                    <span class="name">Hola! <?php echo $_SESSION['usr_nom']; ?> </span>
                                    <img src="..\..\public\assets\img\70x70.jpg" class="rounded-circle" alt="image">
                                </div>
                            </a>

                            <div class="dropdown-menu">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="..\..\public\assets\img\70x70.jpg" class="rounded-circle" alt="image">
                                    </div>

                                    <div class="info text-center">
                                        <span class="name"><?php echo $_SESSION['usr_nom']." ".$_SESSION['usr_ape_p']; ?></span>
                                        <p class="mb-3 email"><?php echo $_SESSION['usr_correo']; ?></p>
                                    </div>
                                </div>

                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="../html/PerfilUsuario.php" class="nav-link">
                                                <i class='bx bx-user'></i> <span>Perfil</span>
                                            </a>
                                        </li>
<!-- 
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class='bx bx-envelope'></i> <span>Mi Bandeja de Entrada</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class='bx bx-edit-alt'></i> <span>Editar Perfil</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <i class='bx bx-cog'></i> <span>Ajustes</span>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>

                                <div class="dropdown-footer">
                                    <ul class="profile-nav">
                                        <li class="nav-item">
                                            <a href="../html/logout.php" class="nav-link">
                                                <i class='bx bx-log-out'></i> <span>Cerrar Session</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>