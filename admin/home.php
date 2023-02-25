<?php 
    include "header.php";
?>

<!-- Navbar and Carousel -->
<section class="title">
        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="home.php">KOTHUR Application</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" id="drop-style" href="Notifications/list.php">Update Notifications</a></button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="drop-style" href="ServicePage/list.php">Update Services</a></button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#book">Travel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.manvaasam.in/">Products</a>
                    </li>
                </ul>
            </div>
        </nav>
    
        <!-- Carousel -->
        <div class="container notification">
        <?php

            include "db.php";

            // Fetch data from database
            $sql = "SELECT * FROM notifications";
            $result = $conn->query($sql);

            // Display data in Bootstrap carousel
            if ($result->num_rows > 0) {
                echo '
                <div id="title-bar">
                    <center>
                        <h1>Kothur Application</h1>
                        <h2>Notification - Bar</h2>
                    </center>
                </div>';
                echo '<div id="course-carousel" class="carousel container slide" data-bs-ride="carousel">';
                echo '<div class="carousel-inner d-block w-100 notification">';
                $active = true;
                while($row = $result->fetch_assoc()) {
                    $class = $active ? ' active' : '';
                    echo '<div class="carousel-item' . $class . '">';
                    echo '<h1>' . $row["heading"] . '</h1>';
                    echo '<p class="text-center">' . $row["content"] . '</p>';
                    echo '</div>';
                    $active = false;
                }
                echo '</div>';
                echo '<button class="carousel-control-prev" type="button" data-bs-target="#course-carousel" data-bs-slide="prev">';
                echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                echo '<span class="visually-hidden">Previous</span>';
                echo '</button>';
                echo '<button class="carousel-control-next" type="button" data-bs-target="#course-carousel" data-bs-slide="next">';
                echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                echo '<span class="visually-hidden">Next</span>';
                echo '</button>';
                echo '</div>';
            } else {
                echo "No courses found.";
            }

            $conn->close();
        ?>
    </div>
</section>
<br><br><br>

<!-- For Booking And Travel Details -->
<section class="container container-img" id="book">
        <div id="title-bar" style="margin-top: 20px;">
                    <center>
                        <h1>Kothur Travel Details</h1>
                    </center>
                </div>
        <div class="row">
            <div class="col-md-6 box">
                <form action="" method="post">
                    <div class="content">
                        <h2>TRAIN ROUTE</h2>
                        <div class="dropdown">
                            <label for="start">Choose your starting point:</label>
                            <select name="start" id="start">
                                <option value="start-point1">Kothur</option>
                            </select>
                        </div>

                        <h3>TO</h3>

                        <div class="dropdown">
                            <label for="end">Choose your Destination point:</label>
                            <select name="end" id="end">
                                <option value="end-point1">Bangalore</option>
                                <option value="end-point2">Jolarpetti</option>
                            </select>
                        </div>
                        <input type="submit" name="submit1" value="SEARCH" class="btn" id="btn-style">
                    </div>
                </form>
            </div>
            <div class="col-md-6 box">
                <form action="#" method="post">
                    <div class="content">
                        <h2>BUS ROUTE</h2>
                        <div class="dropdown">
                            <label for="start">Choose your starting point:</label>
                            <select name="start" id="start">
                                <option value="start-point1">Kothur</option>
                                <option value="start-point2">Kothur Road</option>
                            </select>
                        </div>

                        <h3>TO</h3>

                        <div class="dropdown">
                            <label for="end">Choose your Destination point:</label>
                            <select name="end" id="end">
                                <option value="end-point1">Thirupattur</option>
                                <option value="end-point2">Kuppam</option>
                            </select>
                        </div>
                            
                        <input type="submit" name="submit2" value="SEARCH" class="btn" id="btn-style">
                    </div>
                </form>
                <br>
            </div>
        </div>
    

