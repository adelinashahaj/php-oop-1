<?php
require __DIR__ . '/Models/Movie.php';

/* un altro esempio con la classe Genere
class Genere {

    public $genere1;
    public $genere2;
    public $genere3;

    public function __construct($genere1, $genere2, $genere3)
    {
        $this->genere1 = $genere1;
        $this->genere2 = $genere2;
        $this->genere3 = $genere3;
    }

}

/* un altro esempio con la classe Genere
$generi = [
    new Genere ('azione', 'avventura', 'fantascienza')
];
*/
$generi = [
    'azione', 'avventura', 'fantascienza',
];

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
</head>

<body>
    <div class="container">
        <h4>
            <li> <?php
                    echo $mymovie1->getInformazioniFilm();
                    //echo var_dump($mymovie1);
                    ?>
            </li>
            <li> <?php
                    echo $mymovie2->getInformazioniFilm();
                     //echo var_dump($mymovie2);
                    ?>
            </li>
        </h4>
    </div>
</body>

</html>
