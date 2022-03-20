<?php
  include("config.php");
  //stampare un form con una select che contiene i nomi degli alunni
  //quando si clicca visualizzare tutti i dati dell'alunno
  $query="select * from alunni;";
  $righe=mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error());
  //spacchettare il set righe recordset
  //echo"<table border='1'><tr><td>Nome e cognome</td><td>Classe</td></tr>";
  echo"<form action='$_SERVER[PHP_SELF]' method='post'>
          <select name='nomi'>";
      while($riga=mysqli_fetch_array($righe,MYSQLI_ASSOC)){
        echo"<option value='$riga[matricola]'>$riga[nomeecognome] $riga[classe]</option>";
      }  
  echo"</select>
      <input type='submit' name='ok' value='visualizza alunno'>
    </form>
  ";


  if(isset($_POST['ok'])){
    //$_POST['nomi']
    $query="select * from alunni where matricola='$_POST[nomi]';";
    $righe=mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error());
    $riga=mysqli_fetch_array($righe,MYSQLI_ASSOC);
    //echo"<pre>";print_r($riga);echo"</pre>";
    echo"L'alunno di matricola $riga[matricola] e di nome $riga[nomeecognome] frequenta la classe $riga[classe]";
  }
   

 


?>