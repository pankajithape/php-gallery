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

      // $user = new User();
      // $user->update();

      // $user = User::find_user_by_id(6);
      // $user->last_name = "Ithape";
      // $user->username = "Example_username1";
      // $user->password = "_password";
      // $user->first_name = "_first     '_name";
      // $user->last_name = "_last_name's ddd";
      // $user->update();


      // $user = User::find_user_by_id(6);
      // $user->username = 'Daved';
      // $user->save();


      $user = new User();
      $user->username = "Ramchandra";
      $user->save();

      // $user->last_name = "Ithape";

      // $user = new User();
      // $user->username = "Example_username";
      // $user->password = "Example_password";
      // $user->first_name = "Example_first_name";
      // $user->last_name = "Example_last_name";

      // $user->create();


      // $result_set = User::find_all_users();
      // while ($row = mysqli_fetch_array($result_set)) {
      //   echo $row['username'] . "<br>";
      // }
      // $user_found = mysqli_fetch_array($result_set);


      // $found_user = User::find_user_by_id(1);
      // $user = User::instantiation($found_user);
      // echo $user->username;

      // $users = User::find_all();
      // foreach ($users as $user) {
      //   echo $user->username . "<br>";
      // }

      // $found_user = User::find_user_by_id(1);
      // echo $found_user->username;

      // $photo = new photo();

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