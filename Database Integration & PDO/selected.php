<?php
include('database.php');
//get id from query string
$id = $_GET['id'] ?? null;

if (!$id) {
    header('Location: main.php');
    exit;
}

//Select statement with placeholder for id
$sql = 'SELECT * FROM posts WHERE id = :id';

//prepare the SELECT statement
$stmt = $pdo->prepare($sql);

//Parameters for prepared statement
$params = ['id'=>$id];

//execute the statement
$stmt->execute($params);

//fetch the post from the database
$post = $stmt->fetch();

//var_dump($post);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selected Record</title>
</head>
<body>
<table border="1">
        <tr>
            <td><?= $post['title']?></td>
        </tr>
        <tr>
            <td><?= $post['body']?></td>
        </tr>
        <tr>
            <td><a href="main.php">Back to Main</a></td>
        </tr>
        <tr>
            <td><a href="edit.php">Edit</a></td>
        </tr>
        <tr>
            <td>
                <form action="delete.php" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="id" value="<?= $post['id']?>">
                    <input type="submit" name="submit" value="Delete">
                </form>
            </td>
        </tr>
    </table>
</body>
</html>