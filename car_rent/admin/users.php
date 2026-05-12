<?php

require_once '../inc/functions.php';

require_admin();

$title = "Kasutajad";

require_once '../inc/header.php';

?>

<div class="container py-4">

    <h1>Kasutajad</h1>

    <table class="table table-bordered">

        <tr>
            <th>Email</th>
            <th>Roll</th>
        </tr>

        <tr>
            <td>admin@gmail.com</td>
            <td>Admin</td>
        </tr>

    </table>

</div>

<?php require_once '../inc/footer.php'; ?>