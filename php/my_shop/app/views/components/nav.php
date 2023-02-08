<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASE_URL ?>">My Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php if (isset($_SESSION['auth_user'])): ?>
        <li>
          <a class="nav-link" href="<?= BASE_URL . "user/" ?>">マイページ</a>
        </li>
        <li>
          <a class="nav-link" href="<?= BASE_URL . "cart/" ?>">カート</a>
        </li>
        <li>
          <a class="nav-link" href="<?= BASE_URL . "user/logout.php" ?>">ログアウト</a>
        </li>
        <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL . "login/" ?>">ログイン</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL . "regist/" ?>">会員登録</a>
        </li>
        <?php endif ?>
      </ul>
    </div>
  </div>
</nav>