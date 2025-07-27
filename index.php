<?php
include 'style.html';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"CampusTrail | Explore IITs, NITs & More"</title>
</head>

<body>
    <section class="bg-dark text-white text-center py-5">
        <div class="container">
            <h1 class="display-5 fw-bold">Educational Trip to Prestigious Institutions</h1>
            <p class="lead">An academic journey to premier institutes like IITs, NITs, and other top universities.</p>
        </div>
    </section>

    <!-- Trip Overview -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img src="https://i0.wp.com/eastmojo.com/wp-content/uploads/2022/04/IIT-Kharagpur.png?fit=1920%2C1080&ssl=1" class="img-fluid rounded shadow" alt="Institute Image">
                </div>
                <div class="col-md-6">
                    <h2>About the Educational Trip</h2>
                    <p class="fs-5 mt-3">
                        This institute-organized educational trip is aimed at giving students first-hand exposure to world-class academic environments such as the Indian Institutes of Technology (IITs), National Institutes of Technology (NITs), and globally reputed colleges like MIT.
                    </p>
                    <p class="fs-5">
                        During the visit, students will interact with professors, explore advanced research labs, attend workshops or seminars, and gain valuable insights into higher education and career opportunities.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Objectives Section -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Trip Objectives</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="p-3">
                        <i class="bi bi-mortarboard fs-1 text-primary"></i>
                        <h5 class="mt-2">Academic Exposure</h5>
                        <p>Understand real-world applications of academic subjects through expert talks and lab visits.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3">
                        <i class="bi bi-building fs-1 text-success"></i>
                        <h5 class="mt-2">Campus Experience</h5>
                        <p>Explore life at top universities and get inspired by their infrastructure and learning environment.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3">
                        <i class="bi bi-people fs-1 text-warning"></i>
                        <h5 class="mt-2">Career Awareness</h5>
                        <p>Learn about career paths, entrance exams, and research opportunities from the best minds.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-dark text-white text-center py-5">
        <div class="container">
            <h2 class="display-5">Join the Trip!</h2>
            <p class="lead">Don't miss this opportunity to broaden your horizons and gain invaluable knowledge.</p>
            <a href="tripdetails.php" class="btn btn-light btn-lg">Apply Now</a>
        </div>
    </section>

</body>

</html>

<?php
include 'footer.php';
?>