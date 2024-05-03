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
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" type="text/javascript" defer></script>
    <title>PHP Hotels</title>

</head>

<body>
    <header>
        <div class="ldg-header mb-5 d-flex justify-content-between">
            <h1>Lista Hotel</h1>
            <form class="d-flex align-items-center " action="index.php" method="GET">
                <div class="p-2">
                    <select name="stats" class="form-control me-2">
                        <option value="all">All</option>
                        <option value="0">Not available</option>
                        <option value="1">Available</option>
                    </select>
                </div>
                <div class="p-2">
                    <select action="index.php" name="stars" class="form-control me-2">
                        <option value="all">All</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="p-2">
                    <button type="submit" class="ldg-button">Invia</button>
                </div>
            </form>
        </div>
    </header>