<?php

require_once '../inc/functions.php';

$title = "Login";

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == "admin@gmail.com" && $password == "admin123") {

        $_SESSION['is_admin'] = true;

        header("Location: index.php");
        exit;

    } else {

        $error = "Vale email või parool";

    }
}

require_once '../inc/header.php';

?>

<div class="container py-5" style="max-width:500px;">

    <h1>Admin login</h1>

    <?php if ($error != "") { ?>

        <div class="alert alert-danger">
            <?php echo $error; ?>
        </div>

    <?php } ?>

    <form method="post" class="card p-4">

        <div class="mb-3">
            <label>Email</label>

            <input type="text"
                   name="email"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Parool</label>

            <input type="password"
                   name="password"
                   class="form-control">
        </div>

        <button class="btn btn-dark">
            Login
        </button>

        <div class="fs-6 text-body-secondary">admin@gmail.com  /  admin123</div>

    </form>

</div>

<?php require_once '../inc/footer.php'; ?>