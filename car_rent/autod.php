<?php

require_once 'inc/functions.php';

$title = "Autod";

$q = "";

if (isset($_GET['q'])) {
    $q = $_GET['q'];
}

$cars = get_cars($q);

require_once 'inc/header.php';

?>

<div class="container py-4">

    <h1>Autod</h1>

    <?php if ($q != "") { ?>
        <p>Otsing: <?php echo $q; ?></p>
    <?php } ?>

    <div class="row">

        <?php foreach ($cars as $car) { ?>

            <div class="col-md-3 mb-4">

                <div class="card h-100">

                    <img src="<?php echo car_image($car['image']); ?>"
                         class="card-img-top"
                         style="height:200px; object-fit:cover;">

                    <div class="card-body">

                        <h5>
                            <?php echo $car['mark']; ?>
                            <?php echo $car['model']; ?>
                        </h5>

                        <p>
                            Mootor: <?php echo $car['engine']; ?><br>
                            Kütus: <?php echo $car['fuel']; ?><br>
                            Aasta: <?php echo $car['year']; ?>
                        </p>

                        <div class="d-flex justify-content-between align-items-center mb-2">

                            <p class="fw-bold mb-0">
                                <?php echo $car['price']; ?> € / päev
                            </p>

                            <?php

                            $status = strtolower($car['status']);

                            if ($status == 'vaba') {
                                echo '<span class="badge text-bg-success">Vaba</span>';
                            }

                            if ($status == 'broneeritud') {
                                echo '<span class="badge text-bg-danger">Broneeritud</span>';
                            }

                            if ($status == 'hoolduses') {
                                echo '<span class="badge text-bg-warning">Hoolduses</span>';
                            }

                            ?>

                        </div>

                        <a href="auto.php?id=<?php echo $car['id']; ?>"
                           class="btn btn-dark w-100">
                            Rendi
                        </a>

                    </div>

                </div>

            </div>

        <?php } ?>

    </div>

</div>

<?php require_once 'inc/footer.php'; ?>