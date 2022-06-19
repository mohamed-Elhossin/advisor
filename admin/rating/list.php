<?php
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';
include '../sharedFunc/db.php';
include '../sharedFunc/func.php';

$select = "SELECT rating.id id,  rating.rate as rate , students.name stuName , courses.name cursName FROM `rating` JOIN students on rating.student_id = students.id JOIN courses ON rating.course_id = courses.id";
$s = mysqli_query($conn, $select);


?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>List Rating Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">List Rating</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section dashboard">
    <div class="row">
      <div class="container col-11 mt-5 text-center">
        <div class="card">
          <div class="card-body">
            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>Student Name</th>
                <th>Course Name</th>
                <th>Course Rate</th>
              </tr>
              <?php foreach ($s as $data) { ?>
                <tr>
                  <th> <?php echo $data['id'] ?> </th>
                  <th> <?php echo $data['stuName'] ?> </th>
                  <th> <?php echo $data['stuName'] ?> </th>
                  <th> <?php echo $data['cursName'] ?> </th>
                  <th> <?php echo $data['rate'] ?> </th>
                </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>

    </div><!-- End Right side columns -->
  </section>

</main><!-- End #main -->
<?php
include '../shared/footer.php';
include '../shared/script.php';
?>