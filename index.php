<?php
    $namelees=$_REQUEST["name"];
    $pass=$_REQUEST["pass1"];
    
    if (isset($_REQUEST["pass1"]) && strlen($_REQUEST["pass1"])<7){
        echo "Sal de aqui!";
    }else{
        
        $enlace= mysqli_connect('localhost', 'root', 'mysql2017', 'database1', 3306);
        $cadena="SELECT * FROM usuario WHERE nombre= '".$namelees."' AND contrasena='".$pass."'";
        $resultado= mysqli_query($enlace, $cadena);
        
        if($resultado){
            
            $total= mysqli_num_rows($resultado);

            if($total>0){

                echo "Bienvenido!";
            }else{

                echo "Sal de aqui!";
            }



        }

        }
   


