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
                <div class="d-flex ">
                    <button type="submit" data-bs-toggle="modal" data-bs-target="#meal" class="btn btn-primary">Add Meal</button>
                    <div class="modal fade" id="meal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Adding Meals</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="process.php" method="POST">
                                        <div class="input-group mb-3">
                                            <div class="input-group-text"><i class="bi"></i></div>
                                            <input type="text" name="meal_name" class="form-control" placeholder="Enter Meal Name" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-text"><i class="bi"></i></div>
                                            <input type="number" name="meal_cal" class="form-control" placeholder="Enter Meal Caclories" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-text"><i class="bi"></i></div>
                                            <select name="meal_day" class="form-control" required>
                                                <option value="">--Select Day</option>
                                                <option value="Sunday">Sunday</option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-text"><i class="bi"></i></div>
                                            <select name="meal_type" class="form-control" required>
                                                <option value="">--Select Day</option>
                                                <option value="Breakfast">Breakfast</option>
                                                <option value="Lunch">Lunch</option>
                                                <option value="Dinner">Dinner</option>
                                                <option value="Snacks">Snacks</option>
                                            </select>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="create_meal" class="btn btn-primary">Add Meal</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-ripped mt-3">
                    <thead>
                        <tr>
                            <th>Meal Name</th>
                            <th>Meal Type</th>
                            <th>Meal Cal</th>
                            <th>Meal Day</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $get_meal = mysqli_query($conn, "SELECT * FROM meals");
                        while ($meal = mysqli_fetch_array($get_meal)) {


                        ?>
                            <tr>
                                <td><?= $meal['meal_name'] ?></td>
                                <td><?= $meal['meal_type'] ?></td>
                                <td><?= $meal['meal_cal']  ?>g</td>
                                <td><?= $meal['meal_day'] ?></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-success" type="submit" data-bs-target="modal" data-bs-toggle="modal">Edit</button>
                                        <a href="process.php?delete_meal&&meal_id=<?= $meal['meal_id']  ?>" onclick="return confirm('Do you want to delete this meal ?')" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>

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