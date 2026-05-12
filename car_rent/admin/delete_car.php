<?php

require_once '../inc/functions.php';

require_admin();

$id = $_GET['id'];

$conn = db();

$sql = "DELETE FROM cars WHERE id = $id";

$conn->query($sql);

header("Location: index.php");

exit;

?>