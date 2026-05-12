<?php

$c = [];

if (isset($car)) {
    $c = $car;
}

?>

<form method="post" class="card p-4">

    <div class="mb-3">
        <label>Mark</label>

        <input type="text"
               name="mark"
               class="form-control"
               value="<?php echo $c['mark'] ?? ''; ?>">
    </div>

    <div class="mb-3">
        <label>Model</label>

        <input type="text"
               name="model"
               class="form-control"
               value="<?php echo $c['model'] ?? ''; ?>">
    </div>

    <div class="mb-3">
        <label>Mootor</label>

        <input type="text"
               name="engine"
               class="form-control"
               value="<?php echo $c['engine'] ?? ''; ?>">
    </div>

    <div class="mb-3">
        <label>Kütus</label>

        <input type="text"
               name="fuel"
               class="form-control"
               value="<?php echo $c['fuel'] ?? ''; ?>">
    </div>

    <div class="mb-3">
        <label>Hind</label>

        <input type="number"
               name="price"
               class="form-control"
               value="<?php echo $c['price'] ?? ''; ?>">
    </div>

    <div class="mb-3">
        <label>Pildi link</label>

        <input type="text"
               name="image"
               class="form-control"
               value="<?php echo $c['image'] ?? ''; ?>">
    </div>

    <div class="mb-3">
        <label>Aasta</label>

        <input type="number"
               name="year"
               class="form-control"
               value="<?php echo $c['year'] ?? ''; ?>">
    </div>

    <div class="mb-3">
        <label>Kirjeldus</label>

        <textarea name="description"
                  class="form-control"><?php
        echo $c['description'] ?? '';
        ?></textarea>
    </div>

    <div class="mb-3">

        <label>Staatus</label>

        <select name="status" class="form-control">

            <option value="vaba"
            <?php if (($c['status'] ?? '') == 'vaba') echo 'selected'; ?>>
                Vaba
            </option>

            <option value="broneeritud"
            <?php if (($c['status'] ?? '') == 'broneeritud') echo 'selected'; ?>>
                Broneeritud
            </option>

            <option value="hoolduses"
            <?php if (($c['status'] ?? '') == 'hoolduses') echo 'selected'; ?>>
                Hoolduses
            </option>

        </select>

    </div>

    <button class="btn btn-dark">
        Salvesta
    </button>

    <a href="index.php" class="btn btn-secondary mt-2">
        Tagasi
    </a>

</form>