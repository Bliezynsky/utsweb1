<?php
require_once '../koneksi/connect.php';
$id = $_POST['id'];

try {
    $sql = 'DELETE FROM tbl_user WHERE id = ?';
    $qonnect = $database_connection->prepare($sql);
    $qonnect->execute([$id]);
    echo "Data Berhasil Dihapus!";
} catch (PDOException $err) {
    die("Error Deleting Data: " . $err->getMessage());
}

?>