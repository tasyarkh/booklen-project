<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="template/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="template/assets/img/favicon.png">
  <title>Data User | Booklen</title>
  <link href="template/vendor/https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="template/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="template/assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="template/assets/fa/css/all.min.css">
  <script src="template/assets/fa/js/all.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/6.1.2/css/font-awesome.min.css" rel="stylesheet">
  <link id="pagestyle" href="template/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
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
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-globe text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="peminjaman/peminjaman.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-arrow-up-right-dots text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pinjam & Kembali</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= base_url('datbk'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-book-atlas text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Buku</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('datusr'); ?>">
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
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
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Data User
              <a href="#" class="btn btn-sm btn-primary w-15" style="margin-left: 85%;" data-bs-target="#tambahData" data-bs-toggle="modal"><li class="fa fa-plus" style="padding-right: 15px;"></li>Tambah User</a>
              </h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="padding-left: 100px;">User</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        $no = 1;
                        foreach ($user as $row) :
                        ?>
                    <tr>
                      <td style="padding-left: 50px;">
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                          <?= $row['namaUser']; ?>
                            <p class="text-xs text-secondary mb-0"><?= $row['username']; ?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php if ($row['level'] == '1') {
                                        echo 'Manager';
                                    } else if ($row['level'] == '2') {
                                        echo 'User';
                                    } else {
                                        echo 'Nothing';
                                    } ?></p>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm bg-gradient-<?php if ($row['status'] == 'Aktif') {
                                                                    echo 'success';
                                                                } else {
                                                                    echo 'danger';
                                                                } ?>"><?= $row['status']; ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"><?= $row['created_at']; ?></span>
                      </td>
                      <td style="padding-left: 5%;">
                      <a href="#" class="btn btn-sm btn-warning update" data-bs-toggle="modal" data-bs-target="#updateUser"data-id="<?= $row['id']; ?>" data-namaUser="<?= $row['namaUser'] ?>" data-username="<?= $row['username']; ?>" data-status="<?= $row['status'] ?>" data-level="<?= $row['level'] ?>"><i class="fas fa-pen"></i></a> 
                      <!-- <a href="" class="btn btn-sm btn-success pass" data-bs-toggle="modal" data-bs-target="#ubahPassword" data-id="<?= $row['id']; ?>"><i class="fas fa-lock"></i></a>  -->
                      <a href="#" data-href="<?= base_url('admin/delete') . '/' . $row['id']; ?>" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#konfirmasi_hapus"><i class="fas fa-trash"></i></a>
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

<!-- Tambah Data Modal-->
<div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('/datusr/save'); ?>">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="namaUser" aria-describedby="emailHelp" name="namaUser" required placeholder="Nama Pengguna">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="emailHelp" name="username" required placeholder="Username">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="password" required placeholder="Password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Role</label>
                        <select class="form-control" aria-label="Default select example" name="level" required>
                            <option selected>Pilih Role</option>
                            <option value="1">Manager</option>
                            <option value="2">User</option>
                        </select>
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
<!-- Hapus Data Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi_hapus">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-trash"></i> Yakin ingin menghapus User ?</h5>
            </div>
            <div class="modal-footer bg-whitesmoke br">
            <button class="btn btn-secondary close" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
             <a type="submit" class="btn btn-danger btn-ok" href="admin/delete/<?=
              $row['id'] ?>">Hapus</a> 
            </div>
        </div>
    </div>

</div>

<!-- Edit Data Modal -->
<div class="modal fade" id="updateUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Data Pengguna</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('/datusr/edit'); ?>">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="id" class="form-label">ID User</label>
                        <input type="text" class="form-control" id="id_u" name="id" required readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="namaUser_u" name="namaUser" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username_u" name="username" required readonly>

                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Level</label>
                        <select class="form-control" aria-label="Default select example" name="level" required id="level_u">
                            <option>Pilih User</option>
                            <option value="1">Manager</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Status</label>
                        <select class="form-control" aria-label="Default select example" name="status" required id="status_u">
                            <option>Pilih</option>
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>

                        </select>
                    </div>
              </div>
            <div class="modal-footer">
            <button class="btn btn-secondary close" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <input type="submit" class="btn btn-primary" name="updateUser">
            </div>

            </form>
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

  <script src="template/assets/js/jquery.js"></script>
  <script src="template/assets/js/core/popper.min.js"></script>
  <script src="template/assets/js/core/bootstrap.min.js"></script>
  <script src="template/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="template/assets/js/plugins/smooth-scrollbar.min.js"></script>
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
            title: 'Data Pengguna Berhasil Ditambah'
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
            title: 'Data Pengguna Berhasil Diedit'
        })

    <?php } ?>
    <?php if (session()->getFlashdata('userPass')) { ?>
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
            title: 'Password Berhasil Dirubah'
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
            title: 'Data Pengguna Berhasil Dihapus'
        })

    <?php } ?>
</script>
<script>
    $(document).ready(function() {
        if (<?= $validation->hasError('username'); ?> == true) {
            // $('#tambahData').modal('show');

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
                title: 'Username Sudah Terdaftar'
            })


        }
    });
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
        var id = $(this).attr("data-id");
        var namaUser = $(this).attr("data-namaUser");
        var username = $(this).attr("data-username");
        var level = $(this).attr("data-level");
        var status = $(this).attr("data-status");


        $('#id_u').val(id);
        $('#namaUser_u').val(namaUser);
        $('#username_u').val(username);

        if (level == 1) {
            $('#level_u').val(1).change();
        } else if (level == 2) {
            $('#level_u').val(2).change();
        } else {
            $('#level_u').val(3).change();
        }

        if (status == "Aktif") {
            $('#status_u').val('Aktif').change();
        } else {
            $('#status_u').val('Tidak Aktif').change();
        }
    });
</script>
<script>
    $(document).ready(function() {
        $("#ikon").click(function() {
            if ($(this).hasClass("fa-eye-slash") == true) {
                $("#password_e").attr("type", "password");
                $(this).removeClass("fa-eye-slash");
                $(this).addClass("fa-eye");

            } else {
                $("#password_e").attr("type", "text");
                $(this).removeClass("fa-eye");
                $(this).addClass("fa-eye-slash");
            }
        });
    });
</script>
<script>
    $(document).on('click', '.pass', function(e) {
        var id = $(this).attr("data-id");


        $('#id_e').val(id);


    });
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