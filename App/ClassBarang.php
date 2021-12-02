<?php
require_once('../Config/ClassDatabase.php');
session_start();
class Barang extends DataBase
{

    public function show()
    {
        $query = "SELECT *, barang.id as id_barang FROM barang LEFT JOIN kategori ON barang.id_kategori = kategori.id";
        $result = $this->dbConn()->query($query);

        $rows = [];
        while ($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function showKategori()
    {
        $query = "SELECT *, kategori.id as kode_kategori FROM kategori";
        $result = $this->dbConn()->query($query);

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
        $_SESSION['status'] = true;
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
        $_SESSION['sukses'] = true;
    }
}
