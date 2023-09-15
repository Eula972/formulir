<?php
 $tanggal = "";
 $nama = "";
 $rw = "";
 $rt = "";
 $hp = "";
 $tim = ""; 
 $jml = "";
 $ketua = "";
 $ktp = "";
if(isset($_POST['submit'])){
    
    $tanggal = $_POST["tgl"];
    $nama = $_POST["nama"];
    $rw = $_POST["rw"];
    $rt = $_POST["rt"];
    $hp = $_POST["hp"];
    $tim = $_POST["Tim"];
    $jml = $_POST["jml"];
    $ketua = $_POST["ketua"];
    $ktp = $_POST["ktp"];
    echo "<h2>Hasil:</h2>";
    echo "<br>";
    echo "Nama Tim: ".$nama;
    echo "<br>";
    echo "Jumlah anggota tim: ".$jml;
    echo "<br>";
    echo "Asal Rw: ".$rw;
    echo "<br>";
    echo "Asal Rt: ".$rt;
    echo "<br>";
   echo "Nama Ketua tim: ".$ketua; 
    echo "<br>";
     echo "No hp Ketua tim: ".$hp;
    echo "<br>";
    echo "Tanggal daftar: ".$tanggal;
    echo "<br>";
    echo '<img src="' . $ktp . '" alt="Deskripsi Gambar">';
    echo "<br>";
     echo "Jenis grup: ".$tim;
    echo "<br>";
}
?>