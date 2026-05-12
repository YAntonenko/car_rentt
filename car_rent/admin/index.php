<?php

require_once '../inc/functions.php';

require_admin();

$title = "Autod admin";

$cars = get_cars();

require_once '../inc/header.php';

?>

<div class="container py-4">

    <h1>Autod</h1>

    <p>Halda autorendi autode nimekirja.</p>

    <a href="add_car.php" class="btn btn-dark mb-3">Lisa auto</a>

    <table class="table table-bordered">

        <tr>
            <th>Pilt</th>
            <th>Auto</th>
            <th>Mootor</th>
            <th>Kütus</th>
            <th>Hind</th>
            <th>Staatus</th>
            <th>Kirjeldus</th>
            <th>Tegevused</th>
        </tr>

        <?php foreach ($cars as $car) { ?>

            <tr>
                <td>
                    <img src="<?php echo car_image($car['image']); ?>" width="70">
                </td>

                <td>
                    <b><?php echo $car['mark']; ?> <?php echo $car['model']; ?></b><br>
                    <?php echo $car['year']; ?>
                </td>

                <td><?php echo $car['engine']; ?></td>

                <td><?php echo $car['fuel']; ?></td>

                <td><?php echo $car['price']; ?> € / päev</td>

                <td>
                    <?php
                    $status = $car['status'];

                    if ($status == 'vaba') {
                        echo '<span class="badge text-bg-success">Vaba</span>';
                    }

                    if ($status == 'broneeritud') {
                        echo '<span class="badge text-bg-danger">Broneeritud</span>';
                    }

                    if ($status == 'hoolduses') {
                        echo '<span class="badge text-bg-warning">Hoolduses</span>';
                    }

                    if ($status == '') {
                        echo '<span class="badge text-bg-secondary">Puudub</span>';
                    }
                    ?>
                </td>

                <td><?php echo $car['description']; ?></td>

                <td>
                    <a href="edit_car.php?id=<?php echo $car['id']; ?>" class="btn btn-primary btn-sm">
                        Muuda
                    </a>

                    <a href="delete_car.php?id=<?php echo $car['id']; ?>" class="btn btn-danger btn-sm">
                        Kustuta
                    </a>
                </td>
            </tr>

        <?php } ?>

    </table>

</div>

<?php require_once '../inc/footer.php'; ?>