<?php
include 'style.html';
include 'header.php';
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo " <body class='bg-dark text-light'>


    <div class='container d-flex align-items-center justify-content-center ' style='min-height: 70vh;'>
        <div class='card bg-secondary text-white w-100' style='max-width: 600px;'>
            <div class='card-body'>
                <h3 class='card-title text-center mb-4'>Login to CampusTrail</h3>
                <div class='alert alert-info text-center mb-3'>You are already logged in as <strong> $_SESSION[user_name] </strong>.</div>
                <div class='text-center'>
                    <a href='logout.php' class='btn btn-danger'>Logout</a>
                </div>
            </div>
        </div>
    </div>
    </body>
";
exit;

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CampusTrail | Register for join with us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-dark text-white">

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="card bg-secondary text-white w-100 m-2" style="max-width: 600px;">
            <div class="card-body">
                <h2 class="card-title text-center mb-2">User Registration</h2>
                <form action="backend.php" method="POST">
                    <div class="mb-1">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control bg-dark text-white border-light" id="name" name="name" required>
                    </div>
                    <div class="mb-1">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control bg-dark text-white border-light" id="email" name="email" required>
                    </div>
                    <div class="mb-1">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control bg-dark text-white border-light" id="phone" name="phone" required>
                    </div>
                    <div class="mb-1">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control bg-dark text-white border-light" id="password" name="password" required>
                    </div>
                    <div class="mb-1">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control bg-dark text-white border-light" id="age" name="age" required min="1" max="120">
                    </div>
                    <div class="mb-1">
                        <label class="form-label d-block">Gender</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>
                    <hr>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Register</button>
                    </div>
                </form>
                <hr>
                <div class="mt-1 text-center">
                    <small>Already have an Account? <a href="login.php" class="text-warning">Login</a></small>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php
include 'footer.php';
?>