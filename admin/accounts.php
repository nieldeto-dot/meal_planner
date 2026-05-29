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
                <table class="table ">
                    <thead>
                        <tr>

                            <th>Email</th>
                            <th>Lastname</th>
                            <th>Firstname</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $get_user_info = mysqli_query($conn, "SELECT * FROM client");
                        while ($user = mysqli_fetch_array($get_user_info)) {

                        ?>
                            <tr>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['lastname'] ?></td>
                                <td><?php echo $user['firstname'] ?></td>

                                <td><a data-bs-toggle="modal" data-bs-target="#set_meal<?= $user['client_id'] ?>" class="btn btn-secondary">Set Meal</a></td>
                                <div class="modal fade" id="set_meal<?= $user['client_id'] ?>" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Meal Details </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="process.php" method="POST">
                                                    <input type="hidden" name="client_id" value="<?=  $user['client_id'] ?>">
                                                    <select name="meal_name" class="form-control mb-3">
                                                        <option value="">-select meal</option>
                                                        <?php
                                                        $get_meal = mysqli_query($conn, "SELECT * FROM meals");
                                                        while ($meal = mysqli_fetch_array($get_meal)) {


                                                        ?>
                                                            <option value="<?= $meal['meal_name'] ?>"><?= $meal['meal_name'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>

                                                    <select name="meal_type" class="form-control mb-3" >
                                                        <option value="">--select meal type</option>
                                                         <?php
                                                        $get_meal = mysqli_query($conn, "SELECT * FROM meals");
                                                        while ($meal = mysqli_fetch_array($get_meal)) {


                                                        ?>
                                                            <option value="<?= $meal['meal_type'] ?>"><?= $meal['meal_type'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>

                                                    <select name="meal_day" class="form-control">
                                                        <option value="">---assign day</option>
                                                         <?php
                                                        $get_meal = mysqli_query($conn, "SELECT * FROM meals");
                                                        while ($meal = mysqli_fetch_array($get_meal)) {


                                                        ?>
                                                            <option value="<?= $meal['meal_day'] ?>"><?= $meal['meal_day'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>

                                                    <select name="meal_cal" class="form-control mb-3">
                                                        <option value="">--calories</option>

                                                         <?php
                                                        $get_meal = mysqli_query($conn, "SELECT * FROM meals");
                                                        while ($meal = mysqli_fetch_array($get_meal)) {


                                                        ?>
                                                            <option value="<?= $meal['meal_cal'] ?>"><?= $meal['meal_cal'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                               
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" name="" class="btn btn-primary">Save changes</button>
                                            </div>
                                             </form>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        <?php

                        }
                        ?>
                    </tbody>
                </table>
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