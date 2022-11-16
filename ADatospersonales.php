<?php
  require 'assets/js/sessionstart.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/stylemenu.css"> 
    <link rel="stylesheet" href="assets/css/style.css"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,-25" />
    <title>Datos personales</title>
</head>
<div> <?php require "assets/js/menuaside.php" ?></div>
<body>
    <div class="main-content">
        <div class="contenedor-datatable">
            <!--TABLE HEADER ELEMENTS-->
            <div class="datatable-header">
                <!--CHECKBOXS-->
                <div class="botonesbusqueda">
                    <input type="checkbox" class="checkoption" id="1" onclick="checkedOnClick(this);"><span>RUT                 </span><br>         
                    <input type="checkbox" class="checkoption" id="2" onclick="checkedOnClick(this);"><span>Estado Civil        </span><br>
                    <input type="checkbox" class="checkoption" id="3" onclick="checkedOnClick(this);"><span>Nacionalidad        </span><br>
                    <input type="checkbox" class="checkoption" id="4" onclick="checkedOnClick(this);"><span>Fecha de nacimiento </span><br>
                    <input type="checkbox" class="checkoption" id="5" onclick="checkedOnClick(this);"><span>Apellido paterno    </span><br>
                    <input type="checkbox" class="checkoption" id="6" onclick="checkedOnClick(this);"><span>Comuna              </span><br>
                </div>

                        <div class="Busqueda">
                            <div class="busquedarut" style="display: none">
                                <form action="" method= "get">
                                <p>ingrese el RUT:</p><input type="text" name="busqueda1">
                                <input type="submit" name="enviar1" value="Buscar">
                            </form>
                        </div>

                        <div class="busquedarestado" style="display: none">
                                <form action="" method= "get">
                                    <p>ingrese el Estado Civil:</p><input type="text" name="busqueda2">
                                    <input type="submit" name="enviar2" value="Buscar">
                            </form>
                        </div>
                        <div class="busquedanacionalidad" style="display: none">
                            <form action="" method= "get">
                                <p>ingrese la nacionalidad:</p><input type="text" name="busqueda3">
                                <input type="submit" name="enviar3" value="Buscar">
                            </form>
                        </div>
                        <div class="busquedafechanaci" style="display: none">
                            <form action="" method= "get">
                                <p>ingrese la fecha de nacimiento:</p><input type="text" name="busqueda4">
                                <input type="submit" name="enviar4" value="Buscar">
                            </form>
                        </div>
                        <div class="busquedaapellidopaterno" style="display: none">
                            <form action="" method= "get">
                                <p>ingrese el apellido paterno:</p><input type="text" name="busqueda5">
                                <input type="submit" name="enviar5" value="Buscar">
                            </form>
                        </div>
                        <div class="busquedacomuna" style="display: none">
                            <form action="" method= "get">
                                <p>ingrese la comuna:</p><input type="text" name="busqueda6">
                                <input type="submit" name="enviar6" value="Buscar">
                            </form>
                        </div>
                    </div>
                </div>
                <!--DATA TABLE-->
                <table class="datatable">

                    <?php
                        require 'localhost/ConBDPersonal.php';
                            $query = "SELECT * FROM `datos_personales`";
                            $result = mysqli_query($conn, $query);
                        require 'localhost/closeBDPersonal.php';
                    ?>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                    $('.checkoption').click(function() {
                    $('.checkoption').not(this).prop('checked', false);
                    });
                });
        </script>    
        <script>
            $(document).ready(function(){
            $("#1").click(function(){
                $(".busquedarut").show();
                $(".busquedarestado").hide();
                $(".busquedanacionalidad").hide();
                $(".busquedafechanaci").hide();
                $(".busquedaapellidopaterno").hide();
                $(".busquedacomuna").hide();
            });

            $("#2").click(function(){
                $(".busquedarestado").show();
                $(".busquedarut").hide();
                $(".busquedanacionalidad").hide();
                $(".busquedafechanaci").hide();
                $(".busquedaapellidopaterno").hide();
                $(".busquedacomuna").hide();
            });
            $("#3").click(function(){
                $(".busquedanacionalidad").show();
                $(".busquedarut").hide();
                $(".busquedarestado").hide();
                $(".busquedafechanaci").hide();
                $(".busquedaapellidopaterno").hide();
                $(".busquedacomuna").hide();
            });
            $("#4").click(function(){
                $(".busquedafechanaci").show();
                $(".busquedarut").hide();
                $(".busquedanacionalidad").hide();
                $(".busquedarestado").hide();
                $(".busquedaapellidopaterno").hide();
                $(".busquedacomuna").hide();
            });
            $("#5").click(function(){
                $(".busquedaapellidopaterno").show();
                $(".busquedarut").hide();
                $(".busquedanacionalidad").hide();
                $(".busquedafechanaci").hide();
                $(".busquedarestado").hide();
                $(".busquedacomuna").hide();
            });
            $("#6").click(function(){
                $(".busquedacomuna").show();
                $(".busquedarut").hide();
                $(".busquedanacionalidad").hide();
                $(".busquedafechanaci").hide();
                $(".busquedaapellidopaterno").hide();
                $(".busquedarestado").hide();
            });
            });
        </script>
    </body>
</html>