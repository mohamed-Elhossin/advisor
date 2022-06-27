<?php
include '../shared/head.php';
include '../shared/header.php';
include '../sharedFunc/db.php';
$select = "SELECT * FROM `trackes`";
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
            <h3>Tackes</h3>
        </header>
        <div class="row flex-items-xs-middle flex-items-xs-center">
            <!-- Basic Plan  -->
            <?php foreach ($s as $data) { ?>
                <div class="col-xs-12 col-lg-4 ">
                    <div class="card bg-secondary ">
                        <div class="card-body">
                            <h4>
                                <a href="/advisor/user/courses/list.php?show=<?php echo $data['id']; ?>">
                                    Track Name : <?php echo $data['title']   ?>
                                </a>
                            </h4>
                            <p>
                            Job Requirement  :

                                <?php echo $data['desciption'] ?>
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