<?php

require_once 'db.php';

function e($text) {
    return htmlspecialchars($text);
}

function is_admin() {
    if (isset($_SESSION['is_admin'])) {
        return true;
    }

    return false;
}

function require_admin() {
    if (!is_admin()) {
        header("Location: login.php");
        exit;
    }
}

function get_cars($q = "") {
    $conn = db();

    $sql = "SELECT * FROM cars ORDER BY id DESC";

    $result = $conn->query($sql);

    return $result->fetch_all(MYSQLI_ASSOC);
}

function get_car($id) {
    $conn = db();

    $sql = "SELECT * FROM cars WHERE id = $id";

    $result = $conn->query($sql);

    return $result->fetch_assoc();
}

function car_image($img) {
    return $img;
}