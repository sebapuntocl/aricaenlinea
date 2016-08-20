<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Arica en Linea</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <!-- jQuery Version 1.11.1 -->
    <script src="assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Custom CSS -->
    <script>
    $(document).ready(function() {   
    var sideslider = $('[data-toggle=collapse-side]');
    var sel = sideslider.attr('data-target');
    var sel2 = sideslider.attr('data-target-2');
    sideslider.click(function(event){
        $(sel).toggleClass('in');
        $(sel2).toggleClass('out');
    });
});

// On scroll add class
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    
    //SCROLL AVEC SLIDER
    if (scroll >= 100) {
        $(".fixedScrollTop").addClass("stickyHeader");
    } else {
        $(".fixedScrollTop").removeClass("stickyHeader");
    }
});
</script>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

  
    <header role="banner" class="navbar navbar-fixed-top navbar-inverse fixedScrollTop">
        <div id="header1" class="top-bar">
            <nav>
                <div class="hidden-xs">
                    <div class="container">
                        <div class="col-md-12">
                            <ul id="navigateLinkTop" class="nav navbar-nav navbar-right">
                                <a href="#"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                                <a href="#"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
                                <a href="#"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
                                <a href="#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
                                <a href="#">contactos@aricaenlinea.cl</a>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- #header1 -->
           
        <div id="header2">
            <nav class="navbar-inverse">
                <div class="container">
                    <div class="navbar-header">
                        <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-right">
                            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand">
                            <img class="img-logo" src="assets/img/logo.png" alt="...">
                        </a>
                    </div>
                    <div class="navbar-inverse side-collapse in pull-right">
                        <div class="navbar-background"></div>
                        <nav role="navigation" class="navbar-collapse menu">
                            <ul class="nav navbar-nav">
                                <li class="menu-6"><a href="arica/index.php" class=""> ARICA</a></li>
                                <li class="menu-1"><a href="camarones/index.php" class="" > CAMARONES </a></li>
                                <li class="menu-2"><a href="parinacota/index.ph" class=""> PARINACOTA</a></li>
                                <li class="menu-3"><a href="putre/index.php" class=""> PUTRE</a></li>
                                <li class="menu-4"><a href="glagos/index.php" class=""> GENERAL LAGOS</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
        <!-- #header2 -->
    </header>
 <!-- Page Content   class="pull-right fa fa-link"-->
    <div class="container">

        <div class="row">                                          
            <div class="col-md-3">
                <div class="list-group">
                 
                    <a href="#" class="list-group-item">
                    <button id="autoclosable-btn-success pull-right" class="btn btn-primary  btn-success btn-block">Los Viejos BKN´s</button></a>
                    <a href="#" class="list-group-item">
                    <button id="autoclosable-btn-warning" class="btn btn-primary btn-warning btn-block">Hitos de Arica</button></a>
                    <a href="#" class="list-group-item">
                    <button id="autoclosable-btn-danger" class="btn btn-primary btn-danger btn-block">Categoria 3</button></a>
                    <a href="#" class="list-group-item">
                    <button id="normal-btn-info" class="btn btn-primary btn-info btn-block">Categoria 4</button></a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/1150x350/3498db/FFFFFF" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/1150x350/9b59b6/FFFFF" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/1150x350/c0392b/FFFFFF" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4><a href="#">Destacados</a>
                                </h4>
                                <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4><a href="#">Destacados</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4><a href="#">Destacados</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4><a href="#">Destacados</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4><a href="#">Destacados</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View Tutorial</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
    
    

    

</body>

</html>
