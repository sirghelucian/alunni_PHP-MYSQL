<?php
  include("config.php");
  if(isset($_POST['ok'])){
   $query="update alunni 
              set nomeecognome='$_POST[nec]' , 
              	  classe='$_POST[classe]' 
              where matricola=$_POST[idriga];
             "; 	
    mysqli_query($conn,$query) or die("errore");
    header("location:home.php");
  }
  else{
  	echo"<a href='home.php'>Torna alla pagina di visualizzazione.....</a>";
  }
?>