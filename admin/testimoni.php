<?php 
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'koneksi.php';

if( isset($_POST["tambah"])){
    
    if ( tambahTesti ($_POST) > 0 ) {
      echo "<div class='alert alert-success text-center ' >
      Insert Data Berhasil
      </div>
      <meta http-equiv='refresh' content='2; url= testimoni.php'/> ";
    } else{
        echo "<div class='alert alert-danger text-center ' >
        Insert Data Gagal
        </div>
        <meta http-equiv='refresh' content='2; url= testimoni.php'/> ";
    }
}

if( isset($_POST['editTesti'])){
    
    if ( ubahTesti ($_POST) > 0 ) {
      echo "<div class='alert alert-success text-center ' >
      Data Berhasil Diubah
      </div>
      <meta http-equiv='refresh' content='2; url= testimoni.php'/> ";
    } else{
        echo "<div class='alert alert-danger text-center ' >
        Data Gagal Diubah
        </div>
        <meta http-equiv='refresh' content='2; url= testimoni.php'/> ";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dapur Mindri</title>
    <link rel="icon" type="image/png" href="../images/logo_mindri.png">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dapur Mindri</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="header.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Header</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="menu.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Menu</span></a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="testimoni.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Testimoni</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <a class="btn btn-outline-primary my-2 my-sm-0"  href="" data-toggle="modal" data-target="#logoutModal" >Logout</a>


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Testimoni</h1>
                    <br><br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModal" >Tambah Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th width="700px">Testimoni</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
                                    $i = 1;
                                    $data = mysqli_query($conn, "SELECT * FROM testimoni");
                                    while($d = mysqli_fetch_array($data)){
                                    ?>
                                        <tr>
                                            <td><?= $i++;?></td>
                                            <td><?= $d['nama'];?></td>
                                            <td><?= $d['testimoni'];?></td>
                                            <td>
                                            <a class="btn btn-info my-2 my-sm-0" id="ubah"  data-toggle="modal" data-target="#editModal" data-id="<?=$d['id_testimoni']; ?>" data-nama="<?=$d['nama']; ?>" data-testi="<?=$d['testimoni']; ?>" >Edit</a>
                                            <a href="hapus/hapus_testi.php?id=<?= $d['id_testimoni'] ?>" class="btn btn-danger my-2 my-sm-0" onclick="return confirm ('Apa kamu yakin ingin menghapus data tersebut ?')" >Hapus</a>
                                            
                                            </td>
                                            
                                        </tr>
                                    </tbody>
                                    <?php 
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Tambah Modal -->
            <div id="tambahModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Tambah Data Testimoni</h4>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">??</span>
                            </button>
						</div>
                        
                        <form method="POST">
						<div class="modal-body">
                        <input type="hidden" name="idTesti" id="idTesti">
                                <div class="form-group">
									<label>Nama</label>
									<input name="nama_testi" type="text" class="form-control" >
								</div>
                                
								<div class="form-group">
									<label>Testimoni</label>
									<textarea class="form-control" name="hasil_testi"  rows="13" ></textarea>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
								<button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
							</div>
						</form>
					</div>
				</div>
			</div>
            <!-- Edit Modal -->
            <div id="editModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Edit Data Testimoni</h4>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">??</span>
                            </button>
						</div>
                        
                        <form method="POST">
						<div class="modal-body">
                            <input type="hidden" name="id_testi" id="id_testi">
                                <div class="form-group">
									<label>Nama</label>
									<input name="nama" id= "nama" type="text" class="form-control" >
								</div>
                                
								<textarea class="form-control" name="testi" id="testi"  rows="13" ></textarea>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
								<button type="submit" class="btn btn-primary" name="editTesti">Ubah</button>
							</div>
						</form>
					</div>
				</div>
			</div>
            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">??</span>
                                    </button>
                                </div>
                            
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="logout.php">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Admin Dapur Mindri</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    
</body>

    <!-- jquery -->
    <script src="vendor/jquery/jquery-2.2.4.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script>
        $(document).on("click", "#ubah", function(){
            let id = $(this).data('id');
            let nama = $(this).data('nama');
            let testi = $(this).data('testi');

            $(".modal-body #id_testi").val(id);
            $(".modal-body #nama").val(nama);
            $(".modal-body #testi").val(testi);

        });
    </script>

</html>