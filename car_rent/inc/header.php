<?php
$isAdminPage = strpos($_SERVER['SCRIPT_NAME'], '/admin/') !== false;
?>

<!doctype html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <title>Autorent</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $isAdminPage ? '../assets/css/style.css' : 'assets/css/style.css'; ?>" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-white border-bottom">
    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            Autorent<?php if ($isAdminPage) echo " admin"; ?>
        </a>

        <div class="navbar-nav me-auto">

            <?php if ($isAdminPage) { ?>

                <a class="nav-link" href="index.php">Autod</a>
                <a class="nav-link" href="reservations.php">Reserveeringud</a>
                <a class="nav-link" href="users.php">Kasutajad</a>

            <?php } else { ?>

                <a class="nav-link" href="index.php">Avaleht</a>
                <a class="nav-link" href="autod.php">Autod</a>
                <a class="nav-link" href="hinnad.php">Hinnad</a>
                <a class="nav-link" href="kontakt.php">Kontakt</a>

            <?php } ?>

        </div>

        <?php if ($isAdminPage) { ?>

            <a class="btn btn-outline-secondary btn-sm" href="logout.php">Logout</a>

        <?php } else { ?>

            <form action="autod.php" method="get" class="d-flex">
                <input class="form-control form-control-sm me-2" name="q" placeholder="Otsi marki või mudelit">
                <button class="btn btn-dark btn-sm">Otsi</button>
            </form>

        <?php } ?>

    </div>
</nav>
