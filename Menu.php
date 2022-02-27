<?php
  //reading super variables 
  $first = $_POST["Fname"];
  $last = $_POST["Lname"];
  $Mail = $_POST["Email"];
  $Num = $_POST["Pnumber"];

  $Apps = "";
  $Entree = "";
  $Dessert = "";

  $dataEntered = True;
  
  if(isset($_COOKIE["CustomerName"])){
    echo("Welcome back " .$_COOKIE["CustomerName"]."<br>");
  }
  elseif(($first !== "") && ($last !== "")){
    // if loggedin variable exists then the user has already logged in successfully
    echo("Welcome " .$first.' '.$last. "!". "<br> <br>"); 
    
    setcookie("CustomerName" , $first. " " .$last);
  }
  else{
    echo("Please enter your name <br> ");
    $dataEntered = False;
  }

  if(($Mail !== "") && ($Num !== "")){
    echo("Confirm Infomation <br>" .$Mail.'<br> '.$Num. "<br><br>");
  }
  else{
    echo("Please correct your contact infomation<br>");
    $dataEntered = False;
  }

  if(isset($_POST["Apps"])){
    $Apps = $_POST["Apps"];
  }
  if(isset($_POST["Entree"])){
    $Entree = $_POST["Entree"];
  }
  if(isset($_POST["Dessert"])){
    $Dessert = $_POST["Dessert"];
  }

  if (($dataEntered === True) && ($Apps !== "") && ($Entree !== "") && ($Dessert !=="")){
    echo("Your selections are:<br>" .$Apps ."<br>" .$Entree. "<br>" .$Dessert. "<br><br>");
  }
  else{
    echo("Please Correct Selections!");
  }

  

  
    
    
?>