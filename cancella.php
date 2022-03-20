<?php
  if(isset($_GET['idriga'])){
   include("config.php");
   mysqli_query($conn,"delete from alunni where matricola='$_GET[idriga]';") or die("errore");
   header("location:home.php");
  }
  else{
  	echo"<a href='home.php'>Torna alla pagina di visualizzazione.....</a>";
  }


?>