<!-- Header -->

<?php  include "../header.php" ?>           
<div class="container">
    <h1 class="text-center" >General Notifications</h1>
              <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">Id</th>
              <th  scope="col">Heading</th>
              <th  scope="col">Content</th>
                         </tr>  
          </thead>
            <tbody>
              <tr>
 
 
            <?php
              //  first we check using 'isset() function if the variable is set or not'
              //Processing form data when form is submitted
              include "../db.php";

              if (isset($_GET['user_id'])) {
                  $userid = $_GET['user_id']; 

                  // SQL query to fetch the data where id=$userid & storing data in view_user 
                  $query="SELECT * FROM notifications WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                      $id = $row['id'];
                      $heading = $row['heading'];
                      $content = $row['content'];

                        echo "<tr >";
                        echo " <td >{$id}</td>";
                        echo " <td > {$heading}</td>";
                        echo " <td >{$content} </td>"; 
                        echo " </tr> ";
                  }
                }    

            ?>
          </tr>  
        </tbody>
    </table>
  </div>

   <!-- a BACK Button to go to pervious page -->
  <div class="container text-center mt-5">
    <a href="list.php" class="btn btn-warning mt-5"> Back </a>
  <div>

<!-- Footer -->
<?php include "../footer.php" ?>