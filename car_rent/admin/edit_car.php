<?php

require_once '../inc/functions.php';

require_admin();

$id = $_GET['id'];

$car = get_car($id);

if (!$car) {
    echo "Autot ei leitud.";
    exit;
}

$title = "Muuda auto";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $mark = $_POST['mark'];
    $model = $_POST['model'];
    $engine = $_POST['engine'];
    $fuel = $_POST['fuel'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $year = $_POST['year'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $conn = db();

    $sql = "UPDATE cars SET
            mark = '$mark',
            model = '$model',
            engine = '$engine',
            fuel = '$fuel',
            price = '$price',
            image = '$image',
            year = '$year',
            description = '$description',
            status = '$status'
            WHERE id = $id";

    $conn->query($sql);

    header("Location: index.php");
    exit;
}

require_once '../inc/header.php';

?>

<div class="container py-4">

    <h1>Muuda auto</h1>

    <?php include 'car_form.php'; ?>

</div>

<?php require_once '../inc/footer.php'; ?>