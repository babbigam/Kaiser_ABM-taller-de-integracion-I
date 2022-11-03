<?php
  require 'assets/js/sessionstart.php'; 
?>

<?php
    require 'localhost/ConBDPersonal.php';
    $query = "SELECT * FROM `historial_desvinculados`";
    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/stylemenu.css"> 
    <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,-25" />
    <title>Historial desvinculados</title>
</head>
<body>
        <div> <?php require "assets/js/menuaside.php" ?></div>
        <!--MAIN CONTENT-->
        <div class="main-content">

            <!--HEADER-->
            <header>
            </header>
        <div class="botonesbusqueda">
            <input type="checkbox" class="checkoption" value="1" onclick="checkedOnClick(this);"> <span>RUT                </span>          
            <input type="checkbox" class="checkoption" value="2" onclick="checkedOnClick(this);"> <span>Estado Civil       </span><br>
            <input type="checkbox" class="checkoption" value="3" onclick="checkedOnClick(this);"> <span>Nacionalidad       </span>
            <input type="checkbox" class="checkoption" value="4" onclick="checkedOnClick(this);"> <span>Fecha de nacimiento</span><br>
            <input type="checkbox" class="checkoption" value="5" onclick="checkedOnClick(this);"> <span>Apellido paterno   </span>
            <input type="checkbox" class="checkoption" value="6" onclick="checkedOnClick(this);"> <span>Comuna             </span><br>
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
            <p>ingrese el RUT:</p><input type="text" name="busquedarut">
            <input type="submit" name="enviar" value="Buscar">
        </form>
    </div>
            <!--TABLE-->
            <div class="contenedor-datatable">

                <!--TABLE HEADER ELEMENTS-->
                <div class="datatable-header">

                    <!--BUTTONS & CHECKBOXS-->
                    <div class="tools">
                        <ul>
                            <li>
                                <button>
                                    <span class="material-symbols-outlined"> Añadir </span>
                                </button>
                                
                            </li>
                            <li>
                                <button>
                                    <span class="material-symbols-outlined"> editar </span>      
                                </button>                          
                            </li>
                            <li>
                                <button>
                                    <span class="material-symbols-outlined"> borrar </span>   
                                </button>    
                            </li>>
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
                                    <th>ID_desvinculado</th>
                                    <th>Nombres</th>
                                    <th>Apellido_paterno</th>
                                    <th>Apellido_materno</th>
                                    <th>Local</th>
                                    <th>Cargo </th>
                                    <th>Razon </th>
                                    <th>RUT</th>
                                </tr>';
                            while($row = mysqli_fetch_array($result))
                            {
                            $table .= '
                                <tr>
                                    <td>'.$row["ID_desvinculado"].'</td>
                                    <td>'.$row["Nombres"].'</td>
                                    <td>'.$row["Apellido_paterno"].'</td>
                                    <td>'.$row["Apellido_materno"].'</td>
                                    <td>'.$row["Local"].'</td>
                                    <td>'.$row["Cargo"].'</td>
                                    <td>'.$row["Razon"].'</td>
                                    <td>'.$row["RUT"].'</td>
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