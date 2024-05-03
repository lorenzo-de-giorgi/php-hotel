<?php
    session_start();
    if(!isset($_SESSION['userId'])){
        session_destroy();
        header('Location: login.php');
        die();
    };

    include __DIR__ . "/Models/hotels.php";
    //var_dump($hotels);

    if (!empty($_GET['stats']) || (isset($_GET['stats']) && $_GET['stats'] == 0) && !empty($_GET['stars']) || (isset($_GET['stars']) && $_GET['stars'] == 0)) {
        $stats = $_GET['stats'];
        $stars = $_GET['stars'];
        $parking = array_filter($hotels, function ($hotel) use ($stats) {
            return $hotel['parking'] == $stats || $stats == "all";
        });
        $hotelS = array_filter($parking, function ($hotel) use ($stars) {
            return $hotel['vote'] >= $stars || $stars == "all";
        });
    } else {
        $hotelS = $hotels;
    }

    include __DIR__ . "/Views/header.php";
?>

<main class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h3><?= "Ciao" . ' ' . $_SESSION['name']?></h3>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
    <?php
        include __DIR__ . "/Views/table.php"
    ?>
</main>

<?php
    include __DIR__ . "/Views/footer.php"
?>