<?php

// function __autoload($class)
function classAutoLoader($class)
{
  $class = strtolower($class);
  $the_path = "includes/{$class}.php";
  if (file_exists($the_path)) {
    require_once($the_path);
  } else {
    die("The file {$class}.php does not exists");
  }
}

spl_autoload_register('classAutoLoader');

function redirect($location)
{
  header("Location: {$location}");
}
