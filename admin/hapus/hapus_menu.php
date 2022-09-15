<?php
require '../koneksi.php';
$idMenu = $_GET["id"];
      if ( hapusMenu($idMenu) > 0 ) {
        echo "    
                  <script>
                      alert('Data Berhasil Dihapus!');
                      document.location.href = '../menu.php';
                  </script> 
              ";
      } else{
          echo " 
                  <script>
                      alert('Data Gagal Dihapus!');
                      document.location.href = '../menu.php';
                  </script> 
              " ;
      }

?>