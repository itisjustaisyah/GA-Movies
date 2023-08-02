<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand nav-link"  style="font-size: x-large" href="movies.php">MoviesReview</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="registration.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Login</a>
                </li>
            </ul>
            <form class="d-flex" action="movies.php" method="get">
                <?php
                if (!empty($search)){
                    ?>
                <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search" name="search" value="<?php echo $search?>">

                <input type="hidden" name="search" value="<?php echo $search?>"/>
                <?php
                }else{?>
                    <input class="form-control me-2" type="search" placeholder="Search here..." aria-label="Search" name="search" value="">
                    <?php
                }
                ?>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>


</body>
</html>