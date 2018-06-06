<?php
  $username = 'root';
    $password = '';
    $database = new POD('mysql:host=localhost;dbname=booklist;charset=UTF8;', $username, $password);
    $sql = 'SELECT * FROM books ORDER BY created_at DESC'; 
    $statement = $database->query($sql);
    $records = $statement->fetchAll();
    $statement =NULL;
    $database =NULL;
    ?>
    