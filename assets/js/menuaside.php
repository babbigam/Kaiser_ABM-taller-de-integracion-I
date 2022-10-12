<!Doctype html>
<html lang=en>
<head>
    <title>Portfolio</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/stylemenu.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<input type="checkbox" class="checkbox" id="check">
<label class="menuicono" for="check">|||</label>
<div id="sidemenu" class="menu-collap">
    <ul>
        <li><img src="assets/img/iconoperfil.png" alt=""></li>
        <div class="datosusuario">
                    <?php if(!empty($user)): ?>
                    <span>Bienvenido  </span><?= $user['email']; ?> <?= $user['id']; ?>

                    <a href="assets/js/logout.php">Cerrar sesion</a>
                    <?php else: ?>
                    <h2>No sesion existente</h2>
                    <?php header('Location:login.php'); ?>
                    <?php endif; ?>
        </div>
        <li><a href="ADatospersonales.php">Datos personales</a></li>
        <li><a href="AVacaciones.php">Vacaciones</a></li>
        <li><a href="ARegistrodelicencias.php">Registro de licencias</a></li>
        <li><a href="AHistorial.php">Historial</a></li>
        <li><a href="ARegistrodecapacitaciones.php">Registro de capacitaciones</a></li>
    </ul>

</body>
</html>    