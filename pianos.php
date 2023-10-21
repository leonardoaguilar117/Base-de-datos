<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginGuitarra.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">

    <title>Ingreso pianos</title>

    <style>
        #piano{
            margin-left: 760px;
        }
        #button{
            margin-left: -70px;
            margin-top: -10px;
        }
    </style>
</head>
<body>
    <h1 id="piano">Pianos</h1>
    <div>
        <form method="POST" class="formulario">
            <div class="form2">
                <input type="text" placeholder="Nombre del instrumento" id="nomGuit" name="NombrePiano"> 
                <input type="text" placeholder="Marca" id="marca" name="Marca">
                <input type="number" placeholder="En Stock" id="stock" min="0" max="15" name="stock">
                <input type="text" placeholder="Precio de compra" name="precioCompra">
            </div>

            <div class="form2">
                <input type="text" placeholder="Precio de venta" name="precioVenta">
                <input type="number" placeholder="Numero proveedor" name="idProveedor" id="idProveedor">
                <input type="number" placeholder="Octavas" min="4" max="8" name="octavas">
                <input type="text" placeholder="Tipo de teclas" name="teclas">
                <input type="text" placeholder="¿Es de cola?" name="cola">
            </div>
            <button type="submit" id="button" name="Enviar">Agregar </button>

        </form>
    </div>
    
    <div >
        <?php
        include("conexionPiano.php");
        ?>
    </div> 


  


</body>
</html>