<?php 
    // Development Connection
   $host = '127.0.0.1';
    $db = 'vacancy_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    //Remote Database Connection
  // $host = 'remotemysql.com';
   // $db = 'wJiEQJFzJf';
  //  $user = 'wJiEQJFzJf';
   // $pass = 'wcY44V9NLd';
  //  $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
 
   $crud = new crud($pdo);
  
?>