<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];

  echo "Olá $name, o seu email é $email";
}
?>