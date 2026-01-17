<?php
// $orders = mysqli_result bo'ladi (Order modeldan keladi)
?>

<div class="page">
    <div class="page-head">
        <div>
            <h1 class="page-title">Oshpaz Panel</h1>
            <p class="page-subtitle">User buyurtmalari ro'yxati (DB dan)</p>
        </div>

        <div class="page-actions">
            <a class="btn btn-outline" href="/user">Go to User Panel</a>
            <a class="btn btn-primary" href="/oshpaz">Refresh</a>
        </div>
    </div>

    <div class="card-table">
        <div class="table-head">
            <div class="badge">Orders</div>
            <div class="hint">Eng yangi buyurtmalar tepada</div>
        </div>

        <div class="table-wrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>User ID</th>
                        <th>Dish</th>
                        <th>Time</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <?php if (!$orders || $orders->num_rows === 0): ?>
                        <tr>
                            <td colspan="6" class="empty">Hali buyurtmalar yo'q.</td>
                        </tr>
                    <?php else: ?>
                        <?php while ($o = $orders->fetch_assoc()): ?>
                            <tr>
                                <td class="mono"><?= htmlspecialchars($o['id']) ?></td>

                                <td>
                                    <div class="user-cell">
                                        <div class="avatar"><?= strtoupper(substr($o['user_name'], 0, 1)) ?></div>
                                        <div class="user-meta">
                                            <div class="user-name"><?= htmlspecialchars($o['user_name']) ?></div>
                                            <div class="user-small">order_id: <span class="mono"><?= htmlspecialchars($o['id']) ?></span></div>
                                        </div>
                                    </div>
                                </td>

                                <td class="mono"><?= htmlspecialchars($o['user_id']) ?></td>

                                <td>
                                    <span class="pill"><?= htmlspecialchars($o['dish_name']) ?></span>
                                </td>

                                <td class="mono"><?= htmlspecialchars($o['created_at']) ?></td>

                                <td>
                                    <form method="POST" style="display:inline">
                                        <input type="hidden" name="order_id" value="<?= (int)$o['id'] ?>">
                                        <button type="submit" class="btn-done">Bajarildi</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>