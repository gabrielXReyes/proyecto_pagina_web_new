<?php
     include("php/conexion.php");
     $nombre=$_REQUEST['registro1'];
     $correo=$_REQUEST['registro2'];
     $contra=$_REQUEST['registro3'];

       
        $link= conectar();
        $consulta="SELECT * FROM  usuario WHERE `USER` = '".$nombre."'";
        $consulta2=mysqli_query($link,$consulta);
        $dato=mysqli_num_rows($consulta2); 

        if($link!=null && $dato==0){
                $query="SELECT * FROM  usuario  ";
                $consulta= mysqli_query($link , $query);
                $dato=mysqli_num_rows($consulta); 
                $dato=$dato+1;
                $num=strval($dato);

                $contra = password_hash($contra, PASSWORD_DEFAULT);
                
                $query2="INSERT INTO `usuario`(`ID`,`CORREO`, `USER`, `PASS`) VALUES ('". $num ."','".$correo."','".$nombre."','".$contra."')";
                mysqli_query($link,$query2);
                session_start();
                $_SESSION['user']=$nombre;
                $_SESSION['id']=$dato;
                echo '<script>window.location.href = "http://localhost/proyecto/todobien.php";</script>';
                mysqli_close($link);
                exit();
        }else{
                echo '<script>window.location.href = "http://localhost/proyecto/todomal.php";</script>';
                mysqli_close($link);
                exit();
        }
?>