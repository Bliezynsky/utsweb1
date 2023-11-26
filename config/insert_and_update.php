<?php
require_once '../koneksi/connect.php';

$nama = $_POST['nma'];
$nohp = $_POST['no'];
$email = $_POST['mail'];
$password = $_POST['pass'];

if (!empty($_POST['id'])) {
    try {
        $sql = 'UPDATE `tbl_user` SET `nama` = ?, `nohp` = ?, `email` = ?, `password` = ? WHERE id = ?';
        $con = $database_connection->prepare($sql);
        $con->execute([$nama, $nohp, $email, $password, $_POST['id']]);
        
        echo "Data Berhasil di Update";
    } catch (PDOException $err) {
        die("Error Update Data: " . $err->getMessage());
    }
} else {
    try {
        $sql = 'INSERT INTO `tbl_user` (`nama`, `nohp`, `email`, `password`)
        VALUES (?, ?, ?, ?)';
        $qonnect = $database_connection->prepare($sql);
        $qonnect->execute([$nama, $nohp, $email, $password]);

        echo "Data Berhasil di Tambahkan";
    } catch (PDOException $err) {
        die("Error inserting data: " . $err->getMessage());
    }

}