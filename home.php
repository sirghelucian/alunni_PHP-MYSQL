<?php
 include("config.php");
  
  $query="select * from alunni;";
  $risultato=mysqli_query($conn,$query) or die("errore");
  //$risultato è tipo resource
  echo"<table border='1'>
         <tr><td>Matricola</td><td>Nome e cognome</td>
         <td>Classe</td><td>Cancella</td><td>Modifica</td></tr>";
  while($riga=mysqli_fetch_array($risultato)){
    //finchè ci sono righe
    //echo"<pre>";print_r($riga);echo"</pre>";
    /*for($i=0;$i<count($riga)/2;$i++){
      echo"$riga[$i]<br>";
    }*/
    /*foreach($riga as $k=>$v){
     if(!is_int($k)){ 
      echo"$k  => $v<br>";
     }
    }*/
    //echo"Matricola: $riga[matricola] ";
    //echo"Nome e cognome: $riga[nomeecognome] ";
    //echo"Classe: $riga[classe]<br>";
    echo"<tr>
     <td>$riga[matricola]</td>
     <td>$riga[nomeecognome]</td>
     <td>$riga[classe]</td>
     <td><a href='cancella.php?idriga=$riga[matricola]'>....cancella....</a></td>
     <td><a href='modifica.php?idriga=$riga[matricola]'>....modifica....</a></td>
    </tr>";
  }
  echo"</table>";
  
  
  
  /*foreach($riga=mysqli_fetch_array($risultato) as $k=>$v){
    echo"$k -----> $v<br>";
  }*/
  

?>