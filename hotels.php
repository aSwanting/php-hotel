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

$has_parking = $_GET["has_parking"] ?? "off";

var_dump($has_parking);

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
        <h2 class="mb-5 text-center ">Hotel Listing</h2>

            <div class="table-wrapper p-3 border border-1 rounded-4 overflow-hidden mb-5">
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

                            <?php foreach ($hotels as $hotel) {                                 
                                if($has_parking == "on" && $hotel["parking"] 
                                || $has_parking == "off")  {?>

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

                            <?php }} ?>

                        </tbody>
                    </table>
                    <!-- Table End -->
            </div>

    <form method="get" class="text-center">
        <input type="checkbox" name="has_parking">
        <label for="hasParking">Only show hotels with parking?</label>
        <input class="btn btn-outline-secondary py-0 px-2" type="submit" value="filter">
    </form>

    </div>


</body>
</html>
