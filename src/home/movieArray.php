<?php
session_start();
require('../dbfunctions.php');

$moviesQuery = "
SELECT *
FROM movies;";

global $link;
//$arrMovies[] = getArrofRows($moviesQuery);

foreach ((getArrofRows($moviesQuery)) as $movie) {
//for ($i = 0; $i < count(getArrofRows($moviesQuery)); $i++) {
    $id = $movie['movieId'];
    $title = $movie['movieTitle'];
    $genre = $movie['movieGenre'];
    $runtime = $movie['runningTime'];
    $lang = $movie['language'];
    $picture = $movie['picture'];
    $director = $movie['director'];
    $cast = $movie['cast'];
    $synopsis = $movie['synopsis'];
    $reviewLink = "movieReview.php/?id=" . $id;
    ?>
    <div>
        <div class="p-2 bg-secondary">
            <div class="container">
                <a href="<?php echo $reviewLink ?>"><img class="img-fluid" src="../../Images/<?php echo $picture?>"></a>
            </div>
            <p>
            <h3><?php echo $title?></h3>
            <i><?php echo $genre?></i>
            <div>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapser<?php echo $id?>" aria-expanded="false" aria-controls="collapser<?php echo $id?>">
                    See More
                </button>
                <div class="collapse" id="collapser<?php echo $id?>">
                    <div class="container text-start flex">

                        <div class="row border-bottom border-dark border-2">
                            <div class="col-sm-auto"><b>Language:</b></div>
                            <div class="col-sm-auto"><?php echo $lang?></div>
                        </div>
                        <div class="row border-bottom border-dark border-2">
                            <div class="col-sm-auto"><b>Directed by:</b></div>
                            <div class="col-sm-auto"><?php echo $director?></div>
                        </div>
                        <div class="row border-bottom border-dark border-2">
                            <div class="col-sm-auto"><b>Featuring: </b>
                            </div>
                            <div class="col-sm-auto"><?php echo $cast?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center"><p><?php echo $synopsis?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

?>