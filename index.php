<?php
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if(isset($_POST["username"]))
    {
      $name = trim(strip_tags($_POST["username"]));
    }

    if(isset($_POST["usermail"]))
    {
      $to = trim(strip_tags($_POST["usermail"]));
    }

    if (isset( $_POST["usermessage"])) 
    {
      $usmessage = trim(strip_tags($message)); // для дальнейшей обработки
    }

    $message  .= "Hello, ";
    $message  .= $name;
    $message  .= "! We have received your letter! ";
    $message  .= "We will respond as soon as possible!";
  }

  mail($to, $name, $message, 'From: castle.land.3d@gmail.com');
  //http://myproject.loc/
  echo '<script>window.close()</script>'
?>
