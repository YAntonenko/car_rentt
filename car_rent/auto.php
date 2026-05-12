<?php
require_once 'inc/functions.php';

if (!isset($_GET['id'])) {
    echo "Auto ID puudub.";
    exit;
}

$id = $_GET['id'];
$car = get_car($id);

if (!$car) {
    echo "Autot ei leitud.";
    exit;
}

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $start = $_POST['start_date'];
    $end = $_POST['end_date'];

    if ($name != "" && $email != "" && $start != "" && $end != "") {
        $days = (strtotime($end) - strtotime($start)) / 86400 + 1;
        $total = $days * $car['price'];

        $conn = db();

        $sql = "INSERT INTO reservations 
                (car_id, name, email, start_date, end_date, total_price, status)
                VALUES 
                ('$id', '$name', '$email', '$start', '$end', '$total', 'active')";

        $conn->query($sql);

        $msg = "Broneering salvestatud. Hind kokku: " . $total . " €";
    } else {
        $msg = "Palun täida kõik väljad.";
    }
}

require_once 'inc/header.php';
?>

<div class="container py-4">

    <h1><?= e($car['mark']) ?> <?= e($car['model']) ?></h1>

    <img src="<?= e(car_image($car['image'])) ?>" class="img-fluid rounded mb-3" style="max-width:500px;">

    <p><b>Mootor:</b> <?= e($car['engine']) ?></p>
    <p><b>Kütus:</b> <?= e($car['fuel']) ?></p>
    <p><b>Aasta:</b> <?= e($car['year']) ?></p>
    <p><b>Hind:</b> <?= e($car['price']) ?> € / päev</p>
    <p><?= e($car['description']) ?></p>

    <hr>

    <h2>Broneeri auto</h2>

    <?php if ($msg != ""): ?>
        <div class="alert alert-info"><?= e($msg) ?></div>
    <?php endif; ?>

    <form method="post">
        <p>
            <label>Nimi</label>
            <input class="form-control" type="text" name="name">
        </p>

        <p>
            <label>Email</label>
            <input class="form-control" type="email" name="email">
        </p>

        <p>
            <label>Algus</label>
            <input class="form-control" type="date" name="start_date">
        </p>

        <p>
            <label>Lõpp</label>
            <input class="form-control" type="date" name="end_date">
        </p>

        <button class="btn btn-dark">Saada broneering</button>
    </form>

</div>

<?php require_once 'inc/footer.php'; ?>