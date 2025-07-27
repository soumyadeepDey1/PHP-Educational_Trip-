<style>
  body {
    padding-top: 70px;
    padding-bottom: 70px;
  }
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link
  rel="icon"
  type="image/x-icon"
  href="https://icons.veryicon.com/png/o/business/dynamic-office-icon/field-trip.png" />
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/trip_data">CampusTrail</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/trip_data">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="tripdetails.php">TripDetail</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="register.php">Register</a>
          </li>
        </ul>
      </div><?php
            session_start();
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
              echo "<span class='navbar-text text-white mb-2 mx-2'>Welcome, " . htmlspecialchars($_SESSION['user_name']) . "</span>
          <form action='logout.php' method='POST' class='d-inline'>
              <button type='submit' class='btn btn-danger py-1  mt-2'>Logout</button>";
            } else {
              echo "<span class='navbar-text text-white mb-2 mx-2'>Welcome,as Guest</span>";
              echo "<form action='login.php'  class='d-inline'>
              <button type='submit' class='btn btn-light py-1 mt-2'>Login</button>";
            }
            ?>

      </form>
    </div>
  </nav>
</header>