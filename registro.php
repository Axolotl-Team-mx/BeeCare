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
                        <h1>Inicio de sesión</h1><span class="subheading">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <p>Introducción pendiente...</p>
                <h5> Nuevo usuario </h5>
                <div class="Registro">
                    <form  method="POST" action="insertDatUsrs.php">
                        <table>
                            <tr>
                                <td> Nombre(s): </td>
                                <td>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls"><label>Nombre</label>
                                            <input class="form-control" type="text" id="txtusrNombre" name="txtusrNombre" required="" placeholder="Ingrese nombre">
                                            <small class="form-text text-danger help-block"></small>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Apellido(s): </td>
                                <td>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls"><label>Apellidos</label>
                                            <input class="form-control" type="text" id="txtusrApellidos" name="txtusrApellidos" required="" placeholder="Ingrese apellidos">
                                            <small class="form-text text-danger help-block"></small>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Correo electrónico: </td>
                                <td>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls"><label>Correo electrónico</label>
                                            <input class="form-control" type="email" id="txtusrCorreo" name="txtusrCorreo" required="" placeholder="Ingrese Correo electrónico">
                                            <small class="form-text text-danger help-block"></small>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Fecha de nacimiento: </td>
                                <td>
                                    <div class="list-inline-item">
                                        <input class="form-control list-inline-item" name="DateusrFecha_Nacimiento" type="date">
                                        <small class="form-text text-danger help-block"></small>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Sexo: </td>
                                <td>
                                    <div class="list-inline-item">
                                        <input type="radio" id="M" name="rbtnGender" value="M" require><label for="M"> Masculino </label>
                                        <input type="radio" id="F" name="rbtnGender" value="F" require><label for="F"> Femenino </label>
                                        <input type="radio" id="O" name="rbtnGender" value="O" require><label for="O"> Otro </label>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <table>
                            <tr>
                                <td> Nombre del usuario: </td>
                                <td>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls"><label>Usuario</label>
                                            <input class="form-control" type="username" id="txtusrNomUsr" name="txtusrNomUsr" required="" placeholder="Ingrese usuario">
                                            <small class="form-text text-danger help-block"></small>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Contraseña: </td>
                                <td>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls"><label>Contraseña</label>
                                            <input class="form-control" type="password" id="txtusrContrasena" name="txtusrContrasena" required="" placeholder="Ingrese contraseña">
                                            <small class="form-text text-danger help-block"></small>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td> Repetir contraseña: </td>
                                <td>
                                    <div class="control-group">
                                        <div class="form-group floating-label-form-group controls"><label>Repeat password</label>
                                            <input class="form-control" type="password" id="txtusrContrasena2" required="" placeholder="Ingrese contraseña">
                                            <small class="form-text text-danger help-block"></small>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <br>
                        <label><input type="checkbox" value="chkboxTerms"> Acepto los términos y condiciones.</label>
                        <br><br>
                        <table>
                            <tr>
                                <td colspan="2">
                                    <div id="success"></div>
                                <td>
                                    <div class="form-group"><button class="btn btn-primary" id="sendMessageButton" type="submit">Aceptar</button></div>
                                </td>
                                <a href="index.php">
                                    <div id="cancel"></div>
                                    <td>
                                        <a href="sesion.php">
                                            <div class="form-group"><button class="btn btn-secondary" id="sendMessageButton" type="button">Cancelar</button>
                                        </a>
                                    </td>
                                </a>
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