<?php

defined('DS') ? NULL : define('DS', DIRECTORY_SEPARATOR);
// define('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'Gallery');
// define('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'Gallery');
define('SITE_ROOT', __DIR__);
echo SITE_ROOT;
defined('INCLUDES_PATH') ? NULL : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');


include("functions.php");
include("new_config.php");
include("database.php");
include("db_object.php");
include("user.php");
include("photo.php");
include("session.php");
// include("login.php");