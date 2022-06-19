<?php
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';
include '../sharedFunc/db.php';
include '../sharedFunc/func.php';

$select = "SELECT courses.id id, name , link , trackes.title Ttrack , levels.title tlevel FROM `courses` JOIN trackes ON courses.trackId = trackes.id JOIN levels ON courses.levelId = levels.id";
$s = mysqli_query($conn, $select);
if (isset($_GET['delete'])) {
  $id =   $_GET['delete'];
  $delete = "DELETE FROM courses where id = $id";
  $d =  mysqli_query($conn, $delete);
  testMessage($d, "Delete courses $id ");
}
?>
<main id="main" class="main">
  <div class="pagetitle">
    <h1>List courses Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">List courses </li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section dashboard">
    <div class="row">
      <div class="container  mt-5 text-center">
        <div class="card">
          <div class="card-body">
            <table class="table table-dark">
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Link</th>
                <th>Track</th>
                <th>Level</th>
                <th colspan="2">Action</th>
              </tr>
              <?php foreach ($s as $data) { ?>
                <tr>
                  <th> <?php echo $data['id'] ?> </th>
                  <th> <?php echo $data['name'] ?> </th>
                  <th> <a href="<?php echo $data['link'] ?>">View Course</a> </th>
                  <th> <?php echo $data['Ttrack'] ?> </th>
                  <th> <?php echo $data['tlevel'] ?> </th>
                  <th> <a class="btn btn-warning" href="/advisor/admin/courses/add.php?edit=<?php echo $data['id'] ?>">Edit </a> </th>
                  <th> <a class="btn btn-danger" onclick="return confirm('are your Sure !')" href="/advisor/admin/courses/list.php?delete=<?php echo $data['id'] ?>">delete </a> </th>
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