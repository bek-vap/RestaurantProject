<h2 class="title">Choose Your Food</h2>

<div class="grid">
<?php foreach ($dishes as $d): ?>
  <div class="card">
    <div class="img-box">
      <img src="<?= htmlspecialchars($d['image']) ?>" alt="<?= htmlspecialchars($d['name']) ?>">
    </div>

    <h3><?= htmlspecialchars($d['name']) ?></h3>
    <p><?= htmlspecialchars($d['price']) ?> so'm</p>

    <form method="POST" action="/user?cat=<?= urlencode($_GET['cat'] ?? 'meals') ?>">
      <input type="hidden" name="dish" value="<?= htmlspecialchars($d['name']) ?>">
      <input type="hidden" name="user_name" value="Guest">
      <button type="submit" class="order-btn">Order Now</button>
    </form>

  </div>
<?php endforeach; ?>
</div>
