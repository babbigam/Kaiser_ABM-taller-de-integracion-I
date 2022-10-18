<?php
try {
    $conte = mysqli_connect("localhost", "root", "", "kaiserabm");  /*la variable $con es donde se almacena la base de datos */
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
</body>
</html>