<?php

defined('DS') ? NULL : define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'Gallery');
// define('SITE_ROOT', DS . 'C: ' . DS . 'xampp' . DS . 'htdocs' . DS . 'Gallery');
// defined('DS') ? null : define('SITE_ROOT ', DS . 'C: ' . DS . 'xampp' . DS . 'htdocs' . DS . 'Gallery');
// define('SITE_ROOT', __DIR__);
// echo SITE_ROOT;
// C:\xampp\htdocs\Gallery\admin
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');


include("functions.php");
include("new_config.php");
include("database.php");
include("db_object.php");
include("user.php");
include("photo.php");
include("session.php");
// include("login.php");