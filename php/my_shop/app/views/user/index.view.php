<main class="m-auto w-50">
    <h2 class="p-2 text-center">ユーザーホーム</h2>
    <p>
        <?= $user['name'] ?>さん、ようこそ！
        <a href="logout.php">ログアウト</a>
    </p>

    <h3 class="p-2 text-center">購入履歴</h3>
    <div class="row">
        <?php foreach ($orders as $order) : ?>
            <div class="col-12 m-1">
                <div class="card">
                    <div class="card-header">
                        <h5>
                            <?= date('Y年m月d日', strtotime($order['created_at'])) ?>
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <?= $order['item']['name'] ?>
                            x
                            <?= $order['count'] ?>
                            個
                        </p>
                        <p class="card-text">
                            ¥<?= number_format($order['price'] * $order['count']) ?>
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <a href="<?= BASE_URL ?>cart/add.php?id=<?= $order['item']['id'] ?>" class="btn btn-primary">再度購入</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</main>