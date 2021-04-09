 <?php
 session_start();
 $id=$_SESSION['id'];
 $db = mysqli_connect("localhost", "root", "", "test");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "img".basename($image);

    $sql = "INSERT INTO images (user_id,image, image_text) VALUES ($id,'$image', '$image_text')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
 header('location:photo.php');
?>
