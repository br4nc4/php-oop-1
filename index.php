<!--  Create un file index.php in cui:
- è definita una classe ‘Movie’
    => all’interno della classe sono dichiarate delle variabili d’istanza
    => all’interno della classe è definito un costruttore
    => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php
class Movie {
    public $title;
    public $year;
    public $runningTime;
    public $language;

    function __construct($_title, $_year, $_runningTime, $_language)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->runningTime = $_runningTime;
        $this->language = $_language;
    }
}

$movie1 = new Movie("Matrix", "1999", "136", "english");
/* $movie1->title = "Matrix"; */
/* $movie1->year = "1999"; */
/* $movie1->runningTime = "136"; */

$movie2 = new Movie("Jumanji", "1995", "136", "english");
/* $movie2->title = "Jumanji"; */
/* $movie2->year = "1995"; */
/* $movie2->runningTime = "104"; */

var_dump($movie1, $movie2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        
    </div>
</body>
</html>