<?php 
   session_start();
   session_destroy();
    echo '<script>window.location.href = "http://localhost/proyecto/index.php";</script>'; 
?>