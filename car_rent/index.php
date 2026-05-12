<?php

require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/functions.php';

$pageTitle = 'Avaleht';

require_once __DIR__ . '/inc/header.php';

$db = db();

$cars = $db->query("SELECT * FROM cars ORDER BY id DESC LIMIT 4");

?>

<div class="container py-5">

    <div class="row align-items-center mb-5">

        <div class="col-md-6">

            <h1 class="display-5 fw-bold">
                Parimad rendiautod ainult meilt!
            </h1>

            <p class="text-muted">
                Vali auto, vaata detaile ja tee broneering kuupäevade järgi.
            </p>

            <a href="autod.php" class="btn btn-dark">
                Vaata autosid
            </a>

        </div>

        <div class="col-md-6">

            <img src="https://hips.hearstapps.com/hmg-prod/images/58a6fd8b-535e-4610-b830-72333eb4e460.jpg?w=768&width=768&q=75&format=webp"
                 class="img-fluid rounded shadow"
                 alt="Auto">

        </div>

    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">

        <h2 class="h4 mb-0">
            Populaarsed autod
        </h2>

        <a href="autod.php" class="btn btn-outline-dark btn-sm">
            Kõik autod
        </a>

    </div>

    <div class="row g-4">

        <?php while ($car = $cars->fetch_assoc()) { ?>

            <div class="col-md-3">

                <div class="card h-100 shadow-sm">

                    <img src="<?php echo $car['image']; ?>"
                         class="card-img-top"
                         style="height:160px; object-fit:cover;">

                    <div class="card-body">

                        <h5 class="card-title">
                            <?php echo $car['mark']; ?>
                            <?php echo $car['model']; ?>
                        </h5>

                        <p class="small text-muted mb-2">
                            <?php echo $car['fuel']; ?> ·
                            <?php echo $car['engine']; ?>
                        </p>

                        <div class="d-flex justify-content-between align-items-center mb-2">

                            <p class="fw-bold mb-0">
                                <?php echo $car['price']; ?> €/päev
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
                           class="btn btn-dark btn-sm w-100">
                            Rendi
                        </a>

                    </div>

                </div>

            </div>

        <?php } ?>

    </div>

</div>

<?php require_once __DIR__ . '/inc/footer.php'; ?>