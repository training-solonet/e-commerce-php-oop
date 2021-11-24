<?php
require_once('../Config/ClassDatabase.php');

class Kategori extends DataBase
{
    public function __construct()
    {
        parent::dbConn();
    }

    public function show()
    {
        $query = "SELECT * FROM ketagori";
        $result = $this->connection->query($query);
        $rows = [];
        while ($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function create($kategori)
    {
        $query = "INSERT INTO ketagori (nama_kategori) 
                    VALUES ('$kategori')";
        $result = $this->connection->query($query);
    }

    public function hapus($id)
    {
        $query = "DELETE FROM ketagori WHERE id = $id";
        $result = $this->connection->query($query);
    }

    public function showUpdate($id)
    {
        $query = "SELECT * FROM ketagori WHERE id = $id";
        $result = $this->connection->query($query);

        return $result->fetch_assoc();
    }

    public function update($id,$kategori)
    {
        $query = "UPDATE ketagori SET nama_kategori = '$kategori'  WHERE id = $id";

        $result = $this->connection->query($query);
    }
}
