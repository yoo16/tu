<?php

require_once '../setting.php';

// カラム
const USER_COLUMNS = ['name', 'email', 'password'];

function initUser()
{
    // ファイルがなければカラム追加
    if (!file_exists(USER_CSV)) {
        $file = fopen(USER_CSV, 'w');
        fputcsv($file, USER_COLUMNS);
        fclose($file);
    }
}

function save(array $data)
{
    // 書き込みデータ生成
    foreach (USER_COLUMNS as $column) {
        echo $column;
    }
}

$user = [
    'name' => 'Alice',
    'email' => 'alice@test.com',
    'password' => '1111',
];

initUser();
save($user);
?>