<?php 

const APP_DIR = __DIR__ . "/app/";
const LIB_DIR = __DIR__ . "/lib/";
const DATA_DIR = __DIR__ . "/data/";
const VIEW_DIR = __DIR__ . "/views/";
const CONTROLLER_DIR = __DIR__ . "/controllers/";
const LAYOUT_DIR = VIEW_DIR . "layouts/";

const USER_CSV = DATA_DIR . "users.csv";

const ENCRYPT_METHOD = 'AES-256-CBC';
const ENCRYPT_KEY = 'key1234';
const IV = '1234567890123456';

require_once LIB_DIR . 'functions.php';
require_once LIB_DIR . 'View.php';

require_once CONTROLLER_DIR . 'Controller.php';
require_once CONTROLLER_DIR . 'UserController.php';
require_once CONTROLLER_DIR . 'LoginController.php';
require_once CONTROLLER_DIR . 'RegistController.php';
?>