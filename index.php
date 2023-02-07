<?php
/*
# DESCRIZIONE
Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G
Stampare tutti i nostri hotel con tutti i dati disponibili.
Iniziate in modo graduale.
Prima stampate in pagina i dati, senza preoccuparvi dello stile.
Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella.

* BONUS:
-1 Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.
-2 Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)
*/

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

foreach ($hotels as $hotel) {
    foreach ($hotel as $key => $value) {
    }
}

$keys = (array_keys($hotel));

// foreach ($hotels as $hotel) {
//     $name = $hotel['name'];
// }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />



</head>


<body class="py-3">
    <h1 class="text-primary text-center">
        Boolking
    </h1>

    <form action="" class="form-check mx-auto d-flex align-items-center w-100 justify-content-center">
        <select class="form-select w-25" aria-label="Default select example">
            <option selected name="parking">Change filters</option>
            <option value="parking">Availabe Parking</option>
        </select>
        <button type="submit" class="btn text-black btn-outline-primary">Filter</button>
    </form>

    <!-- TABELLA  -->
    <table class="table border my-5 w-50 mx-auto">
        <thead class="bg-warning">
            <tr class="p-5">
                <?php foreach ($keys as $single_key) : ?>
                    <td scope="col"> <?= $single_key ?> </td>
                <?php endforeach ?>

        <tbody>
            <?php foreach ($hotels as $hotel) : ?>
                <tr>
                    <td> <?= $hotel['name'] ?> </td>
                    <td> <?= $hotel['description'] ?> </td>
                    <td> <?= $hotel['parking'] ?> </td>
                    <td> <?= $hotel['vote'] ?> </td>
                    <td> <?= $hotel['distance_to_center'] ?> </td>
                </tr>
            <?php endforeach ?>
    </table>

</body>

</html>