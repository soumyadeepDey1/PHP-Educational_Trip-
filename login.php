<?php
include 'style.html';
include 'header.php';
include 'sql_connection.php';

$login_message = '';
//echo $_GET['return'];
$return_url = isset($_GET['return']) ? $_GET['return'] : 'index.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    //$return_url = $_POST['return'] ?? 'index.php'; 
    $sql_quiry_login = "SELECT * FROM `edu_trip` WHERE email='$email' ";
    $result = $connection->query($sql_quiry_login);
    if (mysqli_num_rows($result) > 0) {

        $row = $result->fetch_assoc();
        //session_start();
        if (password_verify($password, $row['password']) === false) {
            $login_message = "<div class='alert alert-light text-danger text-center mb-1.5 py-1'>Login Failed! Invalid password.</div>";
            $connection->close();
            exit;
        }else{
             
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $row['sl_no'];
            $_SESSION['user_name'] = $row['name'];
           // echo $return_url;

            header("Location: $return_url");
        }

        $connection->close();
        //unset($_SESSION['return_to']);
        
    } else {
        $login_message = "<div class='alert alert-light text-danger text-center mb-1.5 py-1'>Login Failed! Invalid email.</div>";
    }
}
?>

<body class="bg-dark text-light">


    <div class="container d-flex align-items-center justify-content-center " style="min-height: 70vh;">
        <div class="card bg-secondary text-white w-100" style="max-width: 600px;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Login to CampusTrail</h3>
                <?php if ($login_message) echo $login_message; ?>
                <form action="login.php?return=<?php echo $return_url ?>" method="POST">
                    <div class="mb-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="text" class="form-control bg-dark text-white border-light" name="email" id="email" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control bg-dark text-white border-light" name="password" id="password" placeholder="Enter password" required>
                    </div>
                    <hr>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Login</button>
                    </div>
                </form>
                <hr>
                <div class="mt-2 text-center">
                    <small>Don't have an account? <a href="register.php" class="text-warning">Register</a></small>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>