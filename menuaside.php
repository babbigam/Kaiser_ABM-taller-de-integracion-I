<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylemenu.css"> 
    <title>Barra aside</title>
</head>
<body>
<input type="checkbox" class="checkbox" id="check">
<label class="menuicono" for="check">|||</label>
<div id="sidemenu" class="menu-collap">
    <ul>
        <li><img src="assets/img/iconoperfil.png" alt=""></li>
        <div class="menuusuario"><?php if(!empty($user)): ?>
                    <a>Bienvenido.</a> <?= $user['email']; ?>
                    <a href="logout.php">Logout</a>
                    <?php else: ?>
                    <h2>Please Login</h2>
                    <a href="login.php">Login</a>
                    <?php endif; ?>
                    </div>
        <li><a href="Datos personales.html">Datos personales</a></li>
        <li><a href="Vacaciones.html">Vacaciones</a></li>
        <li><a href="Registro de licencias.html">Registro de licencias</a></li>
        <li><a href="Historial.html">Historial</a></li>
        <li><a href="Registro de capacitaciones.html">Registro de capacitaciones</a></li>
    </ul>
</body>
</html>