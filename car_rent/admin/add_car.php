<?php

require_once '../inc/functions.php';

require_admin();

$title = "Lisa auto";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $mark = $_POST['mark'];
    $model = $_POST['model'];
    $engine = $_POST['engine'];
    $fuel = $_POST['fuel'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $year = $_POST['year'];
    $description = $_POST['description'];

    $conn = db();

    $sql = "INSERT INTO cars 
    (mark, model, engine, fuel, price, image, year, description) 
    VALUES 
    ('$mark', '$model', '$engine', '$fuel', '$price', '$image', '$year', '$description')";

    $conn->query($sql);

    header("Location: index.php");
    exit;
}

require_once '../inc/header.php';

?>

<div class="container py-4">

    <h1>Lisa auto</h1>

    <form method="post">

        <div class="mb-3">
            <label>Mark</label>
            <input type="text" name="mark" class="form-control">
        </div>

        <div class="mb-3">
            <label>Model</label>
            <input type="text" name="model" class="form-control">
        </div>

        <div class="mb-3">
            <label>Mootor</label>
            <input type="text" name="engine" class="form-control">
        </div>

        <div class="mb-3">
            <label>Kütus</label>
            <input type="text" name="fuel" class="form-control">
        </div>

        <div class="mb-3">
            <label>Hind</label>
            <input type="number" name="price" class="form-control">
        </div>

        <div class="mb-3">
            <label>Pildi link</label>
            <input type="text" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label>Aasta</label>
            <input type="number" name="year" class="form-control">
        </div>

        <div class="mb-3">
            <label>Kirjeldus</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button class="btn btn-dark">
            Lisa auto
        </button>

    </form>

</div>

<?php require_once '../inc/footer.php'; ?>