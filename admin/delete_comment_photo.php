<?php
include("includes/init.php");

if (empty($_GET['id'])) {
  redirect("comments.php");
}

$comment = Comment::find_by_id($_GET['id']);
if ($comment) {
  $comment->delete();
  $session->message("The comment with id {$comment->id} has been deleted");

  redirect("comment_photo.php?id={$comment->photo_id}");
} else {
  redirect("comments.php");
}