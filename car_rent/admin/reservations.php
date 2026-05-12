<?php

require_once '../inc/functions.php';

require_admin();

$title = "Reserveeringud";

require_once '../inc/header.php';

$conn = db();

$sql = "SELECT * FROM reservations ORDER BY id DESC";

$result = $conn->query($sql);

?>

<div class="container py-4">

    <h1>Reserveeringud</h1>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>Nimi</th>
            <th>Email</th>
            <th>Algus</th>
            <th>Lõpp</th>
        </tr>

        <?php while ($row = $result->fetch_assoc()) { ?>

            <tr>

                <td><?php echo $row['id']; ?></td>

                <td><?php echo $row['name']; ?></td>

                <td><?php echo $row['email']; ?></td>

                <td><?php echo $row['start_date']; ?></td>

                <td><?php echo $row['end_date']; ?></td>

            </tr>

        <?php } ?>

    </table>

</div>

<?php require_once '../inc/footer.php'; ?>