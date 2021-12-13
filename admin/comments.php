<?php include("includes/header.php");
// if (isset($_GET['id'])) {
//   if ($_POST['delete']) {
//     $comment = Comment::find_by_id($_GET['id']);
//     $comment->delete();
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
          All comments
        </h1>
        <div class="col-md-12">
          <table class="table table-hover">
            <form method="POST" action="">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>author</th>
                  <th>body</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $comments = Comment::find_all();
                foreach ($comments as $comment) : ?>
                <tr>
                  <td><?php echo $comment->id; ?></td>

                  <td><?php echo $comment->author; ?>
                    <div class="action_link">
                      <a href="delete_comment.php?id=<?php echo $comment->id; ?>">Delete</a>
                    </div>
                  </td>
                  <!-- <td><?php echo $comment->author; ?></td> -->
                  <td><?php echo $comment->body; ?></td>
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