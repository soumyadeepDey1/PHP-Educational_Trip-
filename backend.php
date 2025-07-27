<?php
include 'style.html';
include 'header.php';
include 'sql_connection.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Of Form</title>
</head>

<body class="bg-dark text-white text-center">

    <div class="container my-2 " style="min-height: 70vh;">
        <div class="card mx-auto shadow-lg bg-secondary" style="max-width: 600px;">
            <div class="card-body ">
                <h1 class="card-title text-center text-white mb-4">Output Of Form</h1>

                <!-- backend.php -->
                <?php
                if (
                    isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['gender'])
                ) {
                    $name = htmlspecialchars(filter_input(INPUT_POST, 'name', FILTER_VALIDATE_REGEXP, [
                        "options" => ["regexp" => "/^[a-zA-Z\s]+$/"]
                    ]));
                    $email = htmlspecialchars(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
                    $phone = htmlspecialchars(filter_input(INPUT_POST, 'phone', FILTER_VALIDATE_REGEXP, [
                        "options" => ["regexp" => "/^\d{10}$/"]
                    ]));
                    $password = htmlspecialchars(filter_input(
                        INPUT_POST,
                        'password',
                        FILTER_VALIDATE_REGEXP,
                        ["options" => ["regexp" => "/^[A-Za-z0-9@$!%?&]{8,}$/"]]
                    ));

                    // (?=.[A-Z])(?=.[a-z])(?=.\d)(?=.[@$!%?&])
                    $age = htmlspecialchars(filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT, [
                        "options" => ["min_range" => 1, "max_range" => 120]
                    ]));
                    $gender = htmlspecialchars($_POST['gender']);
                    $register_status = false;
                    if (empty($name && $email && $phone && $password && $age && $gender)) {
                        echo "<div class='alert alert-danger'>Invalid input detected.</div>";
                    } else {
                        $check_email_phone = "SELECT * FROM `edu_trip` WHERE email='$email' OR phone='$phone'";
                        $result = $connection->query($check_email_phone);
                        if (mysqli_num_rows($result) > 0) {
                            echo "<div class='alert alert-warning'>Email or phone already resistered. Please check.</div>";
                        } else {
                            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                            $sql_quiry =  "INSERT INTO `edu_trip` ( `name`, `email`, `phone`, `password`, `age`, `gender`, `date`)
                         VALUES ('$name', '$email', '$phone', '$hashed_password', '$age', '$gender', current_timestamp())";
                            // echo $sql_quiry;
                            if ($connection->query($sql_quiry) === TRUE) {

                                $register_status = true;
                                echo "<h4 class='mb-3 text-muted'>Form Submission Details:</h4> <hr>";
                                echo "<p class='text-white'><strong>Name:</strong> $name</p> <hr>";
                                echo "<p class='text-white'><strong>Email:</strong> $email</p> <hr>";
                                echo "<p class='text-white'><strong>Phone:</strong> $phone</p> <hr>";
                                echo "<p class='text-white'><strong>Age:</strong> $age</p> <hr>";
                                echo "<p class='text-white'><strong>Gender:</strong> $gender</p> <hr>";
                                echo "<div class='mt-4 alert alert-success fw-bold text-center text-success'>Thank you for submitting the form!</div>";
                            } else {
                                echo "<div class='alert alert-danger'>Error: " . $connection->error . "</div>";
                            }
                            $connection->close();
                        }
                    }
                } else {
                    echo "<div class='alert alert-warning'>Please fill in all fields.</div>";
                }
                ?>

                <div class="mt-4 text-center">
                    <hr>
                    <?php
                    if ($register_status) {
                        echo "<p class='text-muted'>You can now login to your account.</p>";
                        echo "<a href='login.php' class='btn btn-outline-dark'>Click to Login</a>";
                    } else {
                        echo "<p class='text-muted'>Please fill the form again.</p>";
                        echo "<a href='register.php' class='btn btn-outline-dark'>Click to Register</a>";
                    }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>

</body>

</html>

<?php
include 'footer.php';
?>