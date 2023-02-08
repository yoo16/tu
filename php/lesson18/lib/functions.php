<?php

function init()
{
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

function loadCSV($file_path)
{
    if (!file_exists($file_path)) return;
    $file = fopen($file_path, "r");

    $rows = [];
    while ($row = fgetcsv($file)) {
        $rows[] = $row;
    }
    fclose($file);

    $keys = array_shift($rows);

    $values = [];
    foreach ($rows as $row) {
        $values[] = array_combine($keys, $row);
    }

    return $values;
}

function encryptString(string $value)
{
    return openssl_encrypt($value, ENCRYPT_METHOD, ENCRYPT_KEY, 0, IV);
}

function decryptString(string $value)
{
    return openssl_decrypt($value, ENCRYPT_METHOD, ENCRYPT_KEY, 0, IV);
}

function view(string $name, array $data = null)
{
    $path = VIEW_DIR . "{$name}.view.php";
    if ($data) extract($data);
    include $path;
}