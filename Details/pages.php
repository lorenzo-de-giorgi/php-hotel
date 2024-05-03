<?php
    include __DIR__ . "/../Models/hotels.php";
    include __DIR__ . "/../Views/header.php";
?>

<header>
    <h1><?php echo $_GET['name'] ?></h1>
</header>

<?php
    include __DIR__ . "/../Views/footer.php";
?>