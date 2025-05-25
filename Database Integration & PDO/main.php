<?php
    include('database.php');
    //require_once 'databse.php';

    //Prepare a SELECT statement
    $stmt = $pdo->prepare('SELECT * FROM posts');

    //Execute the statement
    $stmt->execute();

    //Fetch the results
    $posts = $stmt->fetchAll();

    //var_dump($posts);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
</head>
<body>
    <table border="1">
        <?php foreach ($posts as $post):?>
        <tr>
            <td><a href="selected.php?id=<?= $post['id']?>"><?= $post['title']?></a></td>
        </tr>
        <tr>
            <td><?= $post['body']?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td><a href="create.php">Create</a></td>
        </tr>
    </table>
</body>
</html>