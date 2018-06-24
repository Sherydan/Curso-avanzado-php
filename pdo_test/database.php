<?php
   $host = 'localhost';
   $user = 'root';
   $password = 'root';
   $dbname = 'blog';

   $dsn = 'mysql:host='. $host . ';dbname=' . $dbname;
   $options = array(
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    );
    
   $pdo = new PDO($dsn, $user, $password, $options);

   $query ='SELECT * FROM tbl_post WHERE author = ?';
   $stmt = $pdo->prepare($query);
   $stmt->execute(['Luis']);

   $posts = $stmt->fetchAll();

   foreach ($posts as $post) {
        echo $post->title . '<br>';
        echo $post->body . '<br>';
        echo $post->created_at . '<br>';
   }




?>