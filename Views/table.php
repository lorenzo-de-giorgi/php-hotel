<?php
    $template = "";

    foreach($hotels as $hotel){
        $template .= "<tr> <td>{$hotel['name']}</td> <td>{$hotel['description']}</td> <td>{$hotel['parking']}</td> <td>{$hotel['vote']}</td><td>{$hotel['distance_to_center']}</td></tr>";
    };

?>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza dal centro città</th>
        </tr>
    </thead>
    <tbody>
        <?= $template ?>
    </tbody>
</table>