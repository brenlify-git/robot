<?php

if (isset($_GET['name']) ) {

  array_push($nam, $_GET['name']);
  array_push($ema, $_GET['email']);
  array_push($pas, $_GET['password']);

  $users = array(
    array("name" => "Sam Espino", "email" => "sam@gmail.com", "password" => "secret1"),
    array("name" => "Shae Smith", "email" => "shae@gmail.com", "password" => "secret2"),
    array("name" => "Third Lee", "email" => "third@gmail.com", "password" => "secret3")
);

  header("Location: index.php");
}

?>