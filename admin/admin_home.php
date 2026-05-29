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
          <div class="col-4">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row m-3 ">
                  <div class="col-6 ">

                    <i class="bi bi-person text-danger fs-2"></i>


                  </div>
                  <div class="col-6">
                    <h3 class="fw-bold fs-5">No of Obese</h3>
                
                  </div>
                </div>
              </div>
            </div>


          </div>

          <div class="col-4">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row m-3 ">
                  <div class="col-6 ">

                    <i class="bi bi-person text-primary fs-2"></i>


                  </div>
                  <div class="col-6">
                    <h4 class="fw-bold ">Underweight</h4>
                   
                  </div>
                </div>
              </div>
            </div>


          </div>
          <div class="col-4">
            <div class="card mb-3">
              <div class="card-body">
                <div class="row m-3 ">
                  <div class="col-6 ">

                    <i class="bi bi-person text-success fs-2"></i>


                  </div>
                  <div class="col-6">
                    <h4 class="fw-bold ">Accounts</h4>
                 
                  </div>
                </div>
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