<?php 
    // For Train Routes 
    if(isset($_POST['submit1'])){
        $start = $_POST['start'];
        $end = $_POST['end'];

        if ($end == "end-point1"){
            echo "<h1>Train Route</h1>";
            echo "<h2>Kothur To Bangalore</h2>";
            echo "4:45 am - train number(16519)- patchur<br><br>";
            echo "5:00 am -train number(16519)- manalur<br><br>";
            echo "2:21pm --train number(06552)- patchur<br><br>";
            echo "2:38 pm - train number(06552)- manalur<br><br>";
        }   
        
        else if ($end == "end-point2") {
            echo "<h1>Train Route</h1>";
            echo "<h2>Kothur To Jorpettai</h2>";
            echo "11:17 am -train number(06551)- manalur<br><br>";
            echo "11:30 am -train number(06551)- patchur<br><br>";
            echo "7:30 pm-train number(16520)- manalur<br><br>";
            echo "7:50 pm-train number(16520)- patchur<br><br>";
            echo "10:35 pm-train number(162)- manalur<br><br>";
            echo "7:50 pm-train number(16520)- patchur<br><br>";
        }

        else {
            echo "<script>alert('Check your options again')</script>";
        }
    }

    // For Bus Routes 
    if(isset($_POST['submit2'])){
        
        $start = $_POST['start'];
        $end = $_POST['end'];

        if ($start == "start-point1" && $end == "end-point1"){
            echo "<h1>Bus Route</h1>";
            echo "<h2>Kothur To Thirupattur</h2>";
            echo "4.00 am - 9A -kothur<br><br>";
            echo "6:00 am - JMS<br><br>";
            echo "6:30 am - 6 No<br><br>";
            echo "7:15 am- JMS/RAVI<br><br>";
            echo "7:30 am- 32No<br><br>";
            echo "8:00 am - 22/JMS<br><br>";
            echo "9:30 am- JMS(NS)<br><br>";
            echo "10:30 am- 9A<br><br>";
            echo "11:00 am- B7 (barugur)<br><br>";
            echo "12:00 pm- Varalakshmi<br><br>";
            echo "12:15 pm- 22 NO<br><br>";
            echo "1:15 pm-  32 (optional)<br><br>";
            echo "2:30 pm- JMS<br><br>";
            echo "4:00 pm- NS<br><br>";
            echo "4:30 pm- 9A<br><br>";
            echo "5:00 pm-32No<br><br>";
            echo "5:30 pm- B7 (towards barugur)<br><br>";
            echo "5:45 pm- varalakshmi<br><br>";
            echo "6:00 pm- 22 No<br><br>";
            echo "7:30 pm- 32 No<br><br>";
            echo "8:30 pm- 22 No<br><br>";

        }   
        
        else if ($start == "start-point2" && $end == "end-point1") {
            echo "<h1>Bus Route</h1>";
            echo "<h2>Kootur Road To Thirupattur</h2>";
            echo "5:00 am- rts<br><br>";
            echo "7:45 am -rts<br><br>";
            echo "8:10 am- pattukottai<br><br>";
            echo "9:00 am- rts<br><br>";
            echo "11:00 am-rts<br><br>";
            echo "12:00 pm- pattukottai<br><br>";
            echo "10:15 pm- pattukottai<br><br>";
        }

        else if ($start == "start-point2" && $end == "end-point2") {
            echo "<h1>Bus Route</h1>";
            echo "<h2>Kootur Road To Kuppam</h2>";
            echo "1:00 pm- rts <br><br>";
            echo "2:30 pm- pattukottai <br><br>";
            echo "3:30 pm- rts <br><br>";
            echo "4:00 pm- anna sathya (kuppam → karur)<br><br>"; 
            echo "4:15 pm- pattukottai <br><br>";
            echo "5:00 pm-rts <br><br>";
            echo "6:15 pm- pattukottai <br><br>";
            echo "7:00 pm- rts <br><br>";
            echo "7:45 pm- rts <br><br>";

        }

        else {
            echo "<script>alert('Check your options again')</script>";
        }
    }
?>


</section>

<br><br><br><br><br>

<!-- Service Page Details -->
<section id="service">

          <div id="title-bar">
                    <center>
                        <h1>Kothur Service Details</h1>
                    </center>
                </div>


    <?php

        include "db.php";

        // Set the SQL query to fetch the data
        $sql = "SELECT * FROM services";

        // Execute the query and store the result set
        $result = $conn->query($sql);
        ?>
        <div class="container">
            <div class="row pad-card">
        <?php
        // Check if the query execution was successful
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            
            echo '
            <div class="card col-md-4" style="width: 20rem; padding:5px; margin: 5px;">
                <img src="'.$row['img'].'" width="400px" height="200px" alt="Error" class="card-img-top" alt="Error">
                <div class="card-body">
                    <h5 class="card-title">' . $row["heading"] . '</h5>
                    <p class="card-text">' . $row["content"] . '</p>
                    <a class="card-button btn btn-primary" href="tel:"' . $row['mobile'] . ' "> Call </a>
                    <a class="card-button btn btn-primary" href="https://web.whatsapp.com/"' . $row['mobile'] . ' " target="_blank"> Whatsapp </a>
                </div>
            </div>';
            }

        } else {
            echo "0 results";
        }
        ?>
            </div>
        </div>
<?php
        // Close the connection
        $conn->close();

    ?>
    </section>

    
<?php
    include "footer.php";
?>
