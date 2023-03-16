<?php include "header.php" ?>
<title>Kothur || Travel </title>
<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="media.css">

</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#"><span>KOTHUR </span>APPLICATION</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" target="_blank">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" target="_blank">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">TRAVEL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php" target="_blank">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php" target="_blank">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://manvaasam.in" target="_blank">PRODUCTS</a>
                </li>
                <a class="get-started-btn" href="login.php" type="submit" style="text-decoration: none;">Admin</a>
        </div>
    </div>
</nav>

<section class="travel-section">
    <div class="travel-content">
        <h1>Travel Details</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit inventore soluta omnis itaque, officiis similique facilis dolore quis! Ad itaque perferendis quisquam nobis aliquam! Provident?</p>
    </div>
        <div class="container" id="book">
            <div class="row">
                <div class="col-md-6 box">
                    <form action="#" method="post">
                        <div class="content">
                            <h2>TRAIN ROUTE</h2>
                            <div class="dropdown">
                                <label for="start">Choose your starting point:</label>
                                <select name="start" id="start" style="background-color: #333;">
                                    <option value="start-point1">Kothur</option>
                                </select>
                            </div>

                            <h3>TO</h3>

                            <div class="dropdown">
                                <label for="end">Choose your Destination point:</label>
                                <select name="end" id="end" style="background-color: #333;">
                                    <option value="end-point1">Bangalore</option>
                                    <option value="end-point2">Jolarpetti</option>
                                </select>
                            </div>
                            <input type="submit" name="submit1" value="SEARCH" class="btn" id="btn-style">
                        </div>
                    </form>
                </div>
                <div class="col-md-6 box">
                    <form action="" method="post">
                        <div class="content">
                            <h2>BUS ROUTE</h2>
                            <div class="dropdown">
                                <label for="start">Choose your starting point:</label>
                                <select name="start" id="start" style="background-color: #333;">
                                    <option value="start-point1">Kothur</option>
                                    <option value="start-point2">Kothur Road</option>
                                </select>
                            </div>

                            <h3>TO</h3>

                            <div class="dropdown">
                                <label for="end">Choose your Destination point:</label>
                                <select name="end" id="end" style="background-color: #333;">
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