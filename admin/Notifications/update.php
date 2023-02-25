<!-- Footer -->
<?php include "../header.php"?>

<?php
  include "../db.php";

   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM notifications WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];
          $heading = $row['heading'];
          $content = $row['content'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $heading = $_POST['heading'];
      $content = $_POST['content'];
      
      // SQL query to update the data in heading$heading table where the id = $userid 
      $query = "UPDATE notifications SET heading = '{$heading}'  , content = '{$content}' WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Notification Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="heading" >Heading</label>
        <input type="text" name="heading" class="form-control" value="<?php echo $heading  ?>">
      </div>
    
      <div class="form-group">
        <label for="content" >Content</label>
        <input type="text" name="content"  class="form-control" value="<?php echo $content  ?>">
      </div>    

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="list.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>