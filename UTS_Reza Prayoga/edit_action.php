<!-- Suruh ketik ini semuaaaaa -->
<?php
    session_start();
    include 'koneksi.php';
    
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];

    $query = "UPDATE produk SET kode = '$kode', nama = '$nama', jumlah ='$jumlah',
    tanggal = '$tanggal', harga = '$harga', kategori ='$kategori' 
    WHERE id ='$id'";

    //variabel
    $ubah = mysqli_query($koneksi, $query) or die ("Perintah sql gagal " . mysqli_connection($koneksi));

    //tambah kondisi
    if ($ubah){
        $_SESSION['pesan'] = 'Data Produk Berhasil Diubah';
    }else{
        $_SESSION['pesan'] = 'Data Produk gagal Diubah';
    }

    header('Location: admin.php');
?>

<!-- // -->