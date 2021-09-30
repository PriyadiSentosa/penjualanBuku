<?php 
class Dbkoneksi{

    var $db_host = 'localhost';
    var $db_user = 'root';
    var $db_pass = '';
    var $db_name = 'penjualan_buku';
    
    public $koneksi;
    
    public function __construct(){

        $this->koneksi = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if ($this->koneksi) {
            //  echo "berhasil";
        } else {
			echo "ERROR";
		}   
        
        return $this->koneksi;
    }
} 

?>