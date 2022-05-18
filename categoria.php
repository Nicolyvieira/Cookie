<?php
  
  
  header("Location: index.php");

   $categoria = $_GET['slcCategoria'];
  
  
   setcookie('codcategoria', $categoria, time()+180);
   
  

?>