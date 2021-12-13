<?php

defined('DS') ? NULL : define('DS', DIRECTORY_SEPARATOR);
define('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'Gallery');
// define('SITE_ROOT', DS . 'C: ' . DS . 'xampp' . DS . 'htdocs' . DS . 'Gallery');
// defined('DS') ? null : define('SITE_ROOT ', DS . 'C: ' . DS . 'xampp' . DS . 'htdocs' . DS . 'Gallery');
// define('SITE_ROOT', __DIR__);
// echo SITE_ROOT;
// C:\xampp\htdocs\Gallery\admin
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');


require_once("functions.php");
require_once("new_config.php");
require_once("database.php");
require_once("db_object.php");
require_once("user.php");
require_once("photo.php");
require_once("comment.php");
require_once("session.php");
require_once("paginate.php");
// include("login.php");