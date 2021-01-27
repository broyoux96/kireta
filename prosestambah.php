<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$yourname   = $_POST['yourname'];
$yourmail  = $_POST['yourmail'];
$subject   = $_POST['subject'];
$msg = $_POST['msg'];


//cek dulu jika ada gambarprdk jalankan coding ini
$query = "insert into contact values('','$yourname','$yourmail','$subject','$msg')";
                    echo $query;
                    $result = mysqli_query($koneksi, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                            " - ".mysqli_error($koneksi));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      header("location:index.php?pesan=berhasil");
                    }
// // menginput data ke database
// mysqli_query($koneksi,"insert into produk values('','$yourname','$yourmail','$subject','gambarprdk')");
 
// // mengalihkan halaman kembali ke index.php
// header("location:../../index.php");
 
?>
 
