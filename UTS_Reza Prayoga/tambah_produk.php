<!DOCTYPE html>
<html lang="en">

<head>
    <title>Input Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card mt-4 mb-4">
            <h2 class="card-header">Form Tambah Produk</h5>
                <div class="card-body">
                    <!-- suruh tambahin method="post" action="tambah_action.php" kaya di bawah -->
                    <form method="post" action="tambah_action.php">
                    <!-- // -->
                    <!-- Suruh tambahin name nya di setiap inputan kaya di bawah -->
                        <div class="form-group">
                            <label>Kode</label>
                            <input type="text" class="form-control" name="kode" placeholder="Kode">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Jumlah</label>
                            <input type="text" class="form-control" name="jumlah" placeholder="Jumlah">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Tanggal</label><br>
                            <input type="date" class="form-control" name="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Harga</label>
                            <input type="text" class="form-control" name="harga" placeholder="Harga"></input>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="kategori">
                                <option>~~ Pilih ~~</option>
                                <option value="Tidak Pedas">Tidak Pedas</option>
                                <option value="Pedas">Pedas</option>
                            </select>
                        </div>
                        <div class="row float-right">
                            <button type="submit" class="btn btn-primary mr-3">Submit</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>