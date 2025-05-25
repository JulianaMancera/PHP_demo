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

    //check if the form is submitted with the "put" method (for updating)
    $isPutRequest = ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['_method'] ?? '') === 'put');

    if($isPutRequest){
        $title = htmlspecialchars($_POST['title'] ?? '');
        $body = htmlspecialchars($_POST['body'] ?? '');


        //update statement with the placeholder for title, body and id

        $sql = 'UPDATE posts SET title = :title, body = :body, id = :id';

        //prepare the statement
        $stmt = $pdo->prepare($sql);

        //params for prepared statement
        $params = [
        'title' => $title,
        'body' => $body,
        'id' => $id
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
    <title>Edit Record</title>
</head>
<body>
    <form method="POST">
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="id" value="<?= $post['id']?>">
        <table border="1">
            <tr>
                <td><input text="text" value=""><?= $post['title']?></td>
            </tr>
            <tr>
                <td>
                    <textarea name="body">
                        <?= $post['body']?>
                    </textarea>
                </td>
            </tr>
                <tr>
                <td> <input text="submit" name="submit" value="Save"></td>
            </tr>
        </table>
    </form>
</body>
</html>