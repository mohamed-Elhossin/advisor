<?php
include './shared/head.php';
include './shared/header.php';
include './sharedFunc/db.php';
include './sharedFunc/func.php';

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $select  = "SELECT * FROM `students` where  `email` = '$email' and `password`= '$password'";
  $s =  mysqli_query($conn, $select);
  $numOfRows = mysqli_num_rows($s);
  $row = mysqli_fetch_assoc($s);
  if ($numOfRows > 0) {
    $_SESSION['admin'] = $email;
    $_SESSION['adminId'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['image'] = $row['image'];

    path("index.php");
  } else {
    echo "<div class=' mt-5  alert alert-primary mx-auto w-50'>
    <h3>  Please Try Agein </h3>
        </div>";
  }
}
print_r($_SESSION);
?>
<main>
  <div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

            <div class="d-flex justify-content-center py-4">
              <a href="/NiceAdmin/index.php" class="logo d-flex align-items-center w-auto">
                <span class="d-none d-lg-block">Couse-advisor</span>
              </a>
            </div><!-- End Logo -->

            <div class="card mb-3 bg-dark">

              <div class="card-body">

                <div class="pt-4 pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Sign In </h5>
                </div>

                <form class="row g-3 needs-validation" novalidate method="POST">

                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Email</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="email" name="email" class="form-control" require>
                      <div class="invalid-feedback">Please enter your email.</div>
                    </div>
                  </div>

                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">Please enter your password!</div>
                  </div>

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button name="login" class="btn btn-primary w-100" type="submit">Login</button>
                  </div>
                  <div class="col-12">
                    <p class="small mb-0">Don't have account? <a href="/advisor/user/admins/add.php">Create an account</a></p>
                  </div>
                </form>

              </div>
            </div>

          
          </div>
        </div>
      </div>

    </section>

  </div>
</main><!-- End #main -->
<?php
