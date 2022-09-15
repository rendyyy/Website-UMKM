<?php
require '../koneksi.php';
$idKategori = $_GET["id"];

    if ( hapusKategori($idKategori) > 0 ) {
        echo "    
                  <script>
                      alert('Data Berhasil Dihapus!');
                      document.location.href = '../kategori.php';
                  </script> 
              ";
      } else{
          echo " 
                  <script>
                      alert('Data Gagal Dihapus!');
                      document.location.href = '../kategori.php';
                  </script> 
              " ;
      }
?>