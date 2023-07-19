<!DOCTYPE html>
<include
<html>
<head>

    <title>Movies</title>
    <link rel="stylesheet" href="../../styleSheets/style.css" type="text/css">
</head>
<body>
<?php include('header.php') ?>

<div class="container text-center" >
    <div class="row row-cols-auto row-cols-sm-2 row-cols-md-3 g-3 justify-content-evenly" >
        <?php
        for ($i = 0; $i < 11; $i++) {?>
            <div>
                <div class="p-2 bg-secondary">
                    <div class="container">
                        <a href="movieReview.php"><img class="img-fluid" src="../../Images/avatar.png"></a>
                    </div>
                    <p>
                        <h3>Avatar</h3>
                        <i>Action/ Adventure/ Fantasy</i>
                    </p>
                    <div>
<!--                        <button type="button" class="btn btn-primary btn-lg" onclick="location.href = 'seeMore.php';">See More</button>-->
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?php echo $i?>" aria-expanded="false" aria-controls="collapseExample<?php echo $i?>">See More</button></p>
                        <div class="collapse" id="collapseExample<?php echo $i?>">

                            <div class="container text-start flex">
                                <div class="row border-bottom border-dark border-2">
                                    <div class="col-sm-auto"><b>Language:</b></div>
                                    <div class="col-sm-auto">English (Sub:Chinese)</div>
                                </div>
                                <div class="row border-bottom border-dark border-2">
                                    <div class="col-sm-auto"><b>Directed by:</b></div>
                                    <div class="col-sm-auto">James Cameron</div>
                                </div>
                                <div class="row border-bottom border-dark border-2">
                                    <div class="col-sm-auto"><b>Featuring: </b>
                                    </div>
                                    <div class="col-sm-auto">Sam Worthington, Zoe Saldana, Sigourney Weaver, Kate Winslet, Vin Diesel, Stephen Lang
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center"><p>Set more than a decade after the events of the first film, Avatar: The Way of Water begins to tell the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure</p>
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


    </div>


</div>

</body>
</html>

