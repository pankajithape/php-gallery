<?php include("includes/header.php");
// if (isset($_GET['id'])) {
//   if ($_POST['delete']) {
//     $user = User::find_by_id($_GET['id']);
//     $user->delete();
//   }
// }
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
          users
        </h1>
        <a href="add_user.php" class="btn btn-primary">Add User</a>
        <div class="col-md-12">
          <table class="table table-hover">
            <form method="POST" action="">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Photo</th>
                  <th>Username</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $users = User::find_all();
                foreach ($users as $user) : ?>
                <tr>
                  <td><?php echo $user->id; ?></td>
                  <td><img class="user_image123" src="<?php echo $user->image_path_and_placeholder(); ?>">
                  </td>
                  <td><?php echo $user->username; ?>
                    <div class="action_link">
                      <a href="delete_User.php?id=<?php echo $user->id; ?>">Delete</a>
                      <a href="edit_User.php?id=<?php echo $user->id; ?>">Edit</a>
                    </div>
                  </td>
                  <td><?php echo $user->first_name; ?></td>
                  <td><?php echo $user->last_name; ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </form>
          </table>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php include("includes/footer.php"); ?>