<?php
include '../shared/head.php';
include '../shared/header.php';
include '../shared/aside.php';
include '../sharedFunc/db.php';
include '../sharedFunc/func.php';
$selecta = "SELECT * FROM `trackes`";
$tracks = mysqli_query($conn, $selecta);

$selectt = "SELECT * FROM `levels`";
$levels = mysqli_query($conn, $selectt);

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $link = $_POST['link'];
    $adminid = $_SESSION['adminId'];
    $trackId = $_POST['trackId'];
    $levelId = $_POST['levelId'];
    // Image Code
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $location = "upload/" . $image_name;
    if (move_uploaded_file($image_tmp, $location)) {
        echo "image Uploaded Done";
    } else {
        echo "image Uploaded false";
    }
    $insert = "INSERT INTO `courses` VALUES (NULL ,'$name','$link', '$image_name',$adminid, $trackId,$levelId )";
    $i = mysqli_query($conn, $insert);
    testMessage($i, "Insert Course");
}


$name = '';
$link = '';
$update = false;
if (isset($_GET['edit'])) {
    $update = true;
    $id =   $_GET['edit'];
    $select = "SELECT * from `courses` where id = $id";
    $ss = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($ss);
    $name = $row['name'];
    $link = $row['link'];
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $link = $_POST['link'];
        $adminid = $_SESSION['adminId'];
        $trackId = $_POST['trackId'];
        $levelId = $_POST['levelId'];

        $update = "UPDATE `courses` SET `name` = '$name', `link` = '$link', trackId = $trackId ,levelId= $levelId  where id = $id";
        $u = mysqli_query($conn, $update);
        testMessage($u, "Updated Course");
    }
}
?>
<main id="main" class="main">
    <div class="pagetitle">
        <?php if ($update) : ?>
            <h1 class="display-1 text-center text-warning"> courses Update page </h1>
        <?php else : ?>
            <h1 class="display-1 text-center text-info">courses Add page </h1>
        <?php endif; ?>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">add courses</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="container">

            <div class="row">
                <div class="card col-lg-9">
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label> Name : </label>
                                <input required class="form-control" value="<?php echo $name ?>" name="name" type="text">
                            </div>
                            <div class="form-group">
                                <label> Link : </label>
                                <input required class="form-control" value="<?php echo $link ?>" name="link" type="text">
                            </div>
                            <div class="form-group">
                                <label> Coourse Image : </label>
                                <input required class="form-control" name="image" type="file">
                            </div>
                            <div class="form-group">
                                <label> Tack : </label>
                                <select required class="form-control" name="trackId">
                                    <?php foreach ($tracks as $data) { ?>
                                        <option value="<?php echo  $data['id'] ?>"><?php echo  $data['title'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label> level : </label>
                                <select required class="form-control" name="levelId">
                                    <?php foreach ($levels as $data) { ?>
                                        <option value="<?php echo  $data['id'] ?>"><?php echo  $data['title'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <?php if ($update) : ?>
                                <button name="update" class="mt-4 btn btn-primary btn-block w-50 mx-auto">Update Track </button>
                            <?php else : ?>
                                <button name="send" class=" mt-4 btn btn-info btn-block w-50 mx-auto"> Add Track</button>
                            <?php endif; ?>
                        </form>
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