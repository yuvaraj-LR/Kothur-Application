<!-- Header -->
<?php  include "../header.php" ?>

<?php 

  include "../db.php";
  if(isset($_POST['create'])) {
        $heading = $_POST['heading'];
        $mobile = $_POST['mobile'];
        $content = $_POST['content'];
        $image = $_FILES['file'];

        // For uploading images in database.
        $imagefilename = $image['name']; //Getting the image name.
        $imagetempname = $image['tmp_name']; //Getting the image location.

        $filename_seperator = explode('.', $imagefilename);  //Seperator the imagename and extension
        $extension = strtolower(end($filename_seperator));  //Store the extension.

        //Create an array for validation
        $valid_extension = array('jpeg', 'jpg', 'png');

        //Check with your extension and array extension
        if(in_array($extension, $valid_extension)) {

            // If yes, the give the local directory and image location.
            $uploadimagepath = 'image/'.$imagefilename; 
            move_uploaded_file($imagetempname, $uploadimagepath);

            // SQL query to insert heading data into the users table
            $query= "INSERT INTO services(heading, mobile, content, img) VALUES('{$heading}', '{$mobile}', '{$content}', '{$uploadimagepath}')";
            $add_user = mysqli_query($conn,$query);
        
            // displaying proper message for the heading to see whether the query executed perfectly or not 
              if (!$add_user) {
                  echo "something went wrong ". mysqli_error($conn);
              }
    
              else { 
                echo "<script type='text/javascript'>alert('Data added successfully!')</script>";
              } 
        }    
    }
?>

<h1 class="text-center">Add A Service </h1>
  <div class="container">
    <form action="#" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="heading" class="form-label">Heading</label>
        <input type="text" name="heading"  class="form-control">
      </div>
      
      <div class="form-group">
        <label for="mobile" class="form-label">Phno</label>
        <input type="text" name="mobile"  class="form-control">
      </div> 

      <div class="form-group">
        <label for="content" class="form-label">Content</label>
        <input type="text" name="content"  class="form-control">
      </div> 

      <div class="form-group">
        <label for="img" class="form-label">Image</label>
        <input type="file" name="file"  class="form-control">
      </div>  

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="list.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>