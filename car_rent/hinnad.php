<?php
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/functions.php';

$pageTitle = 'Hinnad';
require_once __DIR__ . '/inc/header.php';

$db = db();
$cars = $db->query("SELECT * FROM cars ORDER BY price ASC");
?>

<div class="container py-5">
    <h1 class="mb-3">Hinnad</h1>

    <p class="text-muted mb-4">
        Auto hind sõltub konkreetsest mudelist. Vaata hindu allpool.
    </p>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle bg-white">
            <thead class="table-light">
                <tr>
                    <th>Pilt</th>
                    <th>Auto</th>
                    <th>Mootor</th>
                    <th>Kütus</th>
                    <th>Hind</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($car = $cars->fetch_assoc()): ?>
                    <tr>
                        <td style="width:120px;">
                            <img src="<?= htmlspecialchars($car['image']) ?>"
                                 alt="<?= htmlspecialchars($car['mark']) ?>"
                                 style="width:100px;height:60px;object-fit:cover;border-radius:6px;">
                        </td>

                        <td>
                            <strong>
                                <?= htmlspecialchars($car['mark'] . ' ' . $car['model']) ?>
                            </strong>
                        </td>

                        <td><?= htmlspecialchars($car['engine']) ?></td>

                        <td><?= htmlspecialchars($car['fuel']) ?></td>

                        <td>
                            <strong>
                                <?= number_format((float)$car['price'], 2) ?> €/päev
                            </strong>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php require_once __DIR__ . '/inc/footer.php'; ?>