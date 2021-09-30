<?php
class Pembeli extends Database
{
    // Menampilkan Semua Data
    public function index()
    {

        $datapembeli = mysqli_query($this->koneksi, "select * From pembeli");
        // var_dump($datadosen);
        return $datapembeli;
    }

    // Menambah Data
    public function create( $nama, $jenis_kelamin, $telepon)
    {
        mysqli_query(
            $this->koneksi,
            "insert into pembeli values(null, '$nama', '$jenis_kelamin', '$alamat','$telepon')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $datapembeli = mysqli_query(
            $this->koneksi,
            "select * from pembeli where id='$id'"
        );
        return $datapembeli;
    }

    // Menampilkan data berdasarkan id
    public function edit($id)
    {
        $datapembeli = mysqli_query(
            $this->koneksi,
            "select * from pembeli where id='$id'"
        );
        return $datapembeli;
    }
    // mengupdate data berdasarkan id
    public function update($id, $nama, $jenis_kelamin, $alamat, $telepon)
    {
        mysqli_query(
            $this->koneksi,
            "update pembeli set  nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', telepon='$telepon' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from pembeli where id='$id'");
    }
}
?>