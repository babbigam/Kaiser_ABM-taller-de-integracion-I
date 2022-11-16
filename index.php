<!DOCTYPE html>
<!--idioma predeterminado-->
<html lang="es">
<head>
    <!--codificación de caracteres más común en la red-->
    <meta charset="UTF-8">
    <!--compatibilidad del navegador donde se esta consultando la página web-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--viewport: proporciona al navegador instrucciones sobre cómo controlar las dimensiones y la escala de la página-->
    <!--width=device-width establece el ancho de la ventana gráfica al ancho del dispositivo,
        initial-scale=1 establece el nivel de zoom inicial cuando el usuario visita la página.-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--REL se usa para definir la relación entre el archivo enlazado y el documento HTML
        REL=StyleSheet especifica un estilo persistente o preferido -->
    <link rel="stylesheet" href="assets/css/styleindex.css">
    <!--icono de la pagina-->
    <link rel="shortcut icon" href="assets/img/logo-pagina.jpg" type="image/x-icon">
    <!--titulo de la pagina-->
    <title>K.A.B.M.</title>
</head>
<!--cuerpo de la pagina-->
<body>
    <!--Menu-->
    <nav id="navegador">
        <ul class="menu">
            <li><img>Logo</li>
            <li><a href="#cabeza">Inicio</a></li>
            <li><a href="#cuerpo">¿Quienes Somos?</a></li>
            <li><a href="#p2">Trabaje con Nosotros</a></li>
            <li><a href="login.php">Usuario</a></li>
        </ul>
    </nav>
    <div class="contenedor">
        <header id="cabeza">
            <!--Encabezado-->   
            <img src="assets/img/imagen-inicio.png" alt="">   
            <h1 class="nombre">Kaiser Administrative Business Management</h1>
        </header>
    </div>
    <main id="cuerpo">
        <!--Principal 1-->
        <div id="p1">
        <h3 class="informacion-c">Informacion sobre la compañia</h3>
        <h3 class="m1">Marca 1</h3>
        <h3 class="m2">Marca 2</h3>
        </div>
        <!--Principal 2-->
        <div id="p2">
        <h3 class="informacion-r">Informacion y Requisitos</h3>
        <h3 class="formulario">Formulario de Datos del Usuario</h3>
        </div>
    </main>
    <footer id="pie">
        <div class="contenedor-2">
        <!--Pie de página-->
        <h4 class="conocer">Conocenos</h4>
        <h4 class="sucursales">Sucursales</h4>
        <h4 class="correo">Correo</h4>
        <h4 class="ter-con">Termino y Condiciones</h4>
        <h4 class="pol-pri">Politica de Privacidad</h4>
        <h4 class="direccion">Direccion</h4>
        <h2 class="derechos">&copy; K.A.B.M.</h2>
        </div>
    </footer>
</body>
</html>