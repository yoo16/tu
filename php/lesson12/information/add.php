<?php 
// ファイルパス
$file_path = "../data/information.txt";

// データがあれば書き込み
if (isset($_POST['information']))
{
    insert($file_path, $_POST['information']);
}

// リダイレクト
header('Location: list.php');

function insert($file_path, $data)
{
    if (!file_exists($file_path)) return;
    // 追記モードで開く
    $file = fopen($file_path, "a+");

    // ファイルロック
    flock($file, LOCK_EX);
    // 改行コード追加
    $data .= PHP_EOL;
    // データ書き込み
    fputs($file, $data);
    // ロック解除
    flock($file, LOCK_UN);

    fclose($file);
}
?>