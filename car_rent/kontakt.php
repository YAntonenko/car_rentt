<?php
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/functions.php';

$pageTitle = 'Kontakt';
require_once __DIR__ . '/inc/header.php';
?>

<div class="container py-5">
    <h1 class="mb-4">Kontakt</h1>

    <div class="row">
        <div class="col-md-6">
            <p><strong>Email:</strong><br>info@autorent.ee</p>
            <p><strong>Telefon:</strong><br>+372 2549 5370</p>
            <p><strong>Aadress:</strong><br>Tallinna mnt 10, Haapsalu</p>

            <p>
                Autorent pakub lihtsat ja kiiret autorendi teenust.
                Küsimuste korral võta meiega ühendust telefoni või emaili kaudu.
            </p>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Tööajad</h5>
                    <p>E-R: 09:00 - 18:00</p>
                    <p>L: 10:00 - 15:00</p>
                    <p>P: Suletud</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/inc/footer.php'; ?>