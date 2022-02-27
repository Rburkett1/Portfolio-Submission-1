<?php
  //reading super variables 
  $first = $_POST["Fname"];
  $last = $_POST["Lname"];
  $Mail = $_POST["Email"];
  $Num = $_POST["Pnumber"];

  $Apps = "";
  $Entree = "";

  $dataEntered = True;
  

  if(($first !== "") && ($last !== "")){
    // if loggedin variable exists then the user has already logged in successfully
    echo("Welcome " .$first.' '.$last. "!". "<br> <br>"); 
    
  }
  else{
    echo("Please enter Information in the fields ");
    $dataEntered = False;
  }

  if(isset($_POST["Apps"])){
    $Apps = $_POST["Apps"];
  }
  if(isset($_POST["Entree"])){
    $Entree = $_POST["Entree"];
  }

  if (($dataEntered === True) && ($Apps !== "") && ($Entree !== "") && ($Mail !== "") && ($Num !== "")){
    if (($Apps !== "") && ($Entree !== "")){
      echo("Confirm Infomation <br>" .$Mail.'<br> '.$Num. "<br><br>");
      echo("Your selections are:<br>" .$Apps. "<br>" .$Entree. "<br><br>");
    }
  }
  else{
    echo("Please Correct Selections!");
  }

  
    
    
?>