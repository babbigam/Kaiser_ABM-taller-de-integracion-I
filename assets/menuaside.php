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
        <li><a href="Datos personales.php">Datos personales</a></li>
        <li><a href="Vacaciones.php">Vacaciones</a></li>
        <li><a href="Registro de licencias.php">Registro de licencias</a></li>
        <li><a href="Historial.php">Historial</a></li>
        <li><a href="Registro de capacitaciones.php">Registro de capacitaciones</a></li>
    </ul>