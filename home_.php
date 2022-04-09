<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="splashscreen.css">

</head>

<body>
    <div class="intro">
        <h1 class="wellcome-header"> 
            <span class="wellcome">Wellcome to:</span>
            <!-- <br><span class="logo">To</span> -->
            <br><br>
            <span class="wellcome" style="color: rgb(49, 255, 193);">"Quory"</span>
        </h1>
    </div>  

    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">QUORY</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="home_.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">DASHBOARD</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">PROFILE</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">LOG OUT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/tech/image4.jpg&quot;); color:rgba(9, 162, 255, 0.85);">
            <div class="text">
                <h2 id="greeting">!</h2>
                <p><br>“Knowledge is power. Information is liberating. Education is the premise of progress, in every society, in every family.”<br></p><button class="btn btn-outline-light btn-lg" type="button">Learn More</button></div>
        </section>
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">QUORY</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>CATEGORY</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                        <h4>TOPICS</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                        <h4>POSTS</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h4>SEARCH</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footerpad">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8 mx-auto">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></span></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-pinterest fa-stack-1x fa-inverse"></i></span></a>
                        </li>
                    </ul><p class="copyright text-muted text-center">Copyright &copy; QUORY 2021 | MADE by <a href="#"> Diana</a></p></div>
            </div>
        </div>
    </footer>
    
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/splashscreen.js"></script>
    <script src="assets/js/home.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
</body>

</html>