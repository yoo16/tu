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
