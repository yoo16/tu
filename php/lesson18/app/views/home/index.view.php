<div class="container">
    <h3 class="mt-3">お知らせ</h3>
    <div id="information"></div>

    <h3 class="mt-3">商品リスト</h3>
    <div class="row">
        <?php foreach ($items as $item): ?>
        <div class="col-md-4">
            <div class="card">
                <img src="<?= BASE_URL . 'images/now_printing.png' ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $item['name'] ?></h5>
                    <p class="card-text">¥<?= $item['price'] ?></p>
                    <a href="" class="btn btn-primary">カートに入れる</a>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>

<script src="<?= BASE_URL . 'js/information.js' ?>"></script>