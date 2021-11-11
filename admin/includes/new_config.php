<?php
ob_start();

$db['db_host'] = 'localhost';
$db['db_user'] = 'root';
$db['db_password'] = '';
$db['db_name'] = 'gallery_db';

foreach ($db as $key => $value) {
  define(strtoupper($key), $value);
}
