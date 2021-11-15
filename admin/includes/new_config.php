<?php
ob_start();

$db['db_host'] = 'localhost:4306';
$db['db_user'] = 'root';
$db['db_password'] = '';
$db['db_name'] = 'gallery_db';

foreach ($db as $key => $value) {
  define(strtoupper($key), $value);
}