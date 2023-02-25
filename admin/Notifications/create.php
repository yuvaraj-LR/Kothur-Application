<!-- Header -->
<?php  include "../header.php" ?>

<?php 

  include "../db.php";
  if(isset($_POST['create'])) 
    {
        $heading = $_POST['heading'];
        $content = $_POST['content'];
      
        // SQL query to insert heading data into the users table
        $query= "INSERT INTO notifications(heading, content) VALUES('{$heading}','{$content}')";
        $add_user = mysqli_query($conn,$query);
    
        // displaying proper message for the heading to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('User added successfully!')</script>";
              }         
    }
?>

<h1 class="text-center">Add A Notification </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="heading" class="form-label">Heading</label>
        <input type="text" name="heading"  class="form-control">
      </div>
    
      <div class="form-group">
        <label for="content" class="form-label">Content</label>
        <input type="text" name="content"  class="form-control">
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