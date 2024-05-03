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

<header>
        <div class="ldg-header mb-5 d-flex justify-content-between container">
            <h1>Lista Hotel</h1>
            <form class="d-flex align-items-center " action="index.php" method="GET">
                <div class="p-1">
                    <select name="stats" class="form-control me-2">
                        <option value="all">All</option>
                        <option value="0">Not available</option>
                        <option value="1">Available</option>
                    </select>
                </div>
                <div class="p-1">
                    <select action="index.php" name="stars" class="form-control me-2">
                        <option value="all">All</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="p-1">
                    <button type="submit" class="ldg-button">Invia</button>
                </div>
            </form>
        </div>
    </header>

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