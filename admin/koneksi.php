<?php
// koneksi database
$conn = mysqli_connect("localhost","root","","db_dapur");

function query ($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahTesti($data){
    global $conn;
    
    $nama = $data["nama_testi"];
    $testi = $data["hasil_testi"];

    $query ="INSERT INTO testimoni VALUES ('', '$nama', '$testi') ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahHeader($data){
    global $conn;
    
    $judul = $data["judulH"];

    // Upload Gambar
    $gambar = uploadHeader(); 
    if(!$gambar){
        return false;
    }

    $query ="INSERT INTO header VALUES ('', '$gambar', '$judul') ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


function uploadHeader(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName= $_FILES['gambar']['tmp_name'];

    // cek ada gambar atau tidak
    if ($error === 4){
        echo "<script>
                alert('Masukkan Gambar terlebih dahulu');
            </script>";
        return false;
    }

    // cek yang diupload adalah gambar
    $extensiGambar = ['jpg', 'jpeg', 'png'];
    $x = explode('.',$namaFile); 
    $extensi = strtolower(end($x));

    if (!in_array($extensi, $extensiGambar)){
        echo "<script>
                alert('Yang anda upload bukan gambar');
            </script>";
        return false;
    }

    // Cek ukuran gambar
    if( $ukuranFile > 5000000){
        echo "<script>
                alert('Ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // upload gambar ke direktori
    move_uploaded_file($tmpName, '../images/header/'. $namaFile);

    return $namaFile;
}

function tambahKategori($data){
    global $conn;
    
    $kategori = $data["kategori"];

    $query ="INSERT INTO kategori VALUES ('', '$kategori') ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahMenu($data){
    global $conn;
    
    $judul = $data["judul"];
    $deskripsi = $data["deskripsi"];
    $harga = $data["harga"];
    $kategori = $data["kategori"];

    // Upload Gambar
    $gambar = uploadMenu(); 
    if(!$gambar){
        return false;
    }


    $query ="INSERT INTO menu VALUES ('', '$gambar', '$judul', '$deskripsi', '$harga','$kategori') ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubahMenu($data){
    global $conn;
    
    $id = $data["idMenu"];
    $judul = $data["judulMenu"];
    $deskripsi = $data["deskripsiMenu"];
    $harga = $data["hargaMenu"];
    $kategori = $data["kategoriMenu"];
    
    $query = "UPDATE menu SET 
                judul = '$judul',
                deskripsi = '$deskripsi',
                harga = '$harga',
                kategori = '$kategori'
                WHERE id_menu = $id ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function uploadMenu(){

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName= $_FILES['gambar']['tmp_name'];

    // cek ada gambar atau tidak
    if ($error === 4){
        echo "<script>
                alert('Masukkan Gambar terlebih dahulu');
            </script>";
        return false;
    }

    // cek yang diupload adalah gambar
    $extensiGambar = ['jpg', 'jpeg', 'png'];
    $x = explode('.',$namaFile); 
    $extensi = strtolower(end($x));

    if (!in_array($extensi, $extensiGambar)){
        echo "<script>
                alert('Yang anda upload bukan gambar');
            </script>";
        return false;
    }

    // Cek ukuran gambar
    if( $ukuranFile > 5000000){
        echo "<script>
                alert('Ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // upload gambar ke direktori
    move_uploaded_file($tmpName, '../images/menu/'. $namaFile);

    return $namaFile;
}

function hapusTesti($idTesti){
    global $conn;

    mysqli_query($conn, "DELETE FROM testimoni WHERE id_testimoni = $idTesti");
    return mysqli_affected_rows($conn);
}

function hapusKategori($idKategori){
    global $conn;

    mysqli_query($conn, "DELETE FROM kategori WHERE id_kategori = $idKategori");
    return mysqli_affected_rows($conn);
}

function hapusMenu($idMenu){
    global $conn;

    mysqli_query($conn, "DELETE FROM menu WHERE id_menu = $idMenu");
    return mysqli_affected_rows($conn);
}

function hapusHeader($idHeader){
    global $conn;

    mysqli_query($conn, "DELETE FROM header WHERE id_header= $idHeader");
    return mysqli_affected_rows($conn);
}

function ubahTesti($data){
    global $conn;
    
    $id = $data["id_testi"];
    $nama = $data["nama"];
    $testi = $data["testi"];

    
    $query = "UPDATE testimoni SET 
                nama = '$nama',
                testimoni = '$testi'
                WHERE id_testimoni = $id ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubahHeader($data){
    global $conn;
    
    $id = $data["id_header"];
    $judul = $data["judul"];

    
    $query = "UPDATE header SET 
                judul = '$judul'
                WHERE id_header = $id ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubahPassword($data){
    global $conn;
    
    $id = $data["id"];
    $username = $data["username"];
    $password = $data["pw"];
    
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE admin SET 
                username = '$username',
                password = '$password'
                WHERE id = $id ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}
?>