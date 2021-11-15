<?php
// include("includes/header.php");
// $bmw = new Car;
// $bmw->run();
// echo __FILE__ . "<br>";
// echo __LINE__ . "<br>";
// echo __DIR__ . "<br>";
if (isset($_POST['submit'])) {
  // echo "<pre>";
  // print_r($_FILES['file_upload']);
  // echo "<pre>";
  $upload_errors = array(
    0 => "There is no error",
    4 => "No file was uploaded"
  );
  $temp_name = $_FILES['file_upload']['tmp_name'];
  $the_file = $_FILES['file_upload']['name'];
  $directory = "uploads";

  if (move_uploaded_file($temp_name, $directory . "/" . $the_file)) {
    $the_message = "The file uploaded successfully";
  } else {
    $the_error = $_FILES['file_upload']['error'];
    $the_message = $upload_errors[$the_error];
  }

  // echo $the_error;

}
// if (file_exists(__DIR__)) {
//   echo 'yes <br>';
// }
?>
<form action="file-upload.php" enctype="multipart/form-data" method="post">
  <h2>
    <?php
    if (!empty($upload_errors)) {
      echo $the_message;
    }
    ?>
  </h2>
  <input type="file" name="file_upload">
  <input type="submit" name="submit">
</form>