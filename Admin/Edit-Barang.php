<?php
require_once('../Config/ClassDatabase.php');
require_once('../App/ClassBarang.php');

$edit = new Barang();

$id = $_GET['id'];
$result = $edit->showUpdate($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="../Routes/Route.php?aksi=edit" method=POST>
            <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                <input type="text" name="barang" value="<?php echo $result['nama_barang'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Harga</label>
                <input type="text" name="harga" value="<?php echo $result['harga'] ?>" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Gambar</label>
                <input type="text" name="gambar" value="<?php echo $result['gambar'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Detail Barang</label>
                <input type="text" name="detail" value="<?php echo $result['detail_produk'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <select name="kategori" class="form-select" aria-label="Default select example">
                    <option selected>Pilih Kategori</option>
                    <option value="1">1</option>
                </select>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
</body>

</html>