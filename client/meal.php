<?php
include 'inc/head.php';
?>
<div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <?php
    include 'inc/nav.php';
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php
        include 'inc/side_nav.php';
        ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow">
                            <p class="card-text d-flex m-3">User Calories:<?= $cal ?></p>
                            <div class="card-body">
                                <?php
                                date_default_timezone_set('Asia/Manila');
                                $time = date('H:i');

                                $get_mel = mysqli_query($conn, "SELECT * FROM meals");
                                while ($mel = mysqli_fetch_array($get_mel)) {
                                    $meal_name =  $mel['meal_name'];
                                    $meal_type = $mel['meal_type'];
                                    $meal_day =  $mel['meal_day'];
                                    $meal_cal = $mel['meal_cal'];
                                    $get_meal = mysqli_query($conn, "SELECT * FROM meal_plan WHERE client_id = '$client_id'");
                                    while ($meal = mysqli_fetch_array($get_meal)) {
                                    }
                                }


                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<?php
include 'inc/footer.php';
?>