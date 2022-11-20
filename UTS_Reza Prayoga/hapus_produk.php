<!-- Suruh ketik ini semuaaaaa -->
<?php
    session_start();
    include 'koneksi.php';
    
    $id = $_GET['id'];
    $query = "DELETE FROM produk WHERE id='$id'";

   //variabel
    $hapus = mysqli_query($koneksi, $query) or die;
    ("Perintah sql gagal " . mysqli_error($koneksi));

    //tambah kondisi
    if ($hapus){
        $_SESSION['pesan'] = 'Data Produk Berhasil di hapus';
    }else{
        $_SESSION['pesan'] = 'Data Produk gagal di Hapus';
    }

    header('Location: admin.php');
?>

<!-- // -->