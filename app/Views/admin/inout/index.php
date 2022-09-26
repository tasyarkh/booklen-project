
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="template/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="template/assets/img/favicon.png">
  <title>Data Peminjaman & Pengembalian | Booklen</title>
  <link href="template/vendor/https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="template/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="template/assets/fa/css/all.min.css">
  <script src="template/assets/fa/js/all.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/6.1.2/css/font-awesome.min.css" rel="stylesheet">
  <link id="pagestyle" href="template/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <link id="pagestyle" href="template/assets/css/argon-dashboard.css" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
<div class="min-height-300 bg-custom position-absolute w-100" style="background-color: #47B5FF;"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="template/assets/img/logo-ct-dark.png" class="navbar-brand-img" alt="main_logo">
        <span class="ms-1 font-weight-bold">Booklen</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a class="nav-link" href="<?= base_url('admin'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-globe text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('inout'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-arrow-up-right-dots text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pinjam & Kembali</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('datbk'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-book-atlas text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Buku</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= base_url('datusr'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= base_url('logout'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-right-from-bracket text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="<?= base_url('admin'); ?>">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Data User</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i><?= session('namaUser'); ?></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
   <div class="container-fluid py-4">
     <div class="row">
      <div class="col-lg-5" style="margin-top: 20px; width: 100%;">
        <div class="card">
        <section class="intro">
        <div class="bg-image h-100">
          <div class="align-items-center h-100">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12" style="padding-top: 15px;">
                  <label>Data Peminjaman & Pengembalian</label>
                  <div class="card shadow-2-strong" style="background-color: #ffff;">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-borderless mb-0">
                          <thead>
                            <tr>
                              <th scope="col">ID Pinjam</th>
                              <th scope="col">Nama User</th>
                              <th scope="col">Nama Buku</th>
                              <th scope="col">Tanggal Peminjaman</th>
                              <th scope="col">Tanggal Pengembalian</th>
                              <th scope="col">Status</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                            $no = 1;
                            foreach ($inout as $row) :
                          ?>
                            <tr>
                              <td style="padding-left: 23px;"><?= $row['idPinjam']; ?></td>
                              <td style="padding-left: 23px;"><?= $row['namaUser']; ?></td>
                              <td style="padding-left: 23px;"><?= $row['namaBuku']; ?></td>
                              <td style="padding-left: 23px;"><?= $row['tgl_pinjam']; ?></td>
                              <td style="padding-left: 23px;"><?= $row['tgl_kembali']; ?></td>
                              <td style="padding-left: 25px;">
                                <button type="button" class="btn btn-sm px-3 btn-light text-primary">
                                  <?= $row['status']; ?>
                                </button>
                              </td>
                            </tr>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr>
                    </div>
            </div>
      </div>
  
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">tech team XII RPL 2</a>
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">Tasya</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
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