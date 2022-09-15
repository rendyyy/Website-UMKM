<?php
    require '../koneksi.php';

    $idTesti = $_GET["id"];
    
    if ( hapusTesti($idTesti) > 0 ) {
      echo "    
                <script>
                    alert('Data Berhasil Dihapus!');
                    document.location.href = '../testimoni.php';
                </script> 
            ";
    } else{
        echo " 
                <script>
                    alert('Data Gagal Dihapus!');
                    document.location.href = '../testimoni.php';
                </script> 
            " ;
    }
?>