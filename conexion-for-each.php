<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        echo "Conexion a base de datos workbench que se llama ajax con la tabla clientes";
        $servername ="localhost";
        $database = "ajax";
        $username = "root";
        $password = "admin";
        
        $conn = mysqli_connect($servername,$username,$password,$database);
        
        if(!$conn){
            die("Connection failed: ". mysqli_connect_error());
        }
        
        echo "Connected successfully";
        
        $result = mysqli_query($conn, "SELECT * FROM clientes");
        
        
        foreach($result as $r){
            echo "<br>".$r['Nombre'];
        }
    
        mysqli_close($conn); 
    
       
        ?>
        
    </body>
</html>
