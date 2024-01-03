<?php
    
    $dbname = 'cn93741_db';
    $dbuser = 'cn93741_db';
    $dbpass = 'N2002L1978t';

    $pdo = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser,$dbpass);
    $stmt = $pdo->prepare('INSERT INTO orders(name, phone,email) VALUES(:name, :phone, :email)');
    $stmt->bindValue(':name',$_POST['name']);
    $stmt->bindValue(':phone', $_POST['phone']);
    $stmt->bindValue(':email', $_POST['email']);

    if ($stmt->execute()) {
        echo '1';
    }

