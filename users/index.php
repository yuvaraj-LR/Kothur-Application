<?php include "header.php" ?>
<title>Kothur || Home</title>
<link rel="stylesheet" href="styles.css">

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
                    <a class="nav-link active" href="#">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" target="_blank">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="travel.php" target="_blank">TRAVEL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php" target="_blank">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php"target="_blank">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://manvaasam.in" target="_blank">PRODUCTS</a>
                </li>
                <a class="get-started-btn" href="login.php" type="submit" style="text-decoration: none;">Admin</a>
        </div>
    </div>
</nav>

<!-- Index Section -->

<div class="index-section">

    <div class="content-area">
        <h1>kothur</h1>
        <h2 id="content-area">application</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur esse eos dignissimos ipsa mollitia alias.</p>
    </div>
        <?php
    
            include "db.php";
        
            // Fetch data from database
            $sql = "SELECT * FROM notifications";
            $result = $conn->query($sql);
        
            // Display data in Bootstrap carousel
            if ($result->num_rows > 0) {
                echo '<div id="course-carousel" class="carousel container-fluid slide" data-bs-ride="carousel">';
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


<?php include "footer.php" ?>

