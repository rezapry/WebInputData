<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input Data Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-4 mb-4">
            <h2 class="card-header">Form Edit Produk</h5>
                <div class="card-body">
                    <?php
                    include 'koneksi.php';
                    $id = $_GET['id'];
                    $query = 'SELECT * FROM produk WHERE id=' . $id;

                    $data = mysqli_query($koneksi, $query);

                    while ($a = mysqli_fetch_array($data)) {
                    ?>
                        <form method="post" action="edit_action.php">
                            <div class="form-group">
                                <input type="hidden" name="id" value="<?= $a['id']; ?>">
                                <label>Kode</label>
                                <input type="text" class="form-control" name="kode" placeholder="Kode" value="<?= $a['kode']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Produk</label>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $a['nama']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jumlah</label>
                                <input type="text" class="form-control" name="jumlah" placeholder="Jumlah" value="<?= $a['jumlah']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Tanggal</label><br>
                                <input type="date" class="form-control" name="tanggal" value="<?= $a['tanggal']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Harga</label>
                                <input type="text" class="form-control" name="harga" placeholder="Harga" value="<?= $a['harga']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori">
                                    <option>~~ Pilih ~~</option>
                                    <option value="Tidak Pedas" <?= ($a['kategori'] == 'Tidak Pedas') ? 'selected' : '' ?>>Tidak Pedas</option>
                                    <option value="Pedas" <?= ($a['kategori'] == 'Pedas') ? 'selected' : '' ?>>Pedas</option>
                                </select>
                            </div>
                            <div class="row float-right">
                                <button type="submit" value="simpan" class="btn btn-primary mr-3">Submit</button>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>