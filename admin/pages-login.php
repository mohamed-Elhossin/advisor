<?php
include './shared/head.php';
include './sharedFunc/db.php';

if (isset($_POST['login'])) {
  $name = $_POST['name'];
  $password = $_POST['password'];
  $select  = "SELECT * FROM `admin` where  `name` = '$name' and `password`= '$password'";
  $s =  mysqli_query($conn, $select);
  $numOfRows = mysqli_num_rows($s);
  $row = mysqli_fetch_assoc($s);
  if ($numOfRows > 0) {
    $_SESSION['admin'] = $name;
    $_SESSION['adminId'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['image'] = $row['image'];
    $_SESSION['role'] = $row['role'];
    header("LOCATION:/advisor/admin/");
  } else {
    echo "<div class=' mt-5  alert alert-danger mx-auto w-75'>
    <h6> Your Account or password not Found </h6>
        </div>";
  }
}

?>
<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="/NiceAdmin/index.php" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Advisor-coureses</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3">

              <div class="card-body">

          
                <form class="row g-3 needs-validation" novalidate method="POST">

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <input type="text" name="name" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">Please enter your username.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>

                  <div class="col-12">
                    <button name="login" class="btn btn-danger w-100" type="submit">Login</button>
                  </div>
                </form>
              </div>
            </div>

            <div class="credits">
              Designed by <a href="">advisor-courses</a>
            </div>

          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->
<?php
