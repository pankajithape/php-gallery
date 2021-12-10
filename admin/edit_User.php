<?php include("includes/header.php");

// if (empty($_GET['id'])) {
//   redirect("photos.php");
// } else {
//   $photo = Photo::find_by_id($_GET['id']);

$user = User::find_by_id($_GET['id']);
if (isset($_POST['update'])) {
  // echo 'hello';
  if ($user) {
    $user->username = $_POST['username'];
    $user->password = $_POST['password'];
    $user->first_name = $_POST['first_name'];
    $user->last_name = $_POST['last_name'];

    if (empty($_FILES['user_image'])) {
      $user->save();
    } else {

      $user->set_file($_FILES['user_image']);
      $user->upload_photo();
      $user->save();
      redirect("edit_User.php?id={$user->id}");
    }
  }
}


if (empty($_GET['id'])) {
  redirect("users.php");
} else {
  $user = User::find_by_id($_GET['id']);

  if (isset($_POST['update'])) {
    if ($user) {
      $user->username = $_POST['username'];
      $user->password = $_POST['password'];
      $user->first_name = $_POST['first_name'];
      $user->last_name = $_POST['last_name'];
      $user->set_file($_FILES['user_image']);
      $user->save_user_and_image();
    }
  }
}


?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <?php include("includes/top_nav.php"); ?>
  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
  <?php include("includes/side_nav.php"); ?>
  <!-- /.navbar-collapse -->
</nav>
<div id="page-wrapper">
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Users
          <small>Subheading</small>
        </h1>
        <div class="col-md-6">
          <img class="img-responsive" src="<?php echo $user->image_path_and_placeholder(); ?>">
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="col-md-6">
            <div class="form-group">
              <input type="file" name="user_image">
            </div>
            <div class="form-group">
              <label for="username">username</label>
              <input type="text" class="form-control" name="username" value="<?php echo $user->username; ?>">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" value="<?php echo $user->password; ?>">
            </div>
            <div class="form-group">
              <label for="first_name">first name</label>
              <input type="text" class="form-control" name="first_name" value="<?php echo $user->first_name; ?>">
            </div>
            <div class="form-group">
              <label for="last_name">last name</label>
              <input type="text" class="form-control" name="last_name" value="<?php echo $user->last_name; ?>">
            </div>

            <!-- <input type="submit" value="delete" name="delete" class="btn btn-danger "> -->
            <a class="btn btn-danger" href="delete_User.php?id=<?php echo $user->id; ?>">Delete</a>
            <input type="submit" value="update" name="update" class="btn btn-primary pull-right">
          </div>

        </form>
      </div>

    </div>
  </div>
  <?php include("includes/footer.php"); ?>