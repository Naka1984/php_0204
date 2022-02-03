<?php
try {
    $db = new PDO('mysql:dbname=signers_db;host=localhost;charset=utf8mb4', 'root', 'root');
}   catch (PDOException $e) {
    echo "データベース接続エラー　：".$e->getMessage();
}
?>