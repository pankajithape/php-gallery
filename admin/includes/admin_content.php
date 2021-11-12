<div class="container-fluid">

  <!-- Page Heading -->
  <div class="row">
    <div class="col-lg-12">
      <h1 class="page-header">
        Admin Dashboard
        <small>Subheading</small>
      </h1>
      <?php
      echo "here I am" . "<br><br><br>";


      // $result_set = User::find_all_users();
      // while ($row = mysqli_fetch_array($result_set)) {
      //   echo $row['username'] . "<br>";
      // }
      // $user_found = mysqli_fetch_array($result_set);


      $user_found = User::find_user_by_id(1);
      echo $user_found['id'];
      // echo $user->username;
      ?>
      <ol class="breadcrumb">
        <li>
          <i class="fa fa-dashboard"></i> <a href="index.html">Dashboard</a>
        </li>
        <li class="active">
          <i class="fa fa-file"></i> Blank Page
        </li>
      </ol>
    </div>
  </div>
  <!-- /.row -->

</div>