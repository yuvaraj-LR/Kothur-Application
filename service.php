<?php include "header.php" ?>
<title>Kothur || Service</title>
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
                    <a class="nav-link" href="index.php" target="_blank">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php" target="_blank">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="travel.php" target="_blank">TRAVEL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">SERVICES</a>
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

<!-- Service Section -->
<section class="service-section">
    <div class="service-heading">
        <h1>Our Services</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum officiis repellat, amet quaerat enim impedit maiores numquam architecto ea alias debitis eligendi iure voluptatibus aut.</p>
    </div>
    <div class="service-data">
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
                <div class="card bg-dark col-md-4" style="width: 20rem; padding:5px; margin: 5px;">
                    <img src="'.$row['img'].'" width="400px" height="200px" alt="Error" class="card-img-top" alt="Error">
                    <div class="card-body">
                        <h5 class="card-title">' . $row["heading"] . '</h5>
                        <p class="card-text">' . $row["content"] . '</p>
                        <a class="card-button service-btn" href="tel:"' . $row['mobile'] . ' "> Call </a>
                        <a class="card-button service-btn" href="https://web.whatsapp.com/"' . $row['mobile'] . ' " target="_blank"> Whatsapp </a>
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
    </div>
</section>

<?php include "footer.php" ?>
