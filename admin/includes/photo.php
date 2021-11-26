<?php
class Photo extends Db_object
{
  protected static $db_table = 'photos';
  protected static $db_table_fields = ['photo_id', 'title', 'description', 'filename', 'type', 'size'];
  public $photo_id;
  public $title;
  public $description;
  public $filename;
  public $type;
  public $size;
  public $tmp_path;
  public $upload_directory = "images";
  public $errors = array();
  public $upload_errors_array = array(
    0 => "There is no error",
    4 => "No file was uploaded"
  );
  // This is passing $_FILES['uploaded_file] as an argument
  public function set_file($file)
  {
    // echo "hello123";
    if (empty($file) || !$file || !is_array($file)) {
      $this->errors[] = "There has no file uploaded here";
      return false;
    } elseif ($file['error'] != 0) {
      $this->errors[] = $this->upload_errors_array[$file['error']];
      return false;
    } else {
      $this->filename =  basename($file['name']) . "<br>";
      $this->tmp_path = $file['tmp_name'] . "<br>";
      $this->type = $file['type'] . "<br>";
      $this->size = $file['size'] . "<br>";
    }
  }
  public function save()
  {
    if ($this->photo_id) {
      $this->update();
    } else {
      if (!empty($this->errors)) {
        return false;
      }
      if (empty($this->filename) || empty($this->tmp_path)) {
        echo "<h1>filename {$this->filename}</h1>";
        $this->errors[] = "The file was not available";
        return false;
      }
      $target_path = SITE_ROOT . DS . 'images' . DS . $this->filename;
      if (file_exists($target_path)) {
        // echo "<h1>target path is  {$target_path}</h1>";
        $this->errors[] = "File {$this->filename} already exists";
        return false;
      }
      echo "<h1>temp path is  {$this->tmp_path}</h1>";
      echo "<h1>target path is  {$target_path}</h1>";
      $the_file1 = $_FILES['file_upload']['name'];
      $directory1 = "images";
      if (move_uploaded_file($this->tmp_path, $target_path)) {
        // if (move_uploaded_file($this->tmp_path,  $directory1 . "/" . $the_file1)) {
        // $directory . "/" . $the_file ;
        echo "<h1>temp path is  {$this->tmp_path}</h1>";
        // temp path is C:\xampp\tmp\php1B0C.tmp
        echo "<h1>target path is  {$target_path}</h1>";
        // target path is \Local Disk (C:)\xampp\htdocs\Gallery\admin\images\Capture.png
        if ($this->create()) {
          unset($this->tmp_path);
          return true;
        }
      } else {
        // $this->errors[] = "The file directory probably does not have permissions";
        echo false;
      }
    }
  }
}