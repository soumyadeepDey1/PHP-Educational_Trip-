<?php
include 'style.html';
include 'header.php';
include 'sql_connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CampusTrail | Explore Trip Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="bg-dark text-light">

<!-- Header -->
<header class="bg-secondary py-4 text-center">
    <h1 class="text-white">Trip Details</h1>
    <p class="mb-0">Intitude trip is our purpose</p>
</header>

<!-- Main Content -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card bg-secondary text-white shadow">
                <div class="card-body">
                    <h3 class="card-title">Upcoming Educational Trip</h3>
                    <p class="card-text">We are excited to announce an institutional trip for all students of our department. The trip aims to provide an educational experience outside the classroom, combining learning with fun!</p>

                    <ul class="list-group list-group-flush bg-secondary">
                        <li class="list-group-item bg-secondary text-white"><strong>Destination:</strong> Science City, Kolkata</li>
                        <li class="list-group-item bg-secondary text-white"><strong>Date:</strong> 25th August 2025</li>
                        <li class="list-group-item bg-secondary text-white"><strong>Departure Time:</strong> 6:00 AM</li>
                        <li class="list-group-item bg-secondary text-white"><strong>Return Time:</strong> 9:00 PM</li>
                        <li class="list-group-item bg-secondary text-white"><strong>Cost per Student:</strong> ₹800 (includes food, travel, and entry fee)</li>
                    </ul>

                        <div class="mt-4 text-center">
                            <?php
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
                                // Check if user has already applied
                                $user_id = $_SESSION['user_id'];
                                $sql_quiry_check = "SELECT * FROM `edu_trip` WHERE sl_no = '$user_id'";
                                $result_check = $connection->query($sql_quiry_check);
                                $row = $result_check->fetch_assoc();

                                if ($row && $row['isApply'] == '1') {
                                    echo "<div class='alert alert-warning text-dark text-center mb-2'>Status: Applied</div>";
                                } else {
                                    echo "<a href='apply.php' class='btn  btn-outline-light'>Apply</a>";
                                }
                            } else {
                                //session_start();
                                //$_SESSION['return_url'] = 'tripdetails.php';
                                echo "<a href='login.php?return=tripdetails.php' class='btn  btn-outline-light'>Apply</a>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</body>

</html>

<?php
include 'footer.php';
?>