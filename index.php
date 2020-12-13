<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <title>FindABook</title>
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="./css/styles.css" rel="stylesheet" />
      <!-- Arbor.js ss -->
      <script src="./js/jquery-1.6.1.min.js"></script>
      <script src="./js/arbor.js"></script>
      <script src="./js/graphics.js"></script>
      <script src="./js/renderer.js"></script>
      <script src="./js/buttons.js"></script>
      <script src="./js/captcha.js"></script>
      <script src="https://www.google.com/recaptcha/api.js?render=6LeyOgAaAAAAAHzYyg8vAl-YZpnisHKTzUBoXs5Y"></script>
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="./assets/img/icon.png" />
      <!-- Font Awesome icons (free version)-->
      <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src="https://www.google.com/recaptcha/api.js"></script>
      <!--ReCaptcha-->
      <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
      <script src="https://www.google.com/recaptcha/api.js?render=key:6LeyOgAaAAAAAHzYyg8vAl-YZpnisHKTzUBoXs5Y"></script>
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
      <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
      <!--Randomiser-->
      <script src="./js/randomiser.js"></script>
   </head>
   <body id="page-top">
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
         <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">FindABook</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
               aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#books">Choice</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#review">Review</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" a href="/webpages/About.html">About</a></li>
                  <div class="ui-widget nav navbar-nav" id="search-wrapper">
                     <div class="input-group ">
                    <form class="form-inline mr-auto">
                       <input class="form-control" type="text" id="search" placeholder="Search" aria-label="Search">
                       <style>#ui-id-1 {z-index: 9999;}</style>
                       <script type="text/javascript">
                          $(function() {
                            $("#search").autocomplete({
                              source: 'php/search.php',

                            });
                          });
                       </script>
                       <button class="btn btn-light btn-rounded btn-sm my-0 ml-sm-2" id="searchBtn" type="submit">Find A Book</button>
                    </form>
                  </div>
                </div>
               </ul>
            </div>
         </div>
      </nav>
      <!-- Masthead-->
      <header class="masthead bg-primary text-white text-center">
         <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="./assets/img/home_icon.png" alt="" />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">Find A Book</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
               <div class="divider-custom-line"></div>
               <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
               <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">When you're all curled up with nothing to read!</p>
         </div>
      </header>
      <!-- Portfolio Section-->
      <section class="page-section portfolio" id="books">
         <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase">Genres</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
               <div class="divider-custom-line"></div>
               <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
               <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
               <!-- Portfolio Item 1-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Fiction</h3>
                  <div class="portfolio-item mx-auto">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="mainFiction">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-rocket fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/fiction.png" alt="" />
                  </div>
               </div>
               <!-- Portfolio Item 2-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Random</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="mainRandom" onclick="loadcanvas('canvasDiv1');">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-star fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/lucky.png" alt="" />
                  </div>
               </div>
               <!-- Portfolio Item 3-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">NonFiction</h3>
                  <div class="portfolio-item mx-auto">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="mainNonFiction">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-book fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/nonfiction.png" alt="" />
                  </div>
               </div>
            </div>
            <!-- Fiction Sub Genre Buttons Container -->
            <div class="row justify-content-center" id="ficInitialButtons">
               <!-- Primary Sub Genre Buttons Container -->
               <!-- SubGenre Item 1-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Juvenile</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1" value="Done" id="btn_juvenile_id" name="Juvenile" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-child fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/juvenile.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 2-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Sci-fi</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_scifi_id" name="SciFi" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-atom fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/scifi.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 3-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">fantasy</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_fantasy_id" name="Fantasy" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-dragon fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/fantasy.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 4-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Fairytale</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_fairytale_id" name="Fairytale" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fab fa-fort-awesome fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/fairytale.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 5-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Adventure</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_adventure_id" name="Adventure" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-binoculars fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/adventure.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 6-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">mystery</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_mystery_id" name="Mystery" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-question fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/mystery.png" alt="" />
                  </div>
               </div>
               <!-- Show More -->
               <section id="ficShowMore">
                  <div class="row justify-content-center">
                     <div class="col-sm-6 col-sm-4 mb-5">
                        <div class="portfolio-item mx-auto">
                           <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="showMore1">
                              <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-ellipsis-h"></i></div>
                           </div>
                           <img class="img-fluid" src="./assets/img/portfolio/showmore.png" alt="" />
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div class="row justify-content-center" id="ficFinalButtons">
               <!-- Fiction Secondary Sub Genre Buttons Container -->
               <!-- SubGenre Item 7-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dystopian</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_dystopian_id" name="Dystopian" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-eye fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/dystopian.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 8-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">romance</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_romance_id" name="Romance" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-heart fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/romance.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 9-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">action</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_action_id" name="Action" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-helicopter fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/action.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 10-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">horror</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_horror_id" name="Horror" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-ghost fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/horror.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 11-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">thriller</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_thriller_id" name="Thriller" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-running fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/thriller.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 12-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">mythology</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_mythology_id" name="Mythology" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-poo-storm fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/mythology.png" alt="" />
                  </div>
               </div>
               <!-- Show Less -->
               <section id="ficShowLess">
                  <div class="row justify-content-center">
                     <div class="col-sm-6 col-sm-4 mb-5">
                        <div class="portfolio-item mx-auto">
                           <div class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="showLess1" href="#books">
                              <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-ellipsis-h"></i></div>
                           </div>
                           <img class="img-fluid" src="./assets/img/portfolio/less.png" alt="" />
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <!-- NonFiction Sub Genre Buttons Container -->
            <div class="row justify-content-center" id="nonficInitialButtons">
               <!-- Primary Sub Genre Buttons Container -->
               <!-- SubGenre Item 1-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Biography</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_biography_id" name="Biography" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-atlas fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/biography.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 2-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lit.Criticism</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_lit.crit_id" name="Criticism" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-file-alt fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/litcrit.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 3-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Business</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_business_id" name="Business" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-chart-line fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/business.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 4-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">History</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_history_id" name="History" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-hourglass fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/history.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 5-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Guide</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_guide_id" name="Guide" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-list fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/guide.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 6-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Education</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_education_id" name="Education" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-graduation-cap fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/education.png" alt="" />
                  </div>
               </div>
               <!-- Show More -->
               <section id="nonficShowMore">
                  <div class="row justify-content-center">
                     <div class="col-sm-6 col-sm-4 mb-5">
                        <div class="portfolio-item mx-auto">
                           <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="showMore2">
                              <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-ellipsis-h"></i></div>
                           </div>
                           <img class="img-fluid" src="./assets/img/portfolio/showmore.png" alt="" />
                        </div>
                     </div>
                  </div>
               </section>
            </div>
            <div class="row justify-content-center" id="nonficFinalButtons">
               <!-- Fiction Secondary Sub Genre Buttons Container -->
               <!-- SubGenre Item 7-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Arts</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" name="Arts" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-theater-masks fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/arts.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 8-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Philosophy</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_philosophy_id" name="Philosophy" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-comment-dots fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/philosophy.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 9-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Commentary</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_commentary_id" name="Commentary" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-comments fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/commentary.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 10-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Comedy</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_comedy_id" name="Comedy" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-laugh-squint fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/comedy.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 11-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">Technology</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_technology_id" name="Technology" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-microscope fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/technology.png" alt="" />
                  </div>
               </div>
               <!-- SubGenre Item 12-->
               <div class="col-md-6 col-lg-4 mb-5">
                  <h3 class="page-section-heading text-center text-uppercase text-secondary mb-0">literature</h3>
                  <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                     <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="btn_literature_id" name="Literature" type="submit" onclick="loadcanvas('canvasDiv');ajax($(this));return false;">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-book-reader fa-3x"></i></div>
                     </div>
                     <img class="img-fluid" src="./assets/img/portfolio/literature.png" alt="" />
                  </div>
               </div>
               <!-- Show More -->
               <section id="nonficShowLess">
                  <div class="row justify-content-center">
                     <div class="col-sm-6 col-sm-4 mb-5">
                        <div class="portfolio-item mx-auto">
                           <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100" id="showLess2">
                              <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-angle-double-right"></i></div>
                           </div>
                           <img class="img-fluid" src="./assets/img/portfolio/less.png" alt="" />
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </section>
      <!-- Reviews Section -->
      <section class="page-section bg-primary text-dark mb-0" id="review">
         <div class="container">
            <!-- Review Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">Review</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
               <div class="divider-custom-line"></div>
               <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
               <div class="divider-custom-line"></div>
            </div>
            <!--  Section Content-->
            <div class="card card-body">
               <div class="container" id="reviewForm">
                  <div class="form-group text-center">
                     <label for="bookInput">Book title</label>
                     <div class="row">
                        <div class="col-md-6 mx-auto">
                           <input type="text" class="form-control text-center" id="bookInput" maxlength="40" >
                           <input type="hidden" name="token" id="token" />
                           <input type="hidden" name="action" id="action" />
                           <label class="pt-3" for="reviewInput">Enter your review</label>
                           <textarea class="form-control text-center mb-3" id="reviewInput" name="review" rows="3" maxlength="1000"></textarea>
                           <button type="submit" value="submit" id="btn_save" name="submit" class="btn btn-primary btn-lg g-recaptcha g-recaptcha"
                              data-sitekey="6LeyOgAaAAAAAHzYyg8vAl-YZpnisHKTzUBoXs5Y">Submit</button>
                        </div>
                     </div>
                  </div>
               </div>
               <br/>


            </div>
         </div>


