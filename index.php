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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>


<body>
    <div class="container mt-5">
        <h1 class="mb-3">Lista Hotel</h1>

        <form action="" method="GET">
            <label for="filtro-parcheggio">Filtra per parcheggio:</label>
            <select name="filtro-parcheggio" id="filtro-parcheggio">
                <option value="">Tutti</option>
                <option value="si">Con parcheggio</option>
                <option value="no">Senza parcheggio</option>
            </select>
            <input type="submit" value="Filtra">
        </form>

        <table class="table table-bordered ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">parcheggio</th>
                    <th scope="col">voto</th>
                    <th scope="col">distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $index => $hotel): ?>
                    <tr>
                        <th scope="row">
                            <?php echo ($index + 1) ?>
                        </th>
                        <td>
                            <?php echo $hotel['name'] ?>
                        </td>
                        <td>Descrizione:
                            <?php echo $hotel['description'] ?>
                        </td>
                        <td>parcheggio:
                            <?php echo ($hotel['parking'] ? 'Presente' : 'Assente'); ?>
                        </td>
                        <td>voto:
                            <?php echo $hotel['vote'] ?>
                        </td>
                        <td>distanza dal centro:
                            <?php echo $hotel['distance_to_center'] ?> km
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>