<?php
require '../koneksi.php';
$idHeader= $_GET["id"];

    if ( hapusHeader($idHeader) > 0 ) {
        echo "    
                  <script>
                      alert('Data Berhasil Dihapus!');
                      document.location.href = '../header.php';
                  </script> 
              ";
      } else{
          echo " 
                  <script>
                      alert('Data Gagal Dihapus!');
                      document.location.href = '../header.php';
                  </script> 
              " ;
      }
?>