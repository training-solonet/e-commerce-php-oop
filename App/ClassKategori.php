<?php
require_once('../Config/ClassDatabase.php');
// use DataBase\DataBase;

class Kategori extends DataBase
{
    public function show()
    {
        $query = "SELECT * FROM kategori";
        $result = $this->dbConn()->query($query);
        $rows = [];
        while ($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function create($kategori)
    {
        $query = "INSERT INTO kategori (nama_kategori) 
                    VALUES ('$kategori')";
        $result = $this->dbConn()->query($query);
    }

    public function hapus($id)
    {
        $query = "DELETE FROM kategori WHERE id = $id";
        $result = $this->dbConn()->query($query);
    }

    public function showUpdate($id)
    {
        $query = "SELECT * FROM kategori WHERE id = $id";
        $result = $this->dbConn()->query($query);

        return $result->fetch_assoc();
    }

    public function update($id, $kategori)
    {
        $query = "UPDATE kategori SET nama_kategori = '$kategori'  WHERE id = $id";

        $result = $this->dbConn()->query($query);
    }
}
