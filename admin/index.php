<?php 
session_start();

if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'koneksi.php';

$menu = mysqli_query($conn, "SELECT * FROM menu");

$testimoni = mysqli_query($conn, "SELECT * FROM testimoni");

if( isset($_POST["edit"])){
    

    if ( ubahPassword ($_POST) > 0 ) {
      echo "<div class='alert alert-success text-center ' >
      Update Data Berhasil
      </div>
      <meta http-equiv='refresh' content='2; url= index.php'/> ";
    } else{
        echo "<div class='alert alert-danger text-center ' >
        Update Data Gagal
        </div>
        <meta http-equiv='refresh' content='2; url= index.php'/> ";
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
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard Dapur Mindri</h1>
                        <?php
                        $data = mysqli_query($conn, "SELECT * FROM admin");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                            <a class="btn btn-primary my-2 my-sm-0"  id="ubah"  data-toggle="modal" data-target="#editModal" data-id="<?=$d['id']; ?>" data-nama="<?=$d['username']; ?>" data-password="<?=$d['password']; ?>" ><i
                                class="fas fa-key fa-sm text-white-50"></i> Ubah Password</a>
                    <?php 
                        }
                    ?>
                    </div>

        <div class="row">

 
    <div class="col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="font-weight-bold text-info text-uppercase mb-1">Jumlah Menu
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= mysqli_num_rows($menu) ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-4x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class=" font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Testimoni</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= mysqli_num_rows($testimoni) ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-comments fa-4x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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
<!-- Edit Modal -->

<div id="editModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Ubah Password</h4>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
						</div>
                        
                        <form method="POST">
						<div class="modal-body">
                            <input type="hidden" name="id" id="id">
                                <div class="form-group">
									<label>Username</label>
									<input name="username" id= "username" type="text" class="form-control" >
								</div>
                                
								<div class="form-group">
									<label>Pasword</label>
									<input name="pw" id="pw" type="password" class="form-control" >
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
								<button type="submit" class="btn btn-primary" name="edit">Ubah</button>
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
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                       
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
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
            let password = $(this).data('password');

            $(".modal-body #id").val(id);
            $(".modal-body #username").val(nama);
            
            
        });
    </script>
</html>