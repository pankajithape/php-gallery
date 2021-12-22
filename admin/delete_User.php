<?php
include("includes/init.php");

if (empty($_GET['id'])) {
  redirect("users.php");
}

$user = User::find_by_id($_GET['id']);
if ($user) {
  $session->message("The {$user->id} user has been deleted");
  $user->delete_photo();
  redirect("users.php");
} else {
  redirect("users.php");
}