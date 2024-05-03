<?php
    session_start();
    if(!isset($_SESSION['userId'])){
        session_destroy();
        header('Location: ../login.php');
        die();
    }

    include __DIR__ . "/../Models/hotels.php";

    $details = getHotelByName($hotels);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link grity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title><?php echo $details['name'] ?></title>

</head>
<body>
    <header class="ldg-header">
        <div class="container d-flex justify-content-between align-items-center">
            <h1><?php echo $details['name'] ?></h1>
            <a class="ldg-a" href="../index.php"><i class="fa-solid fa-arrow-left"></i> Back</a>
        </div>
    </header>
    
    <main>
        <img src="<?php echo $details['image'] ?>" alt="<?php echo $details['name'] . '' . 'image'?>">
    </main>
</body>
