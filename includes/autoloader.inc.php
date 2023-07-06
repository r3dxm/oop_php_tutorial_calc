<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($className)
{
  $url = $_SERVER["REQUEST_URI"];

  if (strpos($url, 'includes') == true) {
    $path = "../classes/";
  } else {
    $path = "classes/";
  }
  $extension = ".class.php";
  require_once strtolower($path . $className . $extension);
}
