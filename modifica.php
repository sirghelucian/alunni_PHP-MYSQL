<?php


 if(isset($_GET['idriga'])){
   include("config.php");
   $risultato=mysqli_query($conn,"select * from alunni where matricola='$_GET[idriga]';") or die("errore");
   
   if(mysqli_num_rows($risultato)>0){
      $riga=mysqli_fetch_array($risultato);
      //$riga['matricola']
      //$riga['nomeecognome']
      //$riga['classe']
      echo"<form action='modifica2.php' method='post'>
         riga la cui matricola è: <b>$riga[matricola]</b><br>
         <input type='hidden' name='idriga' value='$_GET[idriga]'>
         <input type='text' name='nec' value='$riga[nomeecognome]'> Nome e cognome<br>
         <input type='text' name='classe' value='$riga[classe]'> Classe<br>
         <input type='submit' name='ok' value='modifica riga'>
      </form>";
   } 
   //else
  }
  else{
  	echo"<a href='visualizza.php'>Torna alla pagina di visualizzazione.....</a>";
  }


?>