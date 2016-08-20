<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Arica en Linea</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/styles.css" rel="stylesheet">
    <!-- jQuery Version 1.11.1 -->
    <script src="../assets/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>
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
                        <a href="../index.php" class="navbar-brand">
                            <img class="img-logo" src="../assets/img/logo.png" alt="...">
                        </a>
                    </div>
                    <div class="navbar-inverse side-collapse in pull-right">
                        <div class="navbar-background"></div>
                        <nav role="navigation" class="navbar-collapse menu">
                            <ul class="nav navbar-nav">
                                <li class="menu-6"><a href="../arica/index.php" class=""> ARICA</a></li>
                                <li class="menu-1"><a href="../camarones/index.php" class="" > CAMARONES </a></li>
                                <li class="menu-2"><a href="../parinacota/index.php" class=""> PARINACOTA</a></li>
                                <li class="menu-3"><a href="../putre/index.php" class=""> PUTRE</a></li>
                                <li class="menu-4"><a href="../glagos/index.php" class=""> GENERAL LAGOS</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
        <!-- #header2 -->
    </header>