<?php
include '../shared/head.php';
include '../shared/header.php';
include '../sharedFunc/db.php';
$select = "SELECT courses.id id,`image`, name , link , trackes.title Ttrack , levels.title tlevel FROM `courses` JOIN trackes ON courses.trackId = trackes.id JOIN levels ON courses.levelId = levels.id";
$s = mysqli_query($conn, $select);
if (isset($_SESSION['admin'])) {
} else {
    header("location:/advisor/user/pages-login.php");
}
?>
<!-- ======= Pricing Section ======= -->
<section id="pricing" class="my-5 pricing section-bg wow fadeInUp">

    <div class="container">
        <header class="section-header">
            <h3>Courses</h3>
        </header>
        <div class="row flex-items-xs-middle flex-items-xs-center">
            <!-- Basic Plan  -->
            <?php foreach ($s as $data) { ?>
                <div class="col-xs-12 col-lg-4 ">
                    <div class="card  bg-dark mt-5">
                        <img height="300" src="/advisor/admin/courses/upload/<?php echo $data['image'] ?>" class="img-top" alt="Eror">
                        <div class="card-header">
                        </div>
                        <div class="card-block">
                            <h4 class="card-title text-info">
                                Title: <?php echo $data['name'] ?>
                            </h4>
                            <p>
                                You Can view Course : <a href="<?php echo $data['link'] ?>"> Click Here</a>
                            </p>
                            <p>
                            </p>
                            Treack: <p> <?php echo $data['Ttrack'] ?>
                            </p>
                            </p>
                            Level: <p> <?php echo $data['tlevel'] ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>

</section><!-- End Pricing Section -->

<?php
include '../shared/footer.php';
include '../shared/script.php';

?>