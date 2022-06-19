<?php
include '../shared/head.php';
include '../shared/header.php';
include '../sharedFunc/db.php';
$userId = $_SESSION['adminId'];
$select = "SELECT * from students where id =$userId ";
$s = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($s);

if (isset($_SESSION['admin'])) {
} else {
    header("location:/advisor/user/pages-login.php");
}

?>
<!-- ======= Pricing Section ======= -->
<section id="pricing" class="my-5 pricing section-bg wow fadeInUp">

    <div class="container-fluid">

        <div class="row flex-items-xs-middle flex-items-xs-center">
            <!-- Basic Plan  -->
            <div class="col-xs-12 col-lg-3 m-auto ">
                <div class="card  bg-dark mt-5">
                    <img height="300" src="/advisor/user/admins/upload/<?php echo $row['image'] ?>" class="img-top" alt="Eror">
                    <div class="card-header">
                    </div>
                    <div class="card-block">
                        <h4 class="card-title text-info">
                            Name: <?php echo $row['name'] ?>
                        </h4>
                        <p>
                            Email: <?php echo $row['email'] ?>
                        </p>
                        <p>
                        </p>
                        Phone: <p> <?php echo $row['phone'] ?>
                        </p>
                        <a class="btn btn-info" href="./add.php?edit=<?php echo $userId?>"> Edit</a>
                    </div>
                </div>
            </div>
     
        </div>
    </div>

</section><!-- End Pricing Section -->

<?php
include '../shared/footer.php';
include '../shared/script.php';

?>