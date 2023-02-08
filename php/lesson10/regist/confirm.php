<?php
// セッション開始
session_start();
session_regenerate_id(true);

require_once '../lib/functions.php';

checkPostRequest();

// POSTデータ取得
// サニタイズ
$posts = check($_POST);

// セッション登録
$_SESSION['member'] = $_POST;

// バリデート
$errors = validate($posts);

// エラーをセッションに登録
$_SESSION['errors'] = $errors;

// エラーの場合、入力画面にリダイレクト
if ($errors) {
    header("Location: input.php");
    exit;
}

function validate(array $posts)
{
    // データチェック
    $errors = [];

    $length = mb_strlen($posts['name']);
    if (empty($posts['name'])) {
        $errors['name'] = "氏名を入力してください。";
    } else if ($length > 20) {
        $errors['name'] = "氏名は20文字以内で入力してください。";
    }
    if (empty($posts['email'])) {
        $errors['email'] = "Emailを入力してください。";
    }

    $length = mb_strlen($posts['password']);
    if (empty($posts['password'])) {
        $errors['password'] = "パスワードを入力してください。";
    } else if ($length < 4 || $length > 15) {
        $errors['password'] = "パスワードは4文字以上15文字以内で入力してください。";
    }
    return $errors;
}
?>

<!DOCTYPE html>
<html lang="ja">

<?php include("../components/head.php"); ?>

<body>
    <main class="m-auto w-50">
        <h2 class="p-2 text-center">会員登録確認</h2>
        <form action="result.php" method="post">
            <div class="form-group mt-3">
                <label class="form-label" for="">氏名</label>
                <p><?= $posts["name"] ?></p>
            </div>

            <div class="form-group mt-3">
                <label class="form-label" for="">Email</label>
                <p><?= $posts["email"] ?></p>
            </div>

            <div class="d-flex mt-3">
                <button class="btn btn-primary w-50 me-1">登録</button>
                <a href="./input.php" class="btn btn-outline-primary w-50">戻る</a>
            </div>
        </form>
    </main>
</body>

</html>