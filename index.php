<?php require_once("includes/header.php");

$photos = Photo::find_all();

?>
<div class="row">
  <!-- Blog Entries Column -->
  <div class="col-md-12">

    <div class="row thumbnails">
      <?php foreach ($photos as $photo) : ?>

        <div class="col-xs-6 col-md-3">
          <a class="thumbnail" href="photo.php?id=<?php echo $photo->id; ?>">
            <img class="home_page_image" src="admin/<?php echo $photo->picture_path(); ?>" alt="">
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <?php include("includes/footer.php"); ?>