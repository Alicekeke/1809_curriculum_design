<?php
header('Content-type:text/html;charset=utf-8');
try {
    $dsn="mysql:host=localhost;dbname=onlineread";
    $pdo=new PDO($dsn,'root'.'');
} catch (PDOException $e) {
    echo 'error:'.$e->getMessage();
}
$pdo->exec("set names utf8");
?>