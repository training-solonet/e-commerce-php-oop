<?php
require_once('../Config/ClassDatabase.php');

class Barang extends DataBase
{

    public function show()
    {
        $query = "SELECT barang.*, kategori.* FROM barang JOIN kategori ON barang.id_kategori = kategori.id";
        $result = $this->dbConn()->query($query);
        // $query = mysqli_query($this->connection, "SELECT * from barang");

        $rows = [];
        while ($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function create($barang, $harga, $gambar, $detail, $kategori)
    {
        $query = "INSERT INTO barang (nama_barang, harga, gambar, detail_produk, id_kategori) 
                    VALUES ('$barang', '$harga', '$gambar', '$detail', $kategori)";
        $result = $this->dbConn()->query($query);
    }

    public function delete($id)
    {
        $query = "DELETE FROM barang WHERE id = $id";
        $result = $this->dbConn()->query($query);
    }

    public function showUpdate($id)
    {
        $query = "SELECT * FROM barang WHERE id = $id";
        $result = $this->dbConn()->query($query);

        return $result->fetch_assoc();
    }

    public function update($id, $barang, $harga, $gambar, $detail, $kategori)
    {
        $query = "UPDATE barang SET nama_barang = '$barang', harga = '$harga', 
        gambar = '$gambar', detail_produk = '$detail', id_kategori = '$kategori' WHERE id = $id";

        $result = $this->dbConn()->query($query);
    }
}
