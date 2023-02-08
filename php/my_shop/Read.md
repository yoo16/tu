## 環境
- XAMPP, MAMP（Apache + PHP8.x が動作する環境）
- dataフォルダに書き込み権限を追加
- CSVファイルに書き込み権限を追加

## 設定
- setting.php の「BASE_URL」にプロジェクトのURLパスを設定

```php
const BASE_URL = 'http://localhost/xxxx/my_shop/';
```

## ファイル構成
```
├── api
│   └── informations.php
├── app
│   ├── controllers
│   ├── models
│   ├── validate
│   └── views
├── cart
│   ├── add.php
│   ├── index.php
│   ├── purchase.php
│   ├── remove.php
│   └── result.php
├── data
│   ├── information.txt
│   ├── items.csv
│   ├── orders.csv
│   └── users.csv
├── images
│   └── now_printing.png
├── index.php
├── js
│   └── information.js
├── lib
│   ├── View.php
│   └── functions.php
├── login
│   ├── auth.php
│   ├── index.php
│   └── input.php
├── regist
│   ├── add.php
│   ├── confirm.php
│   ├── index.php
│   ├── input.php
│   └── result.php
├── setting.php
└── user
    ├── index.php
    └── logout.php
```