<?php

$template = "";
// here we print the table for each hotel with its properties
foreach ($hotelS as $hotel) {
    $template .= "<tr><td><a href='Details/pages.php?name={$hotel['name']}'>{$hotel['name']}</a></td> <td>{$hotel['description']}</td> <td>{$hotel['parking']}</td> <td>{$hotel['vote']}</td> <td>{$hotel['distance_to_center']}</td> </tr>";
};

?>

<div class="container">
<table class="table table-dark table-striped">
    <thead>
        <tr class="text-center">
            <th scope="col"><i class="fa-solid fa-hotel"></i> Hotel</th>
            <th scope="col"><i class="fa-solid fa-bars"></i></i> Description</th>
            <th scope="col"><i class="fa-solid fa-square-parking"></i> Parking</th> 
            <th scope="col">
            <i class="fa-solid fa-check-to-slot"></i> Stars</th>
            <th scope="col"><i class="fa-solid fa-road-circle-check"></i> Distance from the city center</th>
        </tr>
    </thead>
    <tbody class="text-center">
    <?php echo $template ?>
    </tbody>
</div>

</table>