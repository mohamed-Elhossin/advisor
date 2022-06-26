<?php
if (isset($_GET['logout'])) {
  session_unset();
  session_destroy();
  header('location:/advisor/user/');
}
?>
<!-- ======= Header ======= -->

<header id="header" class="fixed-top d-flex align-items-center header-transparent">
  <div class="container d-flex align-items-center">
    <h1 class="logo me-auto"><a href="index.php">Course-advisor
      </a></h1>
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="/advisor/user/#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="/advisor/user/#about">Who Are we</a></li>
        <li><a class="nav-link scrollto" href="/advisor/user/#services">Services</a></li>
        <li><a class="nav-link scrollto" href="/advisor/user/calendar.php">calendar</a></li>

        <?php if (isset($_SESSION['admin'])) : ?>
          <li><a class="nav-link scrollto" href="/advisor/user/courses/listTrack.php">Tracks</a></li>
          <li><a class="nav-link scrollto" href="/advisor/user/rating.php">Rating</a></li>

        <?php endif; ?>
        <li><a class="nav-link scrollto" href="/advisor/user/#footer">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    <div class="social-links">
      <?php if (isset($_SESSION['admin'])) : ?>
        <form action="">
          <button name="logout" class="btn btn-info"> Log Out </button>
        </form>
        <a class="btn btn-danger p-3" href="/advisor/user/admins/profile.php">your Profile</a>
      <?php else : ?>
        <a href="/advisor/user/admins/add.php" class="btn btn-info p-3 "> Sign up </a>
        <a href="/advisor/user/pages-login.php" class="btn btn-warning p-3">Login</a>
      <?php endif; ?>
    </div>
  </div>
</header><!-- End Header -->