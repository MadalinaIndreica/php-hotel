<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'ottimo hotel 4 stelle vicinissimo al centro,caldo e accogliente.',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro è un moderno albergo 2 stelle,dove vi sentirete a casa.',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Innovativo albergo 4 stelle, elegante e affacciato sul mare, l’occasione per una vacanza romantica e di grande charme!',
        'parking' => false,
        'vote' => 4,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista è un affascintante albergo 5 stelle, dove vivere una vacanza luxury da sogno.',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano è pensato per tutte quelle persone vogliose di intraprendere un viaggio nel cuore della movida milanese, a due passi dal centro, adatto a studenti.',
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Our best Hotels</h1>

        <form action="index.php" method="GET">
            <div>
                <label for="options">Seleziona una opzione</label>
                <select name="options" id="options">
                    <option value="" disabled selected></option>
                    <option value="A">With parking</option>
                    <option value="B">all</option>
                </select>
                <div>
                    <button class="btn btn-primary" type="submit">send</button>
                </div>
            </div>


        </form>
        <table class="table table-hover table-primary table-striped  mt-5">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">parking</th>
                    <th scope="col">vote</th>
                    <th scope="col">distance to center</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $cur_hotel) { ?>
                    <tr>
                        <th scope="row"><?php echo $cur_hotel['name']; ?></th>
                        <td><?php echo $cur_hotel['description']; ?></td>
                        <td><?php echo $cur_hotel['parking']; ?></td>
                        <td><?php echo $cur_hotel['vote']; ?></td>
                        <td><?php echo $cur_hotel['distance_to_center']; ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>

    </div>






</body>

</html>