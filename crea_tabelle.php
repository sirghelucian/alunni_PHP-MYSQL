<?php
  include("config.php");
  //creare le tabelle del DB $db
  $query="
     create table if not exists alunni(
       matricola int(10) primary key auto_increment,
       nomeecognome varchar(40),
       classe varchar(10)
     );
  ";
  mysqli_query($conn,$query) or die("Errore creazione tabella".mysqli_error());  
  echo"tabella alunni creata correttamente!!";
  
  mysqli_close($conn);
?>