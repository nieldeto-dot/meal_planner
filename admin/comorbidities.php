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
            <div class="content-wrapper ">

                <button type="submit" data-bs-toggle="modal" data-bs-target="#add" class="mb-3 btn btn-primary">Add Comorbidities</button>
                <div class="modal fade" id="add" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Comorbidities</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="process.php" method="POST">
                                    <div class="input-group">
                                        <div class="input-group-text"></div>
                                        <input type="text" name="cormo" class="form-control">
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="corm" class="btn btn-primary">Add</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <table class="table ">
                    <thead>
                        <tr>

                            <th>Comorbidities</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $get_como = mysqli_query($conn, "SELECT * FROM comorbidities");
                        while ($como = mysqli_fetch_array($get_como)) {

                        ?>
                            <tr>
                                <td><?php echo $como['comorbidities'] ?></td>
                                <td><a href="process.php?del_como&&como_id=<?php echo $como['como_id']; ?>" onclick="return confirm('Do you want to delete this item?')" class="btn btn-danger">Delete</a></td>

                            </tr>
                        <?php

                        }
                        ?>
                    </tbody>
                </table>

                <div class="row mt-3">
                    <?php
                    $get_cm = mysqli_query($conn, "SELECT * FROM comorbidities");
                    while ($cm = mysqli_fetch_array($get_cm)) {

                    ?>
                        <div class="col-4">
                            <div class="card ">
                                <div class="card-body d-flex justify-content-center align-items-center">
                                    <?php echo $cm['comorbidities'] ?>

                                </div>

                            </div>
                            <div class="d-flex gap-2 mt-2">
                                <button type="submit" class="btn btn-success">Set Meal Plan</button>
                                <button type="submit" class="btn btn-primary">View Meal Plan</button>

                            </div>
                        </div>
                    <?php

                    }
                    ?>

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