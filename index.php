<?php 

  require("inc_navbar.php");

    $DOSYA = "slayt.php" ;
   if (  $_GET["sayfa"] == "k" ) $DOSYA=("kizback.php");
      if( $_GET["sayfa"] == "e" ) $DOSYA= ("erkekback.php");
      if( $_GET["sayfa"] == "u" ) $DOSYA= ("uniback.php"); 
      require ($DOSYA);  
  
  require("last.php");

 
  



?>