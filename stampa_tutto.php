<?php
  include("config.php");
  
  $query="select * from alunni;";
  $righe=mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error());
  //spacchettare il set righe recordset
  echo"<table border='1'><tr><td>Matricola</td><td>Nome e cognome</td><td>Classe</td></tr>";
  while($riga=mysqli_fetch_array($righe,MYSQLI_ASSOC)){
    echo"<pre>";print_r($riga);echo"</pre>";
    
    echo"<tr>
          <td>$riga[matricola]</td>
          <td>$riga[nomeecognome]</td>
          <td>$riga[classe]</td>
         </tr>";
  }
  echo"</table>";


?>