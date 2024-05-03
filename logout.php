<?php 
    session_start();
    if(isset($_SESSION['userId'])){
        $name = $_SESSION['name'];
        session_destroy();
    } else {
        header('Location: login.php');
    }

    include __DIR__ . "/Views/header.php";
?>

<main class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h3><?= "Arrivederci" . " " . $name ?></h3>
    </div>
</main>

<?php
    include __DIR__ . "/Views/footer.php";
?>