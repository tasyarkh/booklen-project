
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="template/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="template/assets/img/favicon.png">
  <title>
    Dashboard | User
  </title>
  <link href="<?base_url() ?>/template/vendor/https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="template/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="template/assets/fa/css/all.min.css">
  <script src="template/assets/fa/js/all.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/6.1.2/css/font-awesome.min.css" rel="stylesheet">
  <link id="pagestyle" href="template/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
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
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('pikel'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-bookmark text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pinjam & Kembali</span>
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard User</h6>
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
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data User
              <a href="#" class="btn btn-sm btn-dark w-20" style="margin-left: 80%;" data-bs-target="#tambahData" data-bs-toggle="modal"><li class="fa fa-plus" style="padding-right: 9px;"></li>Tambah Peminjaman</a>
              </h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-secondary text-md opacity-7">Nama User</th>
                      <th class="text-secondary text-md opacity-7">Nama Buku</th>
                      <th class="text-secondary text-md opacity-7">Status</th>
                      <th class="text-primary text-md opacity-7">Dipinjam</th>
                      <th class="text-success text-md opacity-7">Dikembalikan</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        $no = 1;
                        foreach ($inout as $row) :
                  ?>
                    <tr>
                      <td>
                        <div class="d-flex px-3">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0"><?= $row['namaUser']; ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-3">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0"><?= $row['namaBuku']; ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-3">
                          <div class="d-flex flex-column justify-content-center">
                          <span class="badge badge-sm text-lowercase bg-gradient-<?php if ($row['status'] == 'dipinjam') {
                                                                    echo 'primary';
                                                                } else {
                                                                    echo 'success';
                                                                } ?>"><?= $row['status']; ?></span>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-3">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0"><?= $row['tgl_pinjam']; ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-3">
                          <div class="d-flex flex-column justify-content-center">
                            <p class="text-xs text-secondary mb-0"><?= $row['tgl_kembali']; ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                      <a href="#" class="btn btn-sm btn-light update" data-bs-toggle="modal" data-bs-target="#updateInout" data-idPinjam="<?= $row['idPinjam']; ?>" data-namaUser="<?= $row['namaUser'] ?>" data-namaBuku="<?= $row['namaBuku'] ?>" data-status="<?= $row['status'] ?>" data-dipinjam="<?= $row['tgl_pinjam'] ?>" data-kembali="<?= $row['tgl_kembali'] ?>"><i class="fas fa-pen"></i></a> 
                      <a href="#" data-href="<?= base_url('Inout/delete') . '/' . $row['idPinjam']; ?>" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#konfirmasi_hapus"><i class="fas fa-trash"></i></a>
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

      <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pinjam Buku</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('/pikel/save'); ?>">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Id Pinjam</label>
                        <input type="text" class="form-control" id="idPinjam" aria-describedby="emailHelp" name="idPinjam" required placeholder="Id Peminjaman">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama User</label>
                        <input type="text" class="form-control" id="namaUser" aria-describedby="emailHelp" name="namaUser" required placeholder="Nama Pengguna">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control" id="namaBuku" aria-describedby="emailHelp" name="namaBuku" required placeholder="Nama Buku">
                    </div>
                    <div class="mb-3">
                        <label for="tgl_pinjam" class="form-label">Dipinjam</label>
                        <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
                    </div>
                    <div class="mb-3">
                        <label for="tgl_kembali" class="form-label">Dikembalikan</label>
                        <input type="date" class="form-control" id="tgl_kembali" name="tgl_pinjam" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary close" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <input type="submit" class="btn btn-primary" name="Simpan" value="Simpan">
            </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="updateInout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Data Peminjaman</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('/pikel/edit'); ?>">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="idPinjam" class="form-label">ID Pinjam</label>
                        <input type="text" class="form-control" id="idPinjam_u" name="idPinjam" required readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama User</label>
                        <input type="text" class="form-control" id="namaUser_u" name="namaUser" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control" id="namaBuku_u" name="namaBuku" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Status</label>
                        <select class="form-control" aria-label="Default select example" name="status" id="status_u" required>
                            <option selected>Pilih Status</option>
                            <option value="dipinjam">dipinjam</option>
                            <option value="dikembalikan">dikembalikan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dipinjam</label>
                        <input type="date" class="form-control" id="dipinjam_u" name="tgl_pinjam" required readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dikembalikan</label>
                        <input type="date" class="form-control" id="kembali_u" name="tgl_kembali" required>
                    </div>
              </div>
            <div class="modal-footer">
            <button class="btn btn-secondary close" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <input type="submit" class="btn btn-primary" name="updateInout">
            </div>

            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi_hapus">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-trash"></i> Yakin ingin menghapus User ?</h5>
            </div>
            <div class="modal-footer bg-whitesmoke br">
            <button class="btn btn-secondary close" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
             <a type="submit" class="btn btn-danger btn-ok" href="inout/delete/<?=
              $row['idPinjam'] ?>">Hapus</a> 
            </div>
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
                <a href="" class="font-weight-bold" target="_blank">tech team</a>
                XII RPL 2
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="" class="nav-link text-muted" target="_blank">Tasya</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

  <script src="template/assets/js/jquery.js"></script>
  <script src="template/assets/js/core/popper.min.js"></script>
  <script src="template/assets/js/core/bootstrap.min.js"></script>
  <script src="template/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="template/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="template/assets/js/plugins/chartjs.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    <?php if (session()->getFlashdata('userSimpan')) { ?>
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
            icon: 'success',
            title: 'Data Transaksi Berhasil Ditambah'
        })

    <?php } ?>
    <?php if (session()->getFlashdata('userEdit')) { ?>
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
            icon: 'info',
            title: 'Data Transaksi Berhasil Diedit'
        })

    <?php } ?>
    <?php if (session()->getFlashdata('userHapus')) { ?>
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
            title: 'Data Transaksi Berhasil Dihapus'
        })

    <?php } ?>
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#konfirmasi_hapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        });
    });
</script>

  <script>
    $(document).on('click', '.update', function(e) {
        var idPinjam = $(this).attr("data-idPinjam");
        var namaUser = $(this).attr("data-namaUser");
        var namaBuku = $(this).attr("data-namaBuku");
        var status = $(this).attr("data-status");
        var dipinjam = $(this).attr("data-dipinjam");
        var kembali = $(this).attr("data-kembali");


        $('#idPinjam_u').val(idPinjam);
        $('#namaUser_u').val(namaUser);
        $('#namaBuku_u').val(namaBuku);
        $('#dipinjam_u').val(dipinjam);
        $('#kembali_u').val(kembali);

        if (status == "dipinjam") {
            $('#status_u').val('dipinjam').change();
        } else {
            $('#status_u').val('dikembalikan').change();
        }
    });
</script>

<script>
    <?php if (session()->getFlashdata('berhasil')) { ?>
        Swal.fire({
            icon: 'success',
            title: 'Login Berhasil',
            text: 'Selamat datang, <?= session('namaUser') ?>',
            timer: 3500,
            showConfirmButton: false,

        })

    <?php } ?>
</script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <script src="template/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>