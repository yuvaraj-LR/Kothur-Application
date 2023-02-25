<!-- Header -->

<?php  include "../header.php" ?>           
<div class="container">
    <h1 class="text-center" >Kothur Service Center View Point</h1>
              <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">Id</th>
              <th  scope="col">Heading</th>
              <th  scope="col">Ph-No</th>
              <th  scope="col">Content</th>
              <th  scope="col">Image</th>
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
                  $query="SELECT * FROM services WHERE id = {$userid} ";  
                  $view_users= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_users))
                  {
                    $id = $row['id'];                
                    $heading = $row['heading'];
                    $mobile = $row['mobile'];     
                    $content = $row['content'];   
                    $imgpath = $row['img'];  
                    
                    echo '
                      <tr >
                      <th scope="row" >'.$id.'</th>
                      <td > '.$heading.'</td>"
                      <td >'.$mobile.' </td>"
                      <td > '.$content.' </td>
                      <td><img src='.$imgpath.' class="image-fluid" alt="image" style="margin:0 padding: 0 auto; height:200px; width: 400px""/></td>
                      </tr>
                    ';
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