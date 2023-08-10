<?php
// - buatkan kelas sesuai dengan nama file
// - didalamnya terdapat sebuah fungsi yang bernama connection 

// ini adalah kelas, nama kelas harus sama persis dengan nama file 
class C_koneksi{

    // ini ada fungsi atau method yang bernama connection dan fungsi harus ada didalam kelas 
    public function connection(){
        // untuk isinya kita lanjutkan hari rabu 
        $conn = mysql_connect('localhost','root','','project_e-commmerce');

        if ($icon) {
            die ("koneksi gagal di buat : ".mysql_connection_error());
        }else{
            echo "koneksi berhasi dibuat";
        }
    }
    //inisialisasi objek harus di luar kls 
$koneksi = new C_koneksi();
//memanggil method atau fungsi yang ada di dalama kls c_koneksi
$koneksi->connection();
}



?>


