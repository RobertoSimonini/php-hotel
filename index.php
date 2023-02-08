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
        'distance' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance' => 50
    ],
];

foreach ($hotels as $hotel) {
    foreach ($hotel as $key => $value) {
    }
}

$keys = (array_keys($hotel));


if (isset($_GET['parking'])) {
    $parking_filtered_hotels = [];

    foreach ($hotels as $hotel) {
        if ($hotel['parking']) {
            array_push($parking_filtered_hotels, $hotel);
        }
    };

    $hotels = $parking_filtered_hotels;
};


if (!empty($_GET['rating'])) {

    $rating = $_GET['rating'];

    $filtered_rating_hotels = [];

    foreach ($hotels as $hotel) {
        if ($hotel['vote'] >= $rating) {
            array_push($filtered_rating_hotels, $hotel);
            $hotels = $filtered_rating_hotels;
        }
    };
}



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

    <!-- Bootstrap Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

</head>


<body class="py-3">
    <h1 class="text-primary text-center">
        Boolking
    </h1>

    <form action="" method="GET" class="form-check mx-auto text-center">
        <div class="d-flex justify-content-center align-items-center">
            <input id="parking" class=" mx-1 form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input" name="parking">
            <label for="parking">Mostra solo gli hotel con il parcheggio incluso</label>
        </div>

        <div class="d-flex justify-content-center align-items-center py-3">
            <input class="mx-1 form-control mt-0" type="number" name="rating" id="rating" style="width: 150px; height: 30px;">
            <label for="rating">Filtra in base alla valutazione </label>
        </div>

        <button type="submit" class="btn text-black btn-outline-primary ms-4">Filter</button>

    </form>

    <!-- TABELLA  -->
    <table class="table border my-5 w-50 mx-auto">
        <thead class="bg-warning">
            <tr class="p-5 text-center">
                <?php foreach ($keys as $key) : ?>
                    <td scope="col"> <?= $key ?> </td>
                <?php endforeach ?>
            </tr>
        <tbody>
            <?php foreach ($hotels as $hotel) : ?>
                <tr class="text-center">
                    <td> <?= $hotel['name'] ?> </td>
                    <td> <?= $hotel['description'] ?> </td>
                    <td>
                        <i class="<?= $hotel['parking'] ? 'bi-check-circle text-success' : 'bi-x-circle text-danger' ?>"> </i>
                    </td>
                    <td> <?= $hotel['vote'] ?> </td>
                    <td> <?= $hotel['distance'] ?> </td>
                </tr>
            <?php endforeach ?>
    </table>

</body>

</html>