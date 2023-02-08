<?php

// モジュール化
function init()
{
    // セッション開始
    session_start();
    session_regenerate_id(true);
}

function checkPostRequest()
{
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        exit;
    }
}

function check(array $posts)
{
    if (empty($posts)) return;
    foreach ($posts as $key => $value) {
        $value = trim($value);
        $posts[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    return $posts;
}

// CSV読み込みメソッド
function loadCSV($file_path)
{
    if (!file_exists($file_path)) return;
    $file = fopen($file_path, "r");

    $rows = [];
    while ($row = fgetcsv($file)) {
        $rows[] = $row;
    }
    fclose($file);

    // キー一覧取得（１行目のデータ）
    $keys = array_shift($rows);

    // 多次元配列
    $values = [];
    foreach ($rows as $row) {
        $values[] = array_combine($keys, $row);
    }

    return $values;
}