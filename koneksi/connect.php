<?php
    $database_host = 'localhost';
    $database_username = 'root';
    $database_password = '';
    $database_name = 'db_uts_web1_crud';

    try {
        $database_connection = new PDO("mysql:host=$database_host;dbname=$database_name",
        $database_username, $database_password);
        $cek = "Koneksi Berhasil";
        echo $cek;
    } catch (PDOException $x) {
        //throw $th;
        die($x->getMessage());
    }
?>