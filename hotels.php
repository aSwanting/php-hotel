<?php

$hotels = [
    [
        "name" => "Hotel Belvedere",
        "description" => "Hotel Belvedere Descrizione",
        "parking" => true,
        "vote" => 4,
        "distance_to_center" => 10.4,
    ],
    [
        "name" => "Hotel Futuro",
        "description" => "Hotel Futuro Descrizione",
        "parking" => true,
        "vote" => 2,
        "distance_to_center" => 2,
    ],
    [
        "name" => "Hotel Rivamare",
        "description" => "Hotel Rivamare Descrizione",
        "parking" => false,
        "vote" => 1,
        "distance_to_center" => 1,
    ],
    [
        "name" => "Hotel Bellavista",
        "description" => "Hotel Bellavista Descrizione",
        "parking" => false,
        "vote" => 5,
        "distance_to_center" => 5.5,
    ],
    [
        "name" => "Hotel Milano",
        "description" => "Hotel Milano Descrizione",
        "parking" => true,
        "vote" => 2,
        "distance_to_center" => 50,
    ],
];

// var_dump($hotels);

/* foreach ($hotels as $hotel) {
    foreach ($hotel as $key => $hotelInfo) {
    ?>
    <p><?php echo $key?></p>
    <p><?php echo $hotelInfo?></p>
    <?php
    }
} */

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Hotel Table</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>     

    <div class="container p-5">
    <h3>Hotel Listing</h3>

    <div class="table-wrapper p-3 border border-1 rounded-4 overflow-hidden">

        <!-- Table Start -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Distance to center</th>
                    </tr>
                </thead>
                <tbody>                
                    <?php foreach ($hotels as $hotel) { ?>
                        <tr>

                            <?php foreach ($hotel as $key => $hotelInfo) { ?>
                                <td>

                                    <?php 

                                        if ($key == "parking") {
                                            echo $hotelInfo ?  "Available" :  "Not available";

                                        } else if ($key == "distance_to_center") {
                                            echo $hotelInfo . " km";   

                                        } else {
                                            echo $hotelInfo;
                                        }

                                    ?> 

                                </td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <!-- Table End -->

        </div>
    </div>


</body>
</html>
