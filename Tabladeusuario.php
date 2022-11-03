<?php
try {
    $conte = mysqli_connect("localhost", "root", "", "kaiserabm");  /*la variable $conte es donde se almacena la base de datos */
  } catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage()); /*finaliza el proceso y muestra el error */
  }

$queryt = "SELECT * FROM `users`";
$resultt = mysqli_query($conte, $queryt);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styletablausuario.css">
    <title>Tabla de usuario</title>
</head>
<body>
    <div class="tabla-usuario">
        <?php
            if(mysqli_num_rows($resultt) > 0)
            {
            $tableu = '
            <table border=1>      									
                <tr>
                    <th>id</th>
                    <th>email</th>
                    <th>cargo</th>
                </tr>';
            while($row = mysqli_fetch_array($resultt))
            {
            $tableu .= '
                <tr>
                    <td>'.$row["id"].'</td>
                    <td>'.$row["email"].'</td>
                    <td>'.$row["cargo"].'</td>
                </tr>';}
            $tableu .= '</table>';
            echo $tableu;
            }
        ?>
    </div>
    <div class="botones">
        <span><a href="Editarcontraseña.php" value="botom"><input type="submit" name="submit" value="Editar contraseña"/></a></span>
        <span><a href="Signup.php" value="botom"><input type="submit" name="submit" value="craer usuario"/></a></span>
        <span><a href="Eliminarusuario.php" value="botom"><input type="submit" name="submit" value="Eliminar usuario"/></a></span>
    </div>
</body>
</html>