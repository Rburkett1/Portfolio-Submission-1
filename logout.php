<?php
  // This will erase the cookie on the next request-response cycle
  setcookie("loggedin", "yes", time() - 10);
?>