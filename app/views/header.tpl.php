<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <title>Pokedex</title>
</head>
<body>
    <nav class="pokenav">
        <div><h2 class="poketitle">Pokédex</h2></div>
        <ul class="pokelist">
            <li class="pokelien"><a href="<?= $router->generate('home') ?>">Liste</a></li>
            <li class="pokelien"><a href="#">Types</a></li>
        </ul>
            
    </nav>
