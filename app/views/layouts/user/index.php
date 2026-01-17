<h2 class="title">Choose Your Food</h2>

<div class="grid">
<?php foreach ($dishes as $d): ?>
  <div class="card">
    <div class="img-box">
      <img src="<?= $d['image'] ?>" alt="<?= $d['name'] ?>">
    </div>

    <h3><?= $d['name'] ?></h3>
    <p><?= $d['price'] ?> so'm</p>

    <button class="order-btn">
      Order Now
    </button>
  </div>
<?php endforeach; ?>
</div>

// End of file app/views/layouts/user/index.php
