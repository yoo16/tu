<?php 

const BASE_URL = "http://localhost/tu/php/my_shop/";
// const BASE_URL = "http://localhost/php/my_shop/";

const APP_DIR = __DIR__ . "/app/";
const LIB_DIR = __DIR__ . "/lib/";
const DATA_DIR = __DIR__ . "/data/";
const MODEL_DIR = APP_DIR . "models/";
const VIEW_DIR = APP_DIR . "views/";
const CONTROLLER_DIR = APP_DIR . "controllers/";
const VALIDATE_DIR = APP_DIR . "validate/";
const LAYOUT_DIR = VIEW_DIR . "layouts/";

const SITE_TITLE = "My Shop";

const ENCRYPT_METHOD = 'AES-256-CBC';
const ENCRYPT_KEY = 'key1234';
const IV = '1234567890123456';

require_once LIB_DIR . 'functions.php';
require_once LIB_DIR . 'View.php';

require_once VALIDATE_DIR . 'UserValidate.php';

require_once MODEL_DIR . 'Model.php';
require_once MODEL_DIR . 'User.php';
require_once MODEL_DIR . 'Item.php';
require_once MODEL_DIR . 'CartItem.php';
require_once MODEL_DIR . 'Order.php';

require_once CONTROLLER_DIR . 'Controller.php';
require_once CONTROLLER_DIR . 'ApiController.php';
require_once CONTROLLER_DIR . 'HomeController.php';
require_once CONTROLLER_DIR . 'UserController.php';
require_once CONTROLLER_DIR . 'LoginController.php';
require_once CONTROLLER_DIR . 'RegistController.php';
require_once CONTROLLER_DIR . 'CartController.php';
