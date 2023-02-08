<div class="container">
    <h2 class="p-2">カート</h2>

    <?php if ($cart_items) : ?>
        <table class="table">
            <tr>
                <th>商品名</th>
                <th>価格</th>
                <th>個数</th>
                <th></th>
            </tr>
            <?php foreach ($cart_items as $cart_item) : ?>
                <tr>
                    <td><?= $cart_item['item']['name'] ?></td>
                    <td>
                        ¥<?= number_format($cart_item['item']['price']) ?>
                    </td>
                    <td>
                        <form action="add.php" method="get">
                            <div class="input-group">
                                <input class="form-control form-control-sm" type="number" name="count" value="<?= $cart_item['count'] ?>">
                                <button class="btn btn-primary btn-sm">更新</button>
                            </div>

                            <input type="hidden" name="id" value="<?= $cart_item['item']['id'] ?>">
                        </form>

                    </td>
                    <td>
                        <a class="btn btn-danger btn-sm" href="remove.php?id=<?= $cart_item['item']['id'] ?>">削除</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>

        <div class="text-end">
            <h3 class="h3">合計金額</h3>
            <p>
                ¥<?= number_format($total_price) ?>
            </p>
        </div>

        <?php if (isset($_SESSION['auth_user'])) : ?>
            <form action="purchase.php" method="post">
                <p>購入してもよろしいですか？</p>
                <button class="btn btn-primary">購入</button>
            </form>
        <?php endif ?>

    <?php else : ?>
        商品がありません。
    <?php endif ?>


</div>