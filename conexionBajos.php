<?php
include("conex.php");
if (isset($_POST["Enviar"])) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    if (strlen($_POST["NombreBajo"]) >= 1 && strlen($_POST["Marca"]) >= 1) {
        
        $nombreBajo = $_POST["NombreBajo"];
        $marca = trim($_POST["Marca"]);
        $stock = trim($_POST["stock"]);
        $precioCompra = trim($_POST["precioCompra"]);
        $precioVenta = trim($_POST["precioVenta"]);
        $tipoCuerdas = trim($_POST["cuerdas"]);
        $pastillas = trim($_POST["pastillas"]);
        $madera = trim($_POST["madera"]);
        $id_proveedor = trim($_POST["idProveedor"]);
        
        $query1 = "INSERT INTO bajos(numCuerdas, Pastillas,Madera) 
        VALUES ('$tipoCuerdas','$pastillas','$madera')";
        
        $query2 = "INSERT INTO inventarioinstrumentos(Nombre, Marca, Stock, idProveedor, PrecioCompra, PrecioVenta) 
        VALUES ('$nombreBajo','$marca','$stock','$id_proveedor','$precioCompra','$precioVenta')";

        $resultA = mysqli_query($conexion, $query1);
        $resultB = mysqli_query($conexion, $query2);

        if($resultA && $resultB){
            ?>
            <h3 style="
                    margin-top: 130px;
                    text-align: center;
                    width: 100%;
                    padding: 12px;
                    background-color: #1e6;
                    color: #fff;
                        ">Agregado</h3>
                    "
            <?php    
        }else{
            ?>
            <h3 style="text-align: center;
                       margin-top: 130px;
                       width: 100%;
                       padding: 12px;
                       background-color: #a22;
                       color: #fff;
                    ">Error</h3>
            <?php
        }
    }else{
        ?>
        <h3 style="text-align: center;
        margin-top: 130px;
                       width: 98%;
                       padding: 12px;
                       background-color: #a22;
                       color: #fff;
                      margin-left: 7px;
        
        ">Rellena los campos</h3>

        
        <?php
    } 
            
        }    
    
?>