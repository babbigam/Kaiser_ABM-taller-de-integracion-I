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
    <link rel="stylesheet" href="assets/css/style2.css"> 
    <title>Datos personales</title>
</head>
<body>
    <div> <?php require "assets/js/menuaside.php" ?></div>
        <!--HEADER-->
        <header>

        </header>

        <!--MAIN CONTENT-->
        <div class="main-content">

            <!--TABLE-->
            <div class="contenedor-datatable">

                <!--TABLE HEADER ELEMENTS-->
                <div class="datatable-header">

                    <!--BUTTONS & CHECKBOXS-->
                    <div class="tools">
                        <ul>
                            <li>
                                <span>
                                    <input type="checkbox">
                                </span>
                            </li>
                            <li>
                                <button>
                                    <span class="material-symbols-outlined"> add_circle </span>
                                </button>
                                
                            </li>
                            <li>
                                <button>
                                    <span class="material-symbols-outlined">edit </span>      
                                </button>                          
                            </li>
                            <li>
                                <button>
                                    <span class="material-symbols-outlined"> delete </span>   
                                </button>    
                            </li>
                            <li>
                                <button>
                                    <span class="material-symbols-outlined"> share </span>
                                </button>
                                
                            </li>
                        </ul>
                    </div>

                    <!--NAV SEARCH BAR-->
                    <div class="navbar-search">
                        <input type="text" name="#" id="#" class="input-search">
                    </div>

                </div>

                <!--DATA TABLE-->
                <table class="datatable">
                    <thead>
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
                    </thead>

                    
                </table>

                <!--TABLE FOOTER ELEMENTS-->
                <div class="datatable-footer">
                    <div class="items-visibles">
                        Muestra
                        <select name="n-entries" id="n-entries" class="n-entries">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                        </select>
                        Personas
                    </div>

                    <div class="pages">
                        <ul>
                            <li>
                                <button>
                                    <span class="active">1</span>
                                </button>
                            </li>
                            <li>
                                <button>2</button>
                            </li>
                            <li>
                                <button>3</button>
                            </li>
                            <li>
                                <button>4</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="filters">

            </div>

            <div class="footer">

            </div>
        </div>

        
    </body>
</html>