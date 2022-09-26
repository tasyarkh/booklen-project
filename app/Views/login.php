
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="template/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="template/assets/img/favicon.png">
  <title>
   Booklen | login
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="template/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="template/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Login</h4>
                  <p class="mb-0" style="color: slate'">Enter your email and password to login</p>
                  <?php if (session()->getFlashdata('gagal')) : ?>
                                            <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert" style="background-color: ">
                                                <?= session()->getFlashdata('gagal'); ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div> -->
                                        <?php endif; ?>
                </div>
                <div class="card-body">
                  <form role="form" class="user" method="POST" action="<?= base_url('cekLogin'); ?>">
                  <?= csrf_field(); ?>
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="username" name="username">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" placeholder="password" aria-label="Password" id="exampleInputPassword" name="password">
                    </div>
                    <div class="text-center">
                      <input type="submit" class="btn btn-lg btn-custom btn-lg w-100 mt-4 mb-0" style="background-color: #47B5FF; color: white;" value="Login"></input>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="<?= base_url('/regist')?>" class="text-primary text-gradient font-weight-bold">Register</a>
                  </p>
                  <a href="<?= base_url('/')?>" class="text-primary text-gradient font-weight-bold">Back</a>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('template/assets/img/book.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">Booklen</h4>
                <p class="text-white position-relative">Bacalah buku, karna buku merupakan pangkal dari ilmu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        <?php if (session()->getFlashdata('gagal')) { ?>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'error',
                title: 'Username atau Password Salah !'
            })

        <?php } ?>
        <?php if (session()->getFlashdata('tidakAktif')) { ?>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: 'Maaf Akun Tidak Aktif, Segera Hubungi Administrator',
                timer: 3500,
                showConfirmButton: false,

            })

        <?php } ?>
        <?php if (session()->getFlashdata('belum')) { ?>
            Swal.fire({
                icon: 'warning',
                title: 'Anda Belum Login',
                text: 'Silahkan Login Terlebih Dahulu',
                timer: 3500,
                showConfirmButton: false,

            })

        <?php } ?>
    </script>
  <script src="template/assets/js/core/popper.min.js"></script>
  <script src="template/assets/js/core/bootstrap.min.js"></script>
  <script src="template/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="template/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="template/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>