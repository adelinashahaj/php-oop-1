<?php
require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/Genere.php';


 
$generi = [
    new Genere ('azione', 'avventura', 'fantascienza')
];

/* bonus 1 array senza la classe
$generi = [
    'azione', 'avventura', 'fantascienza',
];*/

$mymovie1 = new Movie('Avengers','Robert Downey Jr', 2015, $generi);

$mymovie2 = new Movie('Capitan America','Chris Avans', 2016, $generi);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-primary-subtle">
    <div class="container mt-5">
       
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0 shadow">
                <div class="col-md-4">
                    <img src="img/avengers.jpg" class="rounded-start" alt="..." style="max-width: 89%;">
                </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php
                                        echo $mymovie1->getInformazioniFilm();
                                        //echo var_dump($mymovie1);
                                        ?></h5>
                        </div>
                    </div>
            </div>
        </div>

        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0 shadow">
                <div class="col-md-4">
                    <img src="img/cp.america.jpg" class=" rounded-start" alt="..." style="max-width: 74%;">
                </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?php
                                            echo $mymovie2->getInformazioniFilm();
                                            //echo var_dump($mymovie2);
                                            ?></h5> 
                        </div>
                    </div>
            </div>
         </div>

    </div>

</body>

</html>
