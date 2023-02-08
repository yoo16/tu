<?php 

// 多次元連想配列
$users = [
    [
        "id" => 1,
        "name" => "Alice",
        "email" => "alice@example.com",
        "age" => 20,
    ],
    [
        "id" => 2,
        "name" => "Bob",
        "email" => "bob@example.com",
        "age" => 25,
    ],
    [
        "id" => 3,
        "name" => "Chris",
        "email" => "chris@example.com",
        "age" => 18,
    ],
];

// var_dump($users);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2>ユーザー</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>氏名</th>
            <th>Email</th>
            <th>年齢</th>
        </tr>
        <tr>
            <td><?= $users[0]["id"] ?></td>
            <td><?= $users[0]["name"] ?></td>
            <td><?= $users[0]["email"] ?></td>
            <td><?= $users[0]["age"] ?></td>
        </tr>
        <tr>
            <td><?= $users[1]["id"] ?></td>
            <td><?= $users[1]["name"] ?></td>
            <td><?= $users[1]["email"] ?></td>
            <td><?= $users[1]["age"] ?></td>
        </tr>
        <tr>
            <td><?= $users[2]["id"] ?></td>
            <td><?= $users[2]["name"] ?></td>
            <td><?= $users[2]["email"] ?></td>
            <td><?= $users[2]["age"] ?></td>
        </tr>
    </table>
</body>
</html>