<?php
    include __DIR__ . "/Models/hotels.php";
    //var_dump($hotels);

    include __DIR__ . "/Views/header.php";
?>

<main class="container">
    <?php
        include __DIR__ . "/Views/table.php"
    ?>
</main>

<?php
    include __DIR__ . "/Views/footer.php"
?>