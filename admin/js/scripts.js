$(document).ready(function () {
  var user_id, user_href, user_href_splitted;
  var image_name, image_src, image_href_splitted, photo_id;
  $(".modal_thumbnails").click(function () {
    $("#set_user_image").prop("disabled", false);
    user_href = $("#user-id").prop("href");
    user_href_splitted = user_href.split("=");
    user_id = user_href_splitted[user_href_splitted.length - 1];

    image_src = $(this).prop("src");
    image_href_splitted = image_src.split("/");
    image_name = image_href_splitted[image_href_splitted.length - 1];

    photo_id = $(this).attr("data");

    $.ajax({
      url: "includes/ajax_code.php",
      data: { photo_id: photo_id },
      type: "POST",
      success: function (data) {
        if (!data.error) {
          // alert(data);
          // location.reload(true);
          $("#modal_sidebar").html(data);
        }
      },
    });
    // alert(image_name);
    // alert(user_id);
  });
  $("#set_user_image").click(function () {
    $.ajax({
      url: "includes/ajax_code.php",
      data: { image_name: image_name, user_id: user_id },
      type: "POST",
      success: function (data) {
        if (!data.error) {
          // alert(data);
          // location.reload(true);
          $(".user_image_box a img").prop("src", data);
        }
      },
    });
  });

  /****************** EDIT PHOTO SIDEBAR ************/

  $(".info-box-header").click(function () {
    // alert("xxxxxxxx");
    $(".inside").slideToggle("fast");
    $("#toggle").toggleClass(
      "glyphicon-menu-down glyphicon , glyphicon-menu-up glyphicon "
    );
  });

  $("#summernote").summernote({
    height: 300,
  });
});

$(".delete_link").click(function () {
  return confirm("are you sure you want to delete this photo?");
});
