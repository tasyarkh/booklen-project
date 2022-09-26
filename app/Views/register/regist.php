
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="template/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="template/assets/img/favicon.png">
  <title>
   Booklen | Register
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
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/template/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-custom opacity-6" style="background-color: #1363DF;"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome to Booklen</h1>
            <p class="text-lead text-white">Bacalah buku, karna buku adalah pangkal ilmu</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Create your account</h5>
            </div>
            <div class="row px-xl-5 px-sm-4 px-3">
              <div class="col-3 ms-auto px-1">
              </div>
              <div class="col-3 px-1">
              </div>
              <div class="col-3 me-auto px-1">
              </div>
            </div>
            <div class="card-body">
              <form role="form" method="POST" action="<?= base_url('Regist/create'); ?>">
                <?= csrf_field(); ?>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="masukan nama" aria-label="Name" id="namaUser" name="namaUser" require>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="masukan username" aria-label="username" id="username" name="username" require>
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" placeholder="masukan password" aria-label="Password" for="exampleInputPassword1"id="exampleInputPassword1" name="password" require>
                </div>
                <div class="mb-3">
                        <select class="form-control" aria-label="Default select example" name="level" required>
                            <option selected>Pilih level user</option>
                            <option value="1">Manager</option>
                            <option value="2">User</option>
                        </select>
                </div>
                <div class="text-center">
                  <input type="submit" class="btn bg-gradient-custom w-100 my-4 mb-2" style="background-color: #47B5FF; color: white;" name="Simpan" value="Register">
                  </input>
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="<?= base_url('/login')?>" class="text-custom font-weight-bolder" style="color: #1363DF;">Login</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    <?php if (session()->getFlashdata('berhasil')) { ?>
        Swal.fire({
            icon: 'success',
            title: 'Register Berhasil',
            text: 'Selamat akun anda sudah dibuat',
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