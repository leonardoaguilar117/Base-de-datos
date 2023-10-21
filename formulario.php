<?php
    include("conex.php");

    if(isset($_POST["registrar"])){
        if(strlen($_POST["Usuario"]) >= 1 && strlen($_POST["password"]) >= 1){
            $nombre = trim($_POST["Usuario"]);
            $passwords = trim($_POST["password"]); 
            
            $_fetch = "INSERT INTO administrador (Usuario, Contraseña) VALUES ('$nombre', '$passwords')";
            $rest = mysqli_query($conexion, $_fetch);
            
            if($rest){
                ?>
                <h3 style="
                        margin-top: -130px;
                        text-align: center;
                        width: 100%;
                        padding: 12px;
                        background-color: #1e6;
                        color: #fff;
                            ">Loggeado</h3>
                        <a href="mainInstrument.html" style="color: #fff;
                                text-align: center;
                            
                        "> Ingresar datos </a>"
                <?php    
            }else{
                ?>
                <h3 style="text-align: center;
                           margin-top: -130px;
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
            margin-top: -130px;
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
