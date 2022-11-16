<!Doctype html>
<html lang=en>
<head>
    <title>Portfolio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/stylemenu.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
    <div class="sidemenu">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <img src="assets/img/profile.png" style="width:80px;height:80px;"> 
                        </span>
                        <div class="datosusuario">
                            <?php if(!empty($user)): ?>
                            <span class="nombremodulo"> Bienvenido <?= $user['email']; ?></span> 
                            <!-- <a href="assets/js/logout.php">Cerrar sesion</a> -->
                            <?php else: ?>
                            <h2>No sesion existente</h2>
                            <?php header('Location:login.php'); ?>
                            <?php endif; ?>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="Adatospersonales.php">
                        <span class="icon">
                            <img src="assets/img/datospersonales.png" style="width:70px;height:60px;"> 
                        </span>
                        <span class="nombremodulo">Datos personales</span>
                    </a>
                </li>
                <li>
                    <a href="AVacaciones.php">
                        <span class="icon">
                            <img src="assets/img/vacaciones.png" style="width:70px;height:60px;"> 
                        </span>
                        <span class="nombremodulo">Registro de vacaciones</span>
                    </a>
                </li>
                <li>
                    <a href="ARegistrodelicencias.php">
                        <span class="icon">
                            <img src="assets/img/licencias.png" style="width:70px;height:60px;"> 
                        </span>
                        <span class="nombremodulo">Registro de licencias</span>
                    </a>
                </li>
                <li>
                    <a href="ARegistrodecapacitaciones.php">
                        <span class="icon">
                            <img src="assets/img/capacitaciones.png" style="width:70px;height:60px;"> 
                        </span>
                        <span class="nombremodulo">Registro de capacitaciones</span>
                    </a>
                </li>
                <li>
                    <a href="AHistorial.php">
                        <span class="icon">
                            <img src="assets/img/desvinculados.png" style="width:70px;height:60px;"> 
                        </span> 
                        <span class="nombremodulo">Historial de desvinculados</span>
                    </a>
                </li>

                <li>
                    <a href="assets/js/logout.php">
                        <span class="icon">
                            <img src="assets/img/cerrar-sesion.png" style="width:70px;height:60px;"> 
                        </span> 
                        <span class="nombremodulo">Cerrar sesión</span>
                    </a>
                </li>
            </ul>
        </div>
</body>
</html>    