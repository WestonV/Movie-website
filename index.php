<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Weston's Movies</title>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <!--Materialize CSS: Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    

</head>
<body>
    
    <nav class="black">
        <div class="navbar-wrapper container">
            <a href="index.html" class="brand-logo">Weston's Movies</a>
            <ul class="right">
                <li><a href="index.php">Home</a></li>
                <li><a class="pulse" href="login/login-form.php">Login</a></li>

            </ul>
        </div>
    </nav>
    <h5>Welcome to Weston's Movies review site. Checkout all the movies I've made reviews for below! blah blah </h5>
    <div class="carousel">
        <a id="wind-river" class="carousel-item hoverable" href="movie.php"><img alt="Wind River" src="https://image.tmdb.org/t/p/w500/pySivdR845Hom4u4T2WNkJxe6Ad.jpg"></a>
        <a id="thor-ragnarok" class="carousel-item hoverable" href="movie.php"><img alt="Thor Ragnarok" src="https://image.tmdb.org/t/p/w500/rzRwTcFvttcN1ZpX2xv4j3tSdJu.jpg"></a>
        <a id="ready-player-one" class="carousel-item hoverable" href="movie.php"><img alt="Ready Player One" src="https://image.tmdb.org/t/p/w500/pU1ULUq8D3iRxl1fdX2lZIzdHuI.jpg"></a>
        <a id="Kingsman-a-golden-circle" class="carousel-item hoverable" href="movie.php"><img alt="Kingsman: A Golden Circle" src="https://image.tmdb.org/t/p/w500/34xBL6BXNYFqtHO9zhcgoakS4aP.jpg"></a>
        <a id="get-out" class="carousel-item hoverable" href="movie.php"><img alt="Get Out" src="https://image.tmdb.org/t/p/w500/1SwAVYpuLj8KsHxllTF8Dt9dSSX.jpg"></a>
  </div>
    <footer class="page-footer black">
        <div class="footer-copyright">
            <div class="container">
            Made By: Weston Verhulst
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

<!--    jQuery import using Google CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Materialize JS: Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="js/initCarousel.js"></script>
    <script src="js/movieInfo.js"></script>
</body>
</html>