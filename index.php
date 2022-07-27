<?php
// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
// metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class  Movie {
    // *VARS*
    public $title;
    public $poster;
    public $genre;
    public $plot;
    public $date;
    public $originalLanguage;
    public $runningTime;
    public $director;
    public $cast;
    public $rating;

    // *FUNCTIONS*
    function __construct($_title, $_genre) {
        $this->title = $_title;
        $this->genre = $_genre;
    }
    public function getCast() {
        return $this->cast;
    }
    public function getPlot() {
        return $this->plot;
    }
}

$firstMovie = new Movie("American Beauty", "Drama");
$firstMovie->rating = "80%";
$firstMovie->poster = "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/wby9315QzVKdW9BonAefg8jGTTb.jpg";
$firstMovie->date = "10/01/1999";
$firstMovie->runningTime = "2h 2m";
$firstMovie->originalLanguage = "English";
$firstMovie->director = "Sam Mendes";
$firstMovie->cast = "Kevin Spacey, Annette Bening, Thora Birch";
$firstMovie->plot = "Lester Burnham, a depressed suburban father in a mid-life crisis, decides to turn his hectic life around after developing an infatuation with his daughter's attractive friend.";

$secondtMovie = new Movie("Interstellar", "Science Fiction");
$secondtMovie->rating = "84%";
$secondtMovie->poster = "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/gEU2QniE6E77NI6lCU6MxlNBvIx.jpg";
$secondtMovie->date = "11/07/2014";
$secondtMovie->runningTime = "2h 49m";
$secondtMovie->originalLanguage = "English";
$secondtMovie->director = "Christopher Nolan";
$secondtMovie->cast = "Matthew McConaughey, Anne Hathaway, Jessica Chastain";
$secondtMovie->plot = "The adventures of a group of explorers who make use of a newly discovered wormhole to surpass the limitations on human space travel and conquer the vast distances involved in an interstellar voyage.";

$thirdMovie = new Movie("Trainspotting", "Drama");
$thirdMovie->rating = "80%";
$thirdMovie->poster = "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/bhY62Dw8iW54DIhxPQerbuB9DOP.jpg";
$thirdMovie->date = "02/23/1996";
$thirdMovie->runningTime = "1h 34m";
$thirdMovie->originalLanguage = "English";
$thirdMovie->director = "Danny Boyle";
$thirdMovie->cast = "Ewan McGregor, Ewen Bremner, Jonny Lee Miller";
$thirdMovie->plot = "Heroin addict Mark Renton stumbles through bad ideas and sobriety attempts with his unreliable friends -- Sick Boy, Begbie, Spud and Tommy. He also has an underage girlfriend, Diane, along for the ride. After cleaning up and moving from Edinburgh to London, Mark finds he can't escape the life he left behind when Begbie shows up at his front door on the lam, and a scheming Sick Boy follows.";

$fourthdMovie = new Movie("Watchmen", " Science Fiction");
$fourthdMovie->rating = "73%";
$fourthdMovie->poster = "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/aZvOkdo203bm1kpcY0A0Tn074ER.jpg";
$fourthdMovie->date = "03/06/2009";
$fourthdMovie->runningTime = "2h 43m";
$fourthdMovie->originalLanguage = "English";
$fourthdMovie->director = "Zack Snyder";
$fourthdMovie->cast = "Patrick Wilson, Billy Crudup, Jackie Earle Haley";
$fourthdMovie->plot = "In a gritty and alternate 1985 the glory days of costumed vigilantes have been brought to a close by a government crackdown, but after one of the masked veterans is brutally murdered, an investigation into the killer is initiated. The reunited heroes set out to prevent their own destruction, but in doing so uncover a sinister plot that puts all of humanity in grave danger.";

$fifthMovie = new Movie("Donnie Darko", "Fantasy");
$fifthMovie->rating = "78%";
$fifthMovie->poster = "https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fhQoQfejY1hUcwyuLgpBrYs6uFt.jpg";
$fifthMovie->date = "10/26/2001";
$fifthMovie->runningTime = "1h 54m";
$fifthMovie->originalLanguage = "English";
$fifthMovie->director = "Richard Kelly";
$fifthMovie->cast = "Jake Gyllenhaal, Jena Malone, James Duval";
$fifthMovie->plot = "After narrowly escaping a bizarre accident, a troubled teenager is plagued by visions of a large bunny rabbit that manipulates him to commit a series of crimes.";

$movies = [
    $firstMovie,
    $secondtMovie,
    $thirdMovie,
    $fourthdMovie,
    $fifthMovie
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="flex">
            <?php foreach($movies as $movie) { ?>
                <div class="movie">
                    <div class="movie-poster">
                        <img src="<?php echo $movie->poster; ?>" alt="<?php echo $movie->title; ?>">
                    </div>
                    <div class="movie-infos flex">
                        <div class="movie-title">
                            <strong>Title:</strong>
                            <?php echo $movie->title; ?>
                        </div>
                        <div class="movie-genre">
                            <strong>Genre:</strong>
                            <?php echo $movie->genre; ?>
                        </div>
                        <div class="movie-rating">
                            <strong>Rating:</strong>
                            <?php echo $movie->rating; ?>
                        </div>
                        <div class="movie-date">
                            <strong>Date:</strong>
                            <?php echo $movie->date; ?>
                        </div>
                        <div class="movie-duration">
                            <strong>Running time:</strong>
                            <?php echo $movie->runningTime; ?>
                        </div>
                        <div class="movie-original-language">
                            <strong>Original language:</strong>
                            <?php echo $movie->originalLanguage; ?>
                        </div>
                        <div class="movie-director">
                            <strong>Directed by:</strong>
                            <?php echo $movie->director; ?>
                        </div>
                        <div class="movie-cast">
                            <strong>Cast:</strong>
                            <?php echo $movie->cast; ?>
                        </div>
                        <p class="movie-plot">
                            <strong>Plot:</strong>
                            <?php echo $movie->plot; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>