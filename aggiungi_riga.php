<?php
  include("config.php");
  echo"<form action='$_SERVER[PHP_SELF]' method='post'>
     <input type='text' name='nome'> Nome e cognome alunno<br>
     <input type='text' name='classe'> Classe<br>
     <input type='submit' name='ok' value='Invia dati'> 
    </form>
  ";
  if(isset($_POST['ok'])){
  	if($_POST['nome']=="" || $_POST['classe']==""){
  		echo"Compila tutti i campi";
  	}
  	else{
       $query="insert into alunni(nomeecognome,classe) values
       			('".$_POST['nome']."','$_POST[classe]');";
       mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error());
       echo"Alunno $_POST[nome] della classe $_POST[classe] aggiunto correttamente";
       echo"<br><a href='stampa_tutto.php'>STAMPA TUTTO</a>";
  	}
  }

?>