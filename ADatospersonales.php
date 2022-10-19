<?php
  require 'assets/js/sessionstart.php'; 
?>

<?php
    require 'localhost/ConBDPersonal.php';
    $query = "SELECT * FROM `datos_personales`";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/stylemenu.css"> 
    <link rel="stylesheet" href="assets/css/style.css"> 
    <title>Datos personales</title>
</head>
<body>
    <div> <?php require "assets/js/menuaside.php" ?></div>
    <header id="cabeza">
    </header>

    <div class="botonesbusqueda">

    <input type="checkbox" class="checkoption" value="1" onclick="checkedOnClick(this);"> Option1
    <input type="checkbox" class="checkoption" value="2" onclick="checkedOnClick(this);"> Option2 <br>
    <input type="checkbox" class="checkoption" value="3" onclick="checkedOnClick(this);"> Option3
    <input type="checkbox" class="checkoption" value="4" onclick="checkedOnClick(this);"> Option4 <br>
    <input type="checkbox" class="checkoption" value="5" onclick="checkedOnClick(this);"> Option5
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('.checkoption').click(function() {
        $('.checkoption').not(this).prop('checked', false);
    });
    });
    </script>    
    </div>

    <div class="Busqueda">

        <form action="" method= "get">
            <p>RUT</p><input type="text" name="busquedarut"><br>
            <input type="submit" name="enviar" value="Buscar">
        </form>

    </div>
    <div class="tabla">
        <?php
        if(mysqli_num_rows($result) > 0)
        {
        $table = '
        <table border=1>      									
            <tr>
                <th>RUT</th>
                <th>Nombres</th>
                <th>Apellido_paterno </th>
                <th>Apellido_materno </th>
                <th>Email</th>
                <th>Nacionalidad </th>
                <th>Domicilio </th>
                <th>Ciudad</th>
                <th>Comuna</th>
                <th>Celular</th>
                <th>Estado_civil </th>
                <th>Fecha_nacimiento </th>
            </tr>';
        while($row = mysqli_fetch_array($result))
        {
        $table .= '
            <tr>
                <td>'.$row["RUT"].'</td>
                <td>'.$row["Nombres"].'</td>
                <td>'.$row["Apellido_paterno"].'</td>
                <td>'.$row["Apellido_materno"].'</td>
                <td>'.$row["Email"].'</td>
                <td>'.$row["Nacionalidad"].'</td>
                <td>'.$row["Domicilio"].'</td>
                <td>'.$row["Ciudad"].'</td>
                <td>'.$row["Comuna"].'</td>
                <td>'.$row["Celular"].'</td>
                <td>'.$row["Estado_civil"].'</td>
                <td>'.$row["Fecha_nacimiento"].'</td>
            </tr>';}
        $table .= '</table>';
        echo $table;
        }
    ?>
    
    </div>

    <footer id="pie">
    </footer>

</body>
</html>