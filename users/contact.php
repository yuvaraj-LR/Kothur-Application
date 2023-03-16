<?php include "header.php" ?>
<title>Kothur || Contact</title>
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
                    <a class="nav-link" href="travel.php" target="_blank">TRAVEL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="service.php" target="_blank">SERVICES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://manvaasam.in" target="_blank">PRODUCTS</a>
                </li>
                <a class="get-started-btn" href="login.php" type="submit" style="text-decoration: none;">Admin</a>
        </div>
    </div>
</nav>

<!-- Contact Section -->

<section class="contact-section">

    <h1>Contact Us</h1>
    <form action="https://formsubmit.co/yuvarajrama121@gmail.com" method="POST">
        <div class="form-row">
            <div class="form-control">
                <input type="text" required style="background-color: black;"/>
                <label >Name</label>
            </div>

            <div class="form-control">
                <input type="text" required style="background-color: black;"/>
                <label>Email</label>
            </div>
            <input type="hidden" name="_next" value="thankyou.html">
            <div class="form-group col-md-6">
                <label for="inputQuery">Your Query</label>
                <textarea name="content" id="" cols="35" rows="10" placeholder="Describe your query"></textarea>
            </div> 
        </div>
        
        <button type="submit" class="contact-btn"><a href="#">Contact</a></button>
    </form>

</section>

<script>
        const inputs = document.querySelectorAll('.form-control input');
        const labels = document.querySelectorAll('.form-control label');

        labels.forEach(label => {
            label.innerHTML = label.innerText
                .split('')
                .map((letter, idx) => `<span style="
                    transition-delay: ${idx * 50}ms
                ">${letter}</span>`)
                .join('');
        });
</script>

<?php include "footer.php" ?>