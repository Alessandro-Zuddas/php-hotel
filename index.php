<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Mine style -->
        <link rel="stylesheet" href="style.css">
        <!-- /Mine style -->
        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- /Bootstrap CDN -->
        <title>PHP Hotels</title>
    </head>
    <body>

        <div class="container">
            <h1 class="px-3 pt-2">Filtra per:</h1>
            <form class="px-3 pt-3" action="GET">
                <input type="text">
                <input type="text">
                <button class="filter-btn">Cerca</button>
            </form>
        </div>
        
        <div class="container">
            <ul class="d-flex justify-content-between px-3 mt-5">
                <?php foreach($hotels as $hotel) { ?>
                    <li class="hotel-card col-2">
                        <h1> <?php echo $hotel["name"]; ?> </h1>
                        <hr>
                        <h3> <?php echo $hotel["description"]; ?> </h3>
                        <h3> 
                            <?php 
                                if($hotel["parking"]){ ?> 
                                    <h3> Parking Available </h3> 
                            <?php } ?>
                            <?php 
                                if(!$hotel["parking"]){ ?> 
                                    <h3> Parking NOT Available </h3> 
                            <?php } ?>
                        </h3>
                        <h3> <?php echo $hotel["vote"]; ?> </h3>
                        <h3> <?php echo $hotel["distance_to_center"]; ?> </h3>
                    </li>
                <?php } ?>
            </ul>
        </div>


        <!-- Bootstrap CDN -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>       
        <!-- /Bootstrap CDN -->
    </body>
</html>