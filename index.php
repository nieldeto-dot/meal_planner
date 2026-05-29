<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Meal</title>

  <!-- ======= Google Font =======-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap"
    rel="stylesheet" />
  <!-- End Google Font-->

  <!-- ======= Styles =======-->
  <link href="assets/vendors/bootstrap/bootstrap.min.css" rel="stylesheet" />
  <link
    href="assets/vendors/bootstrap-icons/font/bootstrap-icons.min.css"
    rel="stylesheet" />
  <link href="assets/vendors/glightbox/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendors/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link href="assets/vendors/aos/aos.css" rel="stylesheet" />
  <!-- End Styles-->

  <!-- ======= Theme Style =======-->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- End Theme Style-->

  <!-- ======= Apply theme =======-->
  <script>
    // Apply the theme as early as possible to avoid flicker
    (function() {
      const storedTheme = localStorage.getItem("theme") || "light";
      document.documentElement.setAttribute("data-bs-theme", storedTheme);
    })();
  </script>
</head>

<body>
  <!-- ======= Site Wrap =======-->
  <div class="site-wrap">
    <!-- ======= Header =======-->
    <header
      class="fbs__net-navbar navbar navbar-expand-lg dark"
      aria-label="freebootstrap.net navbar">
      <div
        class="container d-flex align-items-center justify-content-between">
        <!-- Start Logo-->
        <a class="navbar-brand w-auto" href="index.html">
          <!-- If you use a text logo, uncomment this if it is commented-->
          <!-- Vertex-->

          <!-- If you plan to use an image logo, uncomment this if it is commented-->

          PDNP
        </a>
        <!-- End Logo-->

        <!-- Start offcanvas-->
        <div
          class="offcanvas offcanvas-start w-75"
          id="fbs__net-navbars"
          tabindex="-1"
          aria-labelledby="fbs__net-navbarsLabel">
          <div class="offcanvas-header">
            <div class="offcanvas-header-logo">
              <!-- If you use a text logo, uncomment this if it is commented-->

              <!-- h5#fbs__net-navbarsLabel.offcanvas-title Vertex-->

              <!-- If you plan to use an image logo, uncomment this if it is commented-->
              <a
                class="logo-link"
                id="fbs__net-navbarsLabel"
                href="index.html">


            </div>
            <button
              class="btn-close btn-close-black"
              type="button"
              data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>

          <div class="offcanvas-body">
            <ul
              class="navbar-nav nav me-auto ps-lg-5 mb-2 mb-lg-0 d-flex justify-content-between">
              <li class="nav-item">
                <a
                  class="nav-link scroll-link active"
                  aria-current="page"
                  href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll-link" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll-link" href="#pricing">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll-link" href="#how-it-works">How It Works</a>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll-link" href="#services">Services</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">Account<i class="bi bi-chevron-down"></i></a>

                <ul class="dropdown-menu">
                  <li>
                    <a class="nav-link scroll-link dropdown-item" data-bs-toggle="modal" data-bs-target="#reg">Register</a>
                    <div class="modal fade" id="reg" tabindex="-1">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Account Registration</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="process.php" method="POST">
                              <div class="row">
                                <div class="col-6 mb-3">
                                  <div class="input-group">
                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                    <input type="text" name="lastname" class="form-control" required placeholder="Enter Lastname">
                                  </div>
                                </div>

                                <div class="col-6 mb-3">
                                  <div class="input-group">
                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                    <input type="text" name="firstname" class="form-control" required placeholder="Enter Firstname">
                                  </div>
                                </div>

                                <div class="col-6 mb-3">
                                  <div class="input-group">
                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                    <input type="text" name="address" class="form-control" required placeholder="Enter Address">
                                  </div>
                                </div>



                                <div class="col-6 mb-3">
                                  <div class="input-group">
                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                    <input type="text" name="height" class="form-control" required placeholder="Height in Centimeter">
                                  </div>
                                </div>

                                <div class="col-12 mb-3">
                                  <div class="input-group">
                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                    <select name="level" class="form-control">
                                      <option value="">--Level of Activity</option>
                                      <option value="30">Sedentary</option>
                                      <option value="35">Light</option>
                                      <option value="40">Moderate</option>
                                      <option value="45">Very Active</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="col-12 mb-3">
                                  <div class="input-group">
                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                    <input type="email" name="email" class="form-control" required placeholder="Enter Email">
                                  </div>
                                </div>

                                <div class="col-12">
                                  <div class="input-group">
                                    <div class="input-group-text"><i class="bi bi-person"></i></div>
                                    <input type="password" name="password" id="pass" class="form-control" required placeholder="Enter Password">
                                  </div>

                                  <input type="checkbox" onclick="showpass()">Showpassword

                                  <script>
                                    function showpass() {
                                      var x = document.getElementById('pass');
                                      if (x.type === "password") {
                                        x.type = "text";
                                      } else {
                                        x.type = "password";
                                      }
                                    }
                                  </script>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="register" class="btn btn-primary">Create Account</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>

                    <a
                      class="nav-link scroll-link dropdown-item"
                      data-bs-toggle="modal" data-bs-target="#login_admin">Login Admin</a>
                    <div class="modal" id="login_admin" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Admin Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="process.php" method="POST">
                              <div class="input-group mb-3">
                                <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                                <input type="email" name="client_email" class="form-control" required placeholder="Enter Email">
                              </div>

                              <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                                <input type="password" id="pwd" name="client_pass" class="form-control" required placeholder="Enter Password">
                              </div>
                              <input type="checkbox" class="mt-1" onclick="showpwd()">Showpassword
                              <script>
                                function showpwd() {
                                  var z = document.getElementById('pwd');
                                  if (z.type === "password") {
                                    z.type = "text";
                                  } else {
                                    z.type = "password";
                                  }
                                }
                              </script>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="login_admin" class="btn btn-primary">Login</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>

                    <a
                      class="nav-link scroll-link dropdown-item"
                      data-bs-toggle="modal" data-bs-target="#login_client">Login Client</a>
                    <div class="modal" id="login_client" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Client Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="process.php" method="POST">
                              <div class="input-group mb-3">
                                <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                                <input type="email" name="client_email1" class="form-control" required placeholder="Enter Email">
                              </div>

                              <div class="input-group">
                                <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                                <input type="password" id="pwd1" name="client_pass1" class="form-control" required placeholder="Enter Password">
                              </div>
                              <input type="checkbox" class="mt-1" onclick="showpwd1()">Showpassword
                              <script>
                                function showpwd1() {
                                  var z = document.getElementById('pwd1');
                                  if (z.type === "password") {
                                    z.type = "text";
                                  } else {
                                    z.type = "password";
                                  }
                                }
                              </script>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="login_client" class="btn btn-primary">Login</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </li>


                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link scroll-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- End offcanvas-->

        <div class="ms-auto w-auto">
          <div class="header-social d-flex align-items-center gap-1">
            <button
              class="fbs__net-navbar-toggler justify-content-center align-items-center ms-auto"
              data-bs-toggle="offcanvas"
              data-bs-target="#fbs__net-navbars"
              aria-controls="fbs__net-navbars"
              aria-label="Toggle navigation"
              aria-expanded="false">
              <svg
                class="fbs__net-icon-menu"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewbox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                <line x1="21" x2="3" y1="6" y2="6"></line>
                <line x1="15" x2="3" y1="12" y2="12"></line>
                <line x1="17" x2="3" y1="18" y2="18"></line>
              </svg>
              <svg
                class="fbs__net-icon-close"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewbox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </header>
    <!-- End Header-->

    <!-- ======= Main =======-->
    <main>
      <!-- ======= Hero =======-->
      <section class="hero__v6 section" id="home">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <div class="row">
                <div class="col-lg-11">

                  <h1
                    class="hero-title mb-3"
                    data-aos="fade-up"
                    data-aos-delay="100">
                    Secure, Efficient, and User-Friendly Meal planner
                  </h1>

                  <div
                    class="cta d-flex gap-2 mb-4 mb-lg-5"
                    data-aos="fade-up"
                    data-aos-delay="300">
                    <a class="btn" href="#">Get Started Now</a>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hero-img">
                <img

                  data-aos="fade-down"
                  data-aos-delay="600" /><img
                  class="img-main img-fluid rounded-4"
                  src="assets/images/hero1.jpg"
                  alt="Hero Image"
                  data-aos="fade-in"
                  data-aos-delay="500" />
              </div>
            </div>
          </div>
        </div>
        <!-- End Hero-->
      </section>
      <!-- End Hero-->

      <!-- End Footer-->
    </main>
  </div>


  <!-- ======= Back to Top =======-->
  <button id="back-to-top"><i class="bi bi-arrow-up-short"></i></button>
  <!-- End Back to top-->

  <!-- ======= Javascripts =======-->
  <script src="assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="assets/vendors/gsap/gsap.min.js"></script>
  <script src="assets/vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
  <script src="assets/vendors/glightbox/glightbox.min.js"></script>
  <script src="assets/vendors/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendors/aos/aos.js"></script>
  <script src="assets/vendors/purecounter/purecounter.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/send_email.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- End JavaScripts-->
</body>

</html>