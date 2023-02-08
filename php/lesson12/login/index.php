<?php
require_once "../lib/functions.php";

init();

if (isset($_SESSION['login'])) {
    unset($_SESSION['login']);
}
if (isset($_SESSION['errors'])) {
    unset($_SESSION['errors']);
}

header('Location: input.php');