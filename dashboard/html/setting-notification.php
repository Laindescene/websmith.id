<?php
include '../config/config.php';
$id = $_SESSION['user_id'];
?>
<!doctype html>

<html
  lang="en"
  class="layout-menu-fixed layout-compact"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Demo: Account settings - Pages | Sneat - Bootstrap Dashboard FREE</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/iconify-icons.css" />

    <!-- Core CSS -->
    <!-- build:css assets/vendor/css/theme.css  -->

    <link rel="stylesheet" href="../assets/vendor/css/core.css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->

    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- endbuild -->

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->

    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include '../components/sidebar.php'; ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php include '../components/navbar.php'; ?>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-md-12">
                  <div class="nav-align-top">
                    <ul class="nav nav-pills flex-column flex-md-row mb-6 gap-md-0 gap-2">
                      <li class="nav-item">
                        <a class="nav-link" href="account-setting.php"
                          ><i class="icon-base bx bx-user icon-sm me-1_5"></i> Account</a
                        >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="javascript:void(0);"
                          ><i class="icon-base bx bx-bell icon-sm me-1_5"></i> Notifications</a
                        >
                      </li>
                    </ul>
                  </div>
                  <div class="card">
                    <!-- Notifications -->
                    <div class="card-body">
                      <h5 class="mb-1">Recent Devices</h5>
                      <span class="card-subtitle"
                        >We need permission from your browser to show notifications.
                        <span class="notificationRequest"
                          ><span class="text-primary">Request Permission</span></span
                        ></span
                      >
                      <div class="error"></div>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="text-nowrap">Type</th>
                            <th class="text-nowrap text-center">Email</th>
                            <th class="text-nowrap text-center">Browser</th>
                            <th class="text-nowrap text-center">App</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-nowrap text-heading">New for you</td>
                            <td>
                              <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
                              </div>
                            </td>
                            <td>
                              <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="checkbox" id="defaultCheck2" checked />
                              </div>
                            </td>
                            <td>
                              <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="checkbox" id="defaultCheck3" checked />
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-nowrap text-heading">Account activity</td>
                            <td>
                              <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="checkbox" id="defaultCheck4" checked />
                              </div>
                            </td>
                            <td>
                              <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="checkbox" id="defaultCheck5" checked />
                              </div>
                            </td>
                            <td>
                              <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="checkbox" id="defaultCheck6" checked />
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-nowrap text-heading">A new browser used to sign in</td>
                            <td>
                              <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
                              </div>
                            </td>
                            <td>
                              <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
                              </div>
                            </td>
                            <td>
                              <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="checkbox" id="defaultCheck9" />
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-nowrap text-heading">A new device is linked</td>
                            <td>
                              <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                              </div>
                            </td>
                            <td>
                              <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                              </div>
                            </td>
                            <td>
                              <div class="form-check mb-0 d-flex justify-content-center align-items-center">
                                <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="card-body">
                      <h6 class="text-body mb-6">When should we send you notifications?</h6>
                      <form action="javascript:void(0);">
                        <div class="row">
                          <div class="col-sm-6">
                            <select id="sendNotification" class="form-select" name="sendNotification">
                              <option selected>Only when I'm online</option>
                              <option>Anytime</option>
                            </select>
                          </div>
                          <div class="mt-6">
                            <button type="submit" class="btn btn-primary me-3">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Discard</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /Notifications -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php include '../components/footer.php'; ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>

    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>

    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->

    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag before closing body tag for github widget button. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
