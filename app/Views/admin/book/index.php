
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="template/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="template/assets/img/favicon.png">
  <title>Data Buku | Booklen</title>
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
        <li class="nav-item ">
          <a class="nav-link" href="<?= base_url('admin'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-globe text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= base_url('inout'); ?>">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fa-solid fa-arrow-up-right-dots text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pinjam & Kembali</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('datbk'); ?>">
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
      <div class="col-lg-5" style="margin-top: 20px; width: 100%;">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">Input Buku Yang Tersedia</h6>
            </div>
            <div class="col-12 text-end" style="padding-right: 35px;">
                      <a href="#" class="btn btn-sm btn-dark w-15" style="margin-left: 85%;" data-bs-target="#tambahData" data-bs-toggle="modal"><li class="fa fa-plus" style="padding-right: 15px;"></li>Tambah Buku</a>
             </div>
            <div class="card-body p-3">
            <ul class="list-group">
            <?php
                $no = 1;
                foreach ($buku as $row) :
            ?>
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                  <h6 class="mb-3 text-sm"><?= $row['namaBuku']; ?></h6>
                    <span class="mb-2 text-xs">Author: <span class="text-dark font-weight-bold ms-sm-2"><?= $row['author']; ?></span></span>
                    <span class="mb-2 text-xs">Jenis Buku: <span class="text-dark ms-sm-2 font-weight-bold"><?= $row['genre']; ?></span></span>
                    <span class="mb-2 text-xxs">ID Buku: <span class="text-dark ms-sm-2"><?= $row['idBuku']; ?></span></span>
                  </div>
                  <div class="ms-auto text-end">
                  <a class="btn btn-link text-danger text-gradient px-3 mb-0" type="submit" href="book/delete/<?=$row['idBuku'] ?>"><i class="far fa-trash-alt me-2" ></i>Delete</a>
                    <a class="btn btn-link text-dark px-3 mb-0 update" href="#" data-bs-target="#updateBuku" data-bs-toggle="modal" data-idBuku="<?= $row['idBuku']; ?>" data-namaBuku="<?= $row['namaBuku'] ?>" data-genre="<?= $row['genre']; ?>" data-author="<?= $row['author'] ?>"><i class="fas fa-pencil-alt text-dark me-2"></i>Edit</a>
                  </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
            </div>
          </div>
        </div>
      </div>
      </div>

  <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Buku</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('/datbk/save'); ?>">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID Buku</label>
                        <input type="text" class="form-control" id="idBuku" aria-describedby="emailHelp" name="idBuku" required placeholder="ID Buku">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control" id="namaBuku" aria-describedby="emailHelp" name="namaBuku" required placeholder="Nama Buku">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" aria-describedby="emailHelp" name="author" required placeholder="Author">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Buku</label>
                        <input type="text" class="form-control" id="genre" aria-describedby="emailHelp" name="genre" required placeholder="Jenis Buku">

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
  <div class="modal fade" id="updateBuku" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Data Buku</h5>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?= base_url('/datbk/edit'); ?>">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="idBuku" class="form-label">ID Buku</label>
                        <input type="text" class="form-control" id="idBuku_u" name="idBuku" required readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
                        <input type="text" class="form-control" id="namaBuku_u" name="namaBuku" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Buku</label>
                        <input type="text" class="form-control" id="genre_u" name="genre" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author_u" name="author" required>
                    </div>
            <div class="modal-footer">
            <button class="btn btn-secondary close" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                <input type="submit" class="btn btn-primary" name="updateUser">
            </div>

            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="konfirmasi_hapus">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-trash"></i> Yakin ingin menghapus Data Buku?</h5>
            </div>
            <div class="modal-footer bg-whitesmoke br">
            <button class="btn btn-secondary close" type="button" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
             <a type="submit" class="btn btn-danger btn-ok" href="book/delete/<?=
              $row['idBuku'] ?>">Hapus</a> 
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
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">sya team XII RPL 2</a>
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
  
  
  <script src="template/assets/js/core/popper.min.js"></script>
  <script src="template/assets/js/core/bootstrap.min.js"></script>
  <script src="template/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="template/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="template/assets/js/jquery.js"></script>
  <script>
    $(document).on('click', '.update', function(e) {
        var idBuku = $(this).attr("data-idBuku");
        var namaBuku = $(this).attr("data-namaBuku");
        var genre = $(this).attr("data-genre");
        var author = $(this).attr("data-author");

        $('#idBuku_u').val(idBuku);
        $('#namaBuku_u').val(namaBuku);
        $('#genre_u').val(genre);
        $('#author_u').val(author);
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
            title: 'Buku Berhasil Ditambah'
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
            title: 'Data Buku Berhasil Diedit'
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
            title: 'Buku Berhasil Dihapus'
        })

    <?php } ?>
</script>

  <script src="template/assets/js/argon-dashboard.min.js?v=2.0.4"></script>

</body>
</html>