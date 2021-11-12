<?php

class User
{
  public $id;
  public $username;
  public $password;
  public $first_name;
  public $last_name;
  public static function find_all_users()
  {
    return self::find_this_query("SELECT * FROM users");
  }
  public static function find_user_by_id($user_id)
  {
    $result_set = self::find_this_query("SELECT * FROM users WHERE id=$user_id LIMIT 1");
    $found_user = mysqli_fetch_array($result_set);
    return $found_user;
  }

  public static function find_this_query($sql)
  {
    global $database;
    $result_set = $database->query($sql);
    return $result_set;
  }
  public static function instantiation($found_user)
  {
    $the_object = new self;
    $the_object->id = $found_user['id'];
    $the_object->username = $found_user['username'];
    return $the_object;
  }
}
