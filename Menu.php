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

  $AppsPrice = 8;
  $EntreePrice = 13;
  $DessertPrice = 7;

  // if the cookie is set and the user entered data equals the cookie then the user is returning 
  if((isset($_COOKIE["CustomerName"])) && ($first." " .$last === $_COOKIE["CustomerName"])){
    echo("Welcome back, " .$_COOKIE["CustomerName"]. ". Thanks for ordering again!"."<br><br>");
  
  }
  elseif(($first !== "") && ($last !== "")){
    // if loggedin variable exists then the user has already logged in successfully 
    echo("Thanks for your order, " .$first.' '.$last. "!". "<br> <br>"); 
    $nameChange = True;

    setcookie("CustomerName" , $first. " " .$last);
  }
  // error message for name  
  else{
    echo("Please enter your name <br> ");
    $dataEntered = False;
  }
  // Mail and Num values entered in field  
  if(($Mail !== "") && ($Num !== "")){
   echo("<b>Confirm Infomation:</b><br>" ."Email: ".$Mail.'<br> ' ."Phone Number: ".$Num. "<br><br>");

  }
  // Mail & Num values are not entered in field  
  else{
    echo("Please correct your contact infomation<br>");
    $dataEntered = False;
  }
  // shows current order and previous order if a cookie exits and the user is a repeat customer 
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
    echo("Please Correct Selections!<br>");
  }

  if (($Apps !== "") && ($Entree !== "") && ($Dessert !=="") && ($first !== "") && ($last !== "") && ($Mail !== "") && ($Num !== "")){
  //order number generates random numer
  echo("<b> Order Refrence Number:</b> <br>");
  echo("#");
  echo(rand(1000000,9999999));
  //displays total price of order
  echo("<br><b>Total Price:</b> <br>");
  echo ('$');
  echo $AppsPrice + $EntreePrice + $DessertPrice;
  }
  else{
  echo("fields must be fixed for order to be placed.");
  }
      
?>