<!-- Suruh ketik ini semuaaaaa -->
<?php
    include 'koneksi.php';

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $tanggal = $_POST['tanggal'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];

    $query = "INSERT INTO produk values(null, '$kode', '$nama',  '$jumlah', '$tanggal', '$harga', '$kategori')";
    
    mysqli_query($koneksi, $query) or die ("Perintah sql gagal " . mysqli_error($koneksi));

    header('Location: admin.php');
?>

<!-- // -->