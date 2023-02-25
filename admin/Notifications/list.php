<!-- Header -->
<?php include "../header.php"?>

  <div class="container">
    <h1 class="text-center" >Notifications in Kothur Application</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i>Add New Notification</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">ID</th>
              <th  scope="col">Heading</th>
              <th  scope="col">content</th>
              <th  scope="col" colspan="3" class="text-center">Edit</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
            include "../db.php";

            $query="SELECT * FROM notifications";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database

            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $heading = $row['heading'];           
              $content = $row['content'];        

              echo "<tr >";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$heading}</td>";
              echo " <td >{$content} </td>";

              echo " <td class='text-center'> <a href='view.php?user_id={$id}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="../home.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "../footer.php" ?>