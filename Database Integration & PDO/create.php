<?php

include('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title'] ?? '');
    $body = htmlspecialchars($_POST['body'] ?? '');

    //INSERT statement with placeholders for title and body
    $sql = 'INSERT INTO posts(title, body)VALUES(:title, :body)';

    //prepare the statement
    $stmt = $pdo->prepare($sql);

    //Paramaters
    $params = [
        'title' => $title,
        'body' => $body
    ];

    //Execute the statement
    $stmt->execute($params);

    header('Location: main.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <center>
        <h1>Create New Record</h1>
        <form method="POST" action="">
        <table border="1">
            <tr>
                <td>Enter Title: <input type="text" name="title"></td>
            </tr>
            <tr>
                <td> Enter Body: <input type="text" name="body"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Add"></td>
            </tr>
        </table>
        </form>
    </center>
    
</body>
</html>