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
  $nameChange = False;

  // if the cookie is set and the user entered data equals the cookie then the user is returning 
  if((isset($_COOKIE["CustomerName"])) && ($first." " .$last === $_COOKIE["CustomerName"])){
    echo("Welcome back " .$_COOKIE["CustomerName"]. ". Thanks for ordering again!"."<br><br>");
  
  }
  elseif(($first !== "") && ($last !== "")){
    // if loggedin variable exists then the user has already logged in successfully
    echo("Welcome " .$first.' '.$last. "!". "<br> <br>"); 
    $nameChange = True;

    setcookie("CustomerName" , $first. " " .$last);
  }
  else{
    echo("Please enter your name <br> ");
    $dataEntered = False;
  }

  if(($Mail !== "") && ($Num !== "")){
   echo("<b>Confirm Infomation:</b><br>" .$Mail.'<br> '.$Num. "<br><br>");

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

  if (($Apps !== "") && ($Entree !== "") && ($Dessert !=="")){
    echo("<b>Your current order is:</b><br>" .$Apps ." for your appetizer<br>" .$Entree. " for your entree<br>" .$Dessert. " for your dessert<br><br>");

    if((isset($_COOKIE["Apps"])) && (isset($_COOKIE["Entree"])) && (isset($_COOKIE["Dessert"])) && ($nameChange === false)){
      echo("<b>Your last order with us was:</b><br>" .$_COOKIE["Apps"] ." for your appetizer<br>" .$_COOKIE["Entree"]. " for your entree<br>" .$_COOKIE["Dessert"]. " for your dessert<br><br>");
    }
    setcookie("Apps", $Apps);
    setcookie("Entree", $Entree);
    setcookie("Dessert", $Dessert);
  }
  else{
    echo("Please Correct Selections!");
  }

  

  
    
    
?>