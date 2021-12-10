<?php include("includes/header.php");

// if (empty($_GET['id'])) {
//   redirect("photos.php");
// } else {
//   $photo = Photo::find_by_id($_GET['id']);

$user = new User();
if (isset($_POST['create'])) {
  // echo 'hello';
  if ($user) {
    $user->username = $_POST['username'];
    $user->password = $_POST['password'];
    $user->first_name = $_POST['first_name'];
    $user->last_name = $_POST['last_name'];
    $user->set_file($_FILES['user_image']);
    $user->save_user_and_image();
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
        <form action="" method="post" enctype="multipart/form-data">
          <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
              <input type="file" name="user_image">
            </div>
            <div class="form-group">
              <label for="username">username</label>
              <input type="text" class="form-control" name="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <div class="form-group">
              <label for="first_name">first name</label>
              <input type="text" class="form-control" name="first_name">
            </div>
            <div class="form-group">
              <label for="last_name">last name</label>
              <input type="text" class="form-control" name="last_name">
            </div>

            <input type="submit" value="submit" name="create" class="btn btn-primary pull-right">
          </div>

        </form>
      </div>

    </div>
  </div>
  <?php include("includes/footer.php"); ?>