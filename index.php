<?
switch ($_GET['lang']) {
    case 'ru':
        include('langauge/ru.php');
        break;
    case 'en':
        include('langauge/en.php');
        break;
    default:
        include('langauge/ru.php');
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$language['title']?></title>
    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/css/creative.min.css" rel="stylesheet">
</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><?=$language['title']?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about"><?=$language['nav1']?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services"><?=$language['nav2']?></a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>-->
<!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact"><?=$language['nav3']?></a>
                </li>
            </ul>
                        <ul class="nav navbar-nav " style="width: 45px;">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="margin-right: 5px;">en<b class="caret"></b></a>
                                <ul class="dropdown-menu text-center">
                                    <li><a href="/ru">ru</a></li>
                                    <li><a href="/en">en</a></li>
                                </ul>
                            </li>
                        </ul>
        </div>

    </div>
</nav>

<header class="masthead text-center text-white d-flex" id="about">
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <h1 class="text-uppercase">
                    <strong><?=$language['title2']?></strong>
                </h1>
                <hr>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5"><?=$language['txt1']?></p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#services"><?=$language['button1']?></a>
            </div>
        </div>
    </div>
</header>

<!--    <section class="bg-primary" id="about">-->
<!--      <div class="container">-->
<!--        <div class="row">-->
<!--          <div class="col-lg-8 mx-auto text-center">-->
<!--            <h2 class="section-heading text-white">We've got what you need!</h2>-->
<!--            <hr class="light my-4">-->
<!--            <p class="text-faded mb-4">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>-->
<!--            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </section>-->

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?=$language['title3']?></h2>
                <hr class="my-4">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-child text-primary mb-3 sr-icons"></i>
                    <h5 class="mb-3"><?=$language['serv-txt1']?></h5>
                    <p class="text-muted mb-0"><?=$language['serv-txt2']?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-shield text-primary mb-3 sr-icons"></i>
                    <h5 class="mb-3"><?=$language['serv-txt3']?></h5>
                    <p class="text-muted mb-0"><?=$language['serv-txt4']?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-users text-primary mb-3 sr-icons"></i>
                    <h5 class="mb-3"><?=$language['serv-txt5']?></h5>
                    <p class="text-muted mb-0"><?=$language['serv-txt6']?></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                    <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                    <h5 class="mb-3"><?=$language['serv-txt7']?></h5>
                    <p class="text-muted mb-0"><?=$language['serv-txt8']?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-0" id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-box" href="">
                    <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg  " alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                <?=$language['category-txt1']?>
                            </div>
                            <div class="project-name">
                                <?=$language['category-txt2']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-box" href="">
                    <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                <?=$language['category-txt3']?>
                            </div>
                            <div class="project-name">
                                <?=$language['category-txt4']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-box" href="">
                    <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                <?=$language['category-txt5']?>
                            </div>
                            <div class="project-name">
                                <?=$language['category-txt6']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-box" href="">
                    <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                <?=$language['category-txt7']?>
                            </div>
                            <div class="project-name">
                                <?=$language['category-txt8']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-box" href="">
                    <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                <?=$language['category-txt9']?>
                            </div>
                            <div class="project-name">
                                <?=$language['category-txt10']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-box" href="">
                    <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                <?=$language['category-txt11']?>
                            </div>
                            <div class="project-name">
                                <?=$language['category-txt12']?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4"><?=$language['title4']?></h2>
        <a class="btn btn-light btn-xl sr-button js-scroll-trigger" href="#contact"><?=$language['button2']?></a>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading"><?=$language['title5']?></h2>
                <hr class="my-4">
                <p class="mb-5"><?=$language['contact-txt1']?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center">
                <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                <p><?=$language['contact-txt2']?></p>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                <p>
                    <a href="#" data-toggle="modal" data-target="#squarespaceModal"><span><?=$language['contact-txt3']?></span></a>
                </p>
            </div>
        </div>
    </div>
</section>
<div class="modal fade modal_block" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close " data-dismiss="modal"><span style="cursor:pointer;" caria-hidden="true"><?=$language['close']?></span><span class="sr-only">Close</span></button>

            </div>
            <div class="modal-body">

                <!-- content goes here -->
                <form action="send.php" method="post">
                    <fieldset>
                        <div class="col-md-12 text-center"> <h3 class=" txt_modal" id="lineModalLabel">
                   <?=$language['form-title1']?></h3></div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="requestid" name="name" placeholder="<?=$language['form-title']?>" class="form-control input-md" required="" type="text">

                            </div>
                        </div>

                        <!-- Select Basic -->

                        <div class="form-group">
                            <!-- Textarea -->
                            <div class="form-group">
                                <div class="col-md-12">

                                    <input style="color: black" id="phone" placeholder="<?=$language['form-txt1']?>" name="contacts"
                                           required=""   class="form-control input-md">


                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
<!--                                <label class="col-md-4 control-label" for="date"> </label>-->
                                <div class="col-md-12">
                                    <textarea class="form-control rounded-0" placeholder="<?=$language['form-txt2']?>" style="color: black" name="message" id="exampleFormControlTextarea2" rows="3"></textarea>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="submit"></label><center>
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-common btn-primary" ><?=$language['form-txt3']?></button>
                                    </div></center>
                            </div>

                    </fieldset>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>

</body>

</html>
