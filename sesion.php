<!DOCTYPE html>
<html>
<?php
define('TITLE', 'Inicio');
?>

<head>
    <title>About - <?php echo TITLE ?></title>
    <?php include 'head.php'; ?>
</head>

<body>
    <?php include 'header.php' ?>
    <header class="masthead" style="background-image:url('assets/img/home-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>Inició de sesión</h1><span class="subheading">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
    <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <p>Introducción pendiente...</p>
                    <div class="Login">
                        <form method="POST" action="main.php">
                            <table>
                                <tr>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls"><label>Usuario</label>
                                            <input class="form-control" type="username" id="txtusrNomUsr" name="txtusrNomUsr" placeholder="Ingrese usuario">
                                            <small class="form-text text-danger help-block"></small>
                                        </div>
                                    </div>
                                <tr>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls"><label>Contraseña</label>
                                            <input class="form-control" type="password" id="txtusrContrasena" name="txtusrContrasena" placeholder="Ingrese contraseña">
                                            <small class="form-text text-danger help-block"></small>
                                        </div>
                                    </div>
                                </tr>
                            </table>
                            <table>               
                                <tr><br>
                                    <td colspan="2">
                                        <div id="success"></div>
                                    <td>
                                        <div class="form-group">
                                            <button class="btn btn-primary" id="sendMessageButton" type="submit">Iniciar sesión</button>
                                        </div>
                                    </td>
                                    <div id="cancel"></div>                            
                                    <td>
                                        <div class="form-group">
                                            <a href="registro.php">
                                                <button class="btn btn-secondary" type="button" value="Register">Registrate</button>
                                            </a>
                                        </div>
                                    </td>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
       
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>