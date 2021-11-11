<?php

class User
{
  public function find_all_users()
  {
    global $database;
    $result_set = $database->query("SELCT * FROM users");
    return $result_set;
  }
}
