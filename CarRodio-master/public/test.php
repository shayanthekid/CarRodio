<?php

include("../src/backend/includes/autoloader.inc.php");



$Brands = new BrandsView();
$Details = new CarDetailsView();
$Cars = new CarView();
$Ads = new AdsView();

// $Details->showDetails();

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Ads</title>

    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- jQuery -->
    <script src="../src/frontend/assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>


    <!-- Bootstrap4 files-->
    <script src="../src/frontend/assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="../src/frontend/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../src/frontend/assets/css/nav.css" rel="stylesheet" type="text/css" />
    <!-- Font awesome 5 -->
    <link href="../src/frontend/assets/css/all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
    <link href="plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="../src/frontend/assets/css/ui.css" rel="stylesheet" type="text/css" />
    <link href="../src/frontend/assets/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="../src/frontend/assets/js/script2.js" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>

</head>

<body>

    <header class="section-header">

        <section class="header-main border-bottom">
            <header class="nav -right-aligned">
                <nav class="nav-main">
                    <a class="nav-logo -mobile" href="#">
                        <img class="nav-logo__image" id="logo" src="assets/images/logo.svg" alt="Logo">
                    </a>
                    <ul class="nav-list" role="menu" aria-hidden="true">
                        <div class="nav-list__wrapper">
                            <li class="nav-list__item" role="none">
                                <a class="nav-logo" href="#">
                                    <img class="nav-logo__image" id="logo" src="assets/images/logo.svg" alt="Logo">
                                </a>
                            </li>
                            <li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="https://github.com/obscuredetour/simply-nav">GitHub</a>
                            </li>
                            <li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="#features">Features</a>
                            </li>
                            <li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="#custom">Customizable</a>
                            </li>
                            <li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="#how-to-use">How to use</a>
                            </li>
                            <li class="nav-list__item" role="none">
                                <a class="nav-list__link" role="menuitem" href="#example">Example Link</a>
                            </li>
                        </div>
                    </ul>
                    <button class="nav-toggle" type="button" aria-expanded="false">
                        <div class="burger -squeeze -offset" type="button">
                            <span class="burger-lines"></span>
                        </div>
                    </button>
                </nav>
                <ul class="nav-list -mobile" role="menu" aria-hidden="true">
                    <div class="nav-list__wrapper">
                        <li class="nav-list__item" role="none">
                            <a class="nav-list__link" role="menuitem" href="https://github.com/obscuredetour/simply-nav">GitHub</a>
                        </li>
                        <li class="nav-list__item" role="none">
                            <a class="nav-list__link" role="menuitem" href="#features">Features</a>
                        </li>
                        <li class="nav-list__item" role="none">
                            <a class="nav-list__link" role="menuitem" href="#custom">Customizable</a>
                        </li>
                        <li class="nav-list__item" role="none">
                            <a class="nav-list__link" role="menuitem" href="#how-to-use">How to use</a>
                        </li>
                        <li class="nav-list__item" role="none">
                            <a class="nav-list__link" role="menuitem" href="#example">Example Link</a>
                        </li>
                    </div>
                    <div class="nav-overlay"></div>
                </ul>
            </header>
        </section> <!-- header-main .// -->
    </header> <!-- section-header.// -->




    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">

            <div class="row">
                <aside class="col-md-3">

                    <div class="card">
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Product type</h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse_1" style="">
                                <div class="card-body">
                                    <form class="pb-3" action="search.php" method="POST">
                                        <div class="input-group">
                                            <input name="search" type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button name="submit-search" class="btn btn-light" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>

                                    <ul class="list-menu">
                                        <li><a href="#">People </a></li>
                                        <li><a href="#">Watches </a></li>
                                        <li><a href="#">Cinema </a></li>
                                        <li><a href="#">Clothes </a></li>
                                        <li><a href="#">Home items </a></li>
                                        <li><a href="#">Animals</a></li>
                                        <li><a href="#">People </a></li>
                                    </ul>

                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group  .// -->
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_2" aria-expanded="true" class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Brands </h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse_2" style="">
                                <div class="card-body">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" checked="" class="custom-control-input">
                                        <div class="custom-control-label">Mercedes
                                            <b class="badge badge-pill badge-light float-right">120</b>
                                        </div>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" checked="" class="custom-control-input">
                                        <div class="custom-control-label">Toyota
                                            <b class="badge badge-pill badge-light float-right">15</b>
                                        </div>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" checked="" class="custom-control-input">
                                        <div class="custom-control-label">Mitsubishi
                                            <b class="badge badge-pill badge-light float-right">35</b>
                                        </div>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" checked="" class="custom-control-input">
                                        <div class="custom-control-label">Nissan
                                            <b class="badge badge-pill badge-light float-right">89</b>
                                        </div>
                                    </label>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input">
                                        <div class="custom-control-label">Honda
                                            <b class="badge badge-pill badge-light float-right">30</b>
                                        </div>
                                    </label>
                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group .// -->
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_3" aria-expanded="true" class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Price range </h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse_3" style="">
                                <div class="card-body">
                                    <input type="range" class="custom-range" min="0" max="100" name="">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Min</label>
                                            <input class="form-control" placeholder="$0" type="number">
                                        </div>
                                        <div class="form-group text-right col-md-6">
                                            <label>Max</label>
                                            <input class="form-control" placeholder="$1,0000" type="number">
                                        </div>
                                    </div> <!-- form-row.// -->
                                    <button class="btn btn-block btn-primary">Apply</button>
                                </div><!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group .// -->
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_4" aria-expanded="true" class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Sizes </h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse_4" style="">
                                <div class="card-body">
                                    <label class="checkbox-btn">
                                        <input type="checkbox">
                                        <span class="btn btn-light"> XS </span>
                                    </label>

                                    <label class="checkbox-btn">
                                        <input type="checkbox">
                                        <span class="btn btn-light"> SM </span>
                                    </label>

                                    <label class="checkbox-btn">
                                        <input type="checkbox">
                                        <span class="btn btn-light"> LG </span>
                                    </label>

                                    <label class="checkbox-btn">
                                        <input type="checkbox">
                                        <span class="btn btn-light"> XXL </span>
                                    </label>
                                </div><!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group .// -->
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_5" aria-expanded="false" class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">More filter </h6>
                                </a>
                            </header>
                            <div class="filter-content collapse in" id="collapse_5" style="">
                                <div class="card-body">
                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="myfilter_radio" checked="" class="custom-control-input">
                                        <div class="custom-control-label">Any condition</div>
                                    </label>

                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="myfilter_radio" class="custom-control-input">
                                        <div class="custom-control-label">Brand new </div>
                                    </label>

                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="myfilter_radio" class="custom-control-input">
                                        <div class="custom-control-label">Used items</div>
                                    </label>

                                    <label class="custom-control custom-radio">
                                        <input type="radio" name="myfilter_radio" class="custom-control-input">
                                        <div class="custom-control-label">Very old</div>
                                    </label>
                                </div><!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group .// -->
                    </div> <!-- card.// -->

                </aside> <!-- col.// -->
                <main class="col-md-9">

                    <header class="border-bottom mb-4 pb-3">
                        <div class="form-inline">
                            <span class="mr-md-auto">
                                <p id="ItemsFound"></p>
                            </span>
                            <select class="mr-2 form-control">
                                <option>Latest items</option>
                                <option>Trending</option>
                                <option>Most Popular</option>
                                <option>Cheapest</option>
                            </select>

                            <div class="btn-group">
                                <a href="#" class="btn btn-outline-secondary" data-toggle="tooltip" title="List view">
                                    <i class="fa fa-bars"></i></a>
                                <a href="#" class="btn  btn-outline-secondary active" data-toggle="tooltip" title="Grid view">
                                    <i class="fa fa-th"></i></a>
                            </div>
                        </div>
                    </header><!-- sect-heading -->

                    <div class="row">
                        <!-- col.// -->
                        <?php

                        $Ads->showAds();

                        ?>

                    </div> <!-- row end.// -->


                    <nav class="mt-4" aria-label="Page navigation sample">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>

                </main> <!-- col.// -->

            </div>

        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer border-top padding-y">
        <div class="container">
            <p class="float-md-right">
                &copy Copyright 2019 All rights reserved
            </p>
            <p>
                <a href="#">Terms and conditions</a>
            </p>
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->



    <script>
        let spantag = document.getElementById("ItemsFound");
        let items = document.querySelectorAll('.col-md-4').length;
        spantag.innerText = items + " ads found";
    </script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="../src/frontend/assets/js/simplenav.js"></script>
</body>

</html>