<?php
  include("config.php");
  $query="
    insert into alunni(nomeecognome,classe) values
       ('pinco pallo','IIIA'),
  	   ('Marco Rossi','IVA'),
  	   ('Luca Bianchi','IIIA'),
  	   ('Gianni Verdi','IVA'),
  	   ('Anna Azzurri','VA');
  ";
  mysqli_query($conn,$query)or die ("Errore negli inserimenti".mysqli_error());
  //inserimenti avvenuti con successo
?>