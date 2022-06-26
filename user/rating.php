<?php
include './shared/head.php';
include './shared/header.php';
include './sharedFunc/db.php';
include './sharedFunc/func.php';

$select = "SELECT * FROM `courses`";
$s = mysqli_query($conn, $select);

if (isset($_POST['pay'])) {
    $course = $_POST['course'];
    $rating = $_POST['rating'];
    $userId = $_SESSION['adminId'];

    $insert = "INSERT INTO `rating` VALUES (NULL  ,$userId ,$course ,$rating )";
    $i = mysqli_query($conn, $insert);
    testMessage($i, "Thank for Your FeedBack");
}
if (isset($_SESSION['admin'])) {

} else {
    header("location:/barber/user/pages-login.php");
}
?>
<main id="main" class="main  my-5 pt-5">
    <div class="pagetitle">
        <h1 class=" text-center text-info"> Rating course  </h1>

    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="container">
            <div class="container col-md-7">
                <div class="card">
                    <div class="card-body bg-dark">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label> Course Title </label>
                                <select name="course" type="text" class="form-control">
                                <?php foreach ($s as $data) {?>
                                        <option value="<?php echo $data['id'] ?>"> <?php echo $data['name'] ?></option>
                                <?php }?>
                                </select>

                            </div>
                            <div class="form-group mt-4">
                                <label> Course Rating from 10 </label>
                                <select name="rating" type="text" class="form-control">
                                    <?php for ($i = 0; $i <= 10; $i++) {?>
                                        <option value="<?php echo $i ?>"> <?php echo $i ?></option>
                                    <?php }?>
                                </select>

                            </div>

                            <button name="pay" class="btn mt-3 btn-info btn-block w-50 mx-auto"> send Rating </button>
                        </form>

                    </div>
                </div>
            </div>

    </section>

</main><!-- End #main -->
<?php
include './shared/footer.php';
include './shared/script.php';
?>