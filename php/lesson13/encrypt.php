<?php 

$data = "こんにちは";

const METHOD = "AES-256-CBC";
const KEY = "key1234";

// IV自動生成
$iv_length = openssl_cipher_iv_length(METHOD);
$iv = openssl_random_pseudo_bytes($iv_length);

// 暗号化
$encrypt = openssl_encrypt($data, METHOD, KEY, 0, $iv);

// 複合化
$decrypt = openssl_decrypt($encrypt, METHOD, KEY, 0, $iv);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>暗号化</title>
</head>
<body>
    <h2>データ</h2>
    <p><?= $data ?></p>
    <h2>暗号メソッド</h2>
    <p><?= METHOD ?></p>
    <h2>キー</h2>
    <p><?= KEY ?></p>
    <h2>IV</h2>
    <p><?= $iv_length ?></p>
    <p><?= $iv ?></p>
    <h2>暗号化</h2>
    <p><?= $encrypt ?></p>
    <h2>複合化</h2>
    <p><?= $decrypt ?></p>
</body>
</html>