<!--

      <div class="alertt hide">
        <span class="fas fa-exclamation-circle"></span>
        <span class="msg">Warning: This is a warning alert!</span>
        <div class="close-btn">
          <span class="fas fa-times"></span>
        </div>
    </div>
-->
      </section>


 <!-- working on button ... tryna make a function so that if the fieds are empty this comes up, when the submit button is pressed-->
 <script>
function validateForm() {
  var x = document.forms["myForm"]["fname"].value;
  if (x == "" || x == null) {
    alert("Name must be filled out");
    return false;
  }
}
</script>

      <!-- Reviews Section End Here -->
      <!-- Footer-->
      <footer class="footer text-center">
         <div class="container">
            <div class="row">
               <!-- Footer About Text-->
               <div class="col-lg-4"></div>
               <div class="col-lg-4">
                  <h4 class="text-uppercase mb-4">About Us</h4>
                  <p class="lead mb-0">
                     Kale — Team Project
                  </p>
                  <p class="lead">
                     Code can be found below on GitHub.
                  </p>
                  <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/wizardofcmd/Find-A-Book"><i class="fab fa-fw fa-lg fa-github"></i></a>
               </div>
               <div class="col-lg-4"></div>
            </div>
         </div>
      </footer>
      <!-- Copyright Section-->
      <div class="copyright py-4 text-center text-white">
         <div class="container"><small>Copyright © FindABook 2020</small></div>
      </div>
      <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
      <div class="scroll-to-top d-lg-none position-fixed">
         <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
      </div>
      <!-- Portfolio Modals-->
      <!-- Portfolio Modal 1 NON-FICTION BUTTON-->
      <div class="portfolio-modal modal fade" id="portfolioModal1" data-target="#myModal" data-toggle="modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
         <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="absolutelyDestroyCanvas('viewport')">
               <span aria-hidden="true"><i class="fas fa-times"></i></span>
               </button>
               <div class="modal-body text-center">
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="divider-custom">
                           <div class="divider-custom-line"></div>
                           <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label1">What we can offer</h2>
                           <div class="divider-custom-line"></div>
                        </div>
                        <div id="canvasDiv"></div>
                        <div class="col-lg-8">
                           <!-- Icon Divider-->
                           <div class="divider-custom">
                              <div class="divider-custom-line"></div>
                              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                              <div class="divider-custom-line"></div>
                           </div>
                           <div class="divider-custom">
                           </div>
                           <!-- Portfolio Modal - Text-->
                           <button class="btn btn-primary" data-dismiss="modal" id="clearCanvas" onclick="absolutelyDestroyCanvas('viewport')">
                           <i class="fas fa-times fa-fw"></i>
                           Close Window
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Portfolio Modal 2 FEELING LUCKY BUTTON -->
      <div class="portfolio-modal modal fade" id="portfolioModal2" data-target="#myModal" data-toggle="modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
         <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
               <button class="close" type="button" data-dismiss="modal" aria-label="Close" onclick="absolutelyDestroyCanvas('viewport')">
               <span aria-hidden="true"><i class="fas fa-times"></i></span>
               </button>
               <div class="modal-body text-center">
                  <div class="container">
                     <div class="row justify-content-center">
                        <div class="divider-custom">
                           <div class="divider-custom-line"></div>
                           <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">What we can offer</h2>
                           <div class="divider-custom-line"></div>
                        </div>
                        <div id="canvasDiv1"></div>
                        <div class="col-lg-8">
                           <!-- Feeling Lucky Content-->
                           <button value="btn_ran_val" class="btn btn-info " id="btn_ran_id" onclick="absolutelyDestroyCanvas('viewport');loadcanvas('canvasDiv1');ajax($())">Shuffle</button>
                           <div class="divider-custom">
                              <div class="divider-custom-line"></div>
                              <button class="btn btn-primary" data-dismiss="modal" onclick="absolutelyDestroyCanvas('viewport')">
                              <i class="fas fa-times fa-fw"></i>
                              Close Window
                              </button>
                              <div class="divider-custom-line"></div>
                           </div>
                           <div class="divider-custom">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="result"></div>
      <!-- Bootstrap core JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- jQuery UI -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
      <!-- Third party plugin JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
      <!-- Core theme JS-->
      <script src="./js/scripts.js"></script>

   </body>
</html>
