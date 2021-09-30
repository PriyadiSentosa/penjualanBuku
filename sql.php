<?php
include "koneksi.php";
 
class query extends Dbkoneksi {
    public function login($email, $pass){

        $sql = mysqli_query($this->koneksi, "SELECT * FROM loginn WHERE email= '$email' AND pass='$pass'");

        if(mysqli_num_rows($sql) == 1){
             $row = mysqli_fetch_assoc($sql);
            return $row['id'];
        }
        else{
            return false;
        }

    }
    
    public function index()
    {

        $databuku = mysqli_query($this->koneksi, "select * from buku");
        // var_dump($databuku);
        return $databuku;
    }

    public function index1()
    {

        $databuku = mysqli_query($this->koneksi, "select * from pembeli");
        // var_dump($databuku);
        return $databuku;
    }

    public function create($nama_buku, $harga_buku)
    {
        mysqli_query(
            $this->koneksi,
            "insert into buku values(null,'$nama_buku','$harga_buku')"
        );
    }

    public function show($id_buku)
    {
        $databuku = mysqli_query(
            $this->koneksi,
            "select * from buku where id_buku='$id_buku'"
        );
        return $databuku;
    }

    // Menampilkan data berdasarkan id
    public function edit($id_buku)
    {
        $datadosen = mysqli_query(
            $this->koneksi,
            "select * from buku where id_buku='$id_buku'"
        );
        return $datadosen;
    }
    // mengupdate data berdasarkan id
    public function update($id_buku, $nama_buku, $harga_buku)
    {
        mysqli_query(
            $this->koneksi,
            "update buku set nama_buku='$nama_buku', harga_buku='$harga_buku' where id_buku='$id_buku'"
        );
    }

    // menghapus data berdasarkan id
    public function delete($id_buku)
    {
        mysqli_query($this->koneksi, "delete from buku where id_buku='$id_buku'");
    }

    public function Buat($nama, $jenis_kelamin ,$alamat,$telepon)
    {
        mysqli_query(
            $this->koneksi,
            "insert into pembeli values(null,'$nama','$jenis_kelamin','$alamat','$telepon')"
        );
    }

    public function Tampil($id)
    {
        $databuku = mysqli_query(
            $this->koneksi,
            "select * from pembeli where id='$id'"
        );
        return $databuku;
    }

    // Menampilkan data berdasarkan id
    public function Ubah($id)
    {
        $databuku = mysqli_query(
            $this->koneksi,
            "select * from pembeli where id='$id'"
        );
        return $databuku;
    }
    // mengupdate data berdasarkan id
    public function Apdet($id, $nama, $jenis_kelamin,$alamat,$telepon)
    {
        mysqli_query(
            $this->koneksi,
            "update pembeli set nama='$nama', jenis_kelamin='$jenis_kelamin' where id='$id'"
        );
    }

    // menghapus data berdasarkan id
    public function hapus($id)
    {
        mysqli_query($this->koneksi, "delete from pembeli where id='$id'");
    }

}
?>