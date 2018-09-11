<?php
    
    try{
        
        $base=new PDO("mysql:host=localhost; dbname=BDPruebas" , "root", "");
        
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql="SELECT * FROM Usuario WHERE usuario= :usuario AND contrasena= :contrasena";
        
        $resultado=$base->prepare($sql);
        
        $username=htmlentities(addslashes($_POST["usuario"]));
        
        $password=htmlentities(addslashes($_POST["contrasena"]));
        
        $resultado->bindValue(":usuario", $username);
        
        $resultado->bindValue(":contrasena", $password);
        
        $resultado->execute();
        
        $numero_registro=$resultado->rowCount();
        
        if ($username== null || $password == null){

        echo '<span>Por favor complete todos los campos.</span>';

        }if($numero_registro!=0){

            header("location: ../Vista/principalMenu.php");
            
        }else{
            
            header("location: ../Vista/index.php");
        }
        
 
    }catch(Exception $e){
        
        die("Error: " . $e->getMessage());
    }

?>