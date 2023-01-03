<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- meta tag -->
    <meta name="description" content="<?= $article->deskripsi; ?>" />
    <meta name="author" content="R17 Group" />
    <meta name="keywords" content="<?= $article->title_id; ?>" />

    <meta property="og:title" content="R17 Group" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="<?= base_url(''); ?>assets/img/logo.png" />
    <meta property="og:url" content="<?= base_url(''); ?>" />
    <meta property="og:site_name" content="R17 Group" />

    <!-- faveicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/faveicon.png'); ?>">

    <title>R17 - <?= $article->title_id; ?></title>
    <!-- Bootstrap Core CSS-->
    <link href="<?= base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS-->
    <link href="<?= base_url('assets'); ?>/css/pheromone.css" rel="stylesheet" />

    <style>
        /* Solid Social Share Buttons */

        .btn-social,
        .btn-social:visited,
        .btn-social:focus,
        .btn-social:hover,
        .btn-social:active {
            color: #ffffff;
            text-decoration: none;
            transition: opacity .15s ease-in-out;
        }

        .btn-social:hover,
        .btn-social:active {
            opacity: .75;
        }

        .btn-fb {
            background-color: #3b5998;
        }

        .btn-tw {
            background-color: #1da1f2;
        }

        .btn-in {
            background-color: #0077b5;
        }

        .btn-gp {
            background-color: #db4437;
        }

        .btn-rd {
            background-color: #ff4500;
        }

        .btn-hn {
            background-color: #ff4000;
        }

        /* Outline Social Share Buttons */

        .btn-social-outline {
            background-color: transparent;
            background-image: none;
            text-decoration: none;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        .btn-fb-outline {
            color: #3b5998;
            border-color: #3b5998;
        }

        .btn-fb-outline:hover,
        .btn-fb-outline:active {
            color: #ffffff;
            background-color: #3b5998;
        }

        .btn-tw-outline {
            color: #1da1f2;
            border-color: #1da1f2;
        }

        .btn-tw-outline:hover,
        .btn-tw-outline:active {
            color: #ffffff;
            background-color: #1da1f2;
        }

        .btn-in-outline {
            color: #0077b5;
            border-color: #0077b5;
        }

        .btn-in-outline:hover,
        .btn-in-outline:active {
            color: #ffffff;
            background-color: #0077b5;
        }

        .btn-gp-outline {
            color: #db4437;
            border-color: #db4437;
        }

        .btn-gp-outline:hover,
        .btn-gp-outline:active {
            color: #ffffff;
            background-color: #db4437;
        }

        .btn-rd-outline {
            color: #ff4500;
            border-color: #ff4500;
        }

        .btn-rd-outline:hover,
        .btn-rd-outline:active {
            color: #ffffff;
            background-color: #ff4500;
        }

        .btn-hn-outline {
            color: #ff4000;
            border-color: #ff4000;
        }

        .btn-hn-outline:hover,
        .btn-hn-outline:active {
            color: #ffffff;
            background-color: #ff4000;
        }

        figure.image {
            text-align: center;
        }

        figure p {

            margin-bottom: 10px !important;

        }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M4KJG7FPQV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "G-M4KJG7FPQV");
    </script>
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">

    <!-- Preloader-->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- Navigation-->
    <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/" class="navbar-brand page-scroll">
                    <!-- Img or text logo--><img src="<?= base_url('assets'); ?>/assets/img/logo.png" alt="" class="logo logo-asli" />
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-main-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="hidden"><a href="#page-top"></a></li>
                    <li>
                        <a href="<?= base_url(''); ?>">Home </a>
                    </li>
                    <li>
                        <a href="<?= base_url('about'); ?>">About Us</a>
                    </li>
                    <!-- solusi -->
                    <li>
                        <a href="#solution" class="page-scroll">Solution <i class="fa fa-angle-down"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php foreach ($solutions as $solution) : ?>
                                <li>
                                    <a href="<?= base_url('' . $solution['url']); ?>"><?= $solution['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <!-- teknologi -->
                    <li>
                        <a href="#technology" class="page-scroll">Technology <i class="fa fa-angle-down"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php foreach ($technologies as $technology) : ?>
                                <li>
                                    <a href="<?= base_url('' . $technology['url']); ?>"><?= $technology['name']; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <!-- project -->
                    <li>
                        <a href="<?= base_url(''); ?>project" class="page-scroll">Project <i class="fa fa-angle-down"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?= base_url('project/data-digital-forensic'); ?>">Data Digital Forensic</a>
                            </li>
                            <li>
                                <a href="<?= base_url('project/it-enterprise-architecture'); ?>">IT Enterprise Architecture</a>
                            </li>
                            <li>
                                <a href="<?= base_url('project/it-service-management'); ?>">IT Service Management</a>
                            </li>
                            <li>
                                <a href="<?= base_url('project/radio-communication-system-combat-vehicles'); ?>">Radio Communication System – Combat Vehicles</a>
                            </li>
                            <li>
                                <a href="<?= base_url('project/secure-cyber-ecosystem-monitoring-center'); ?>">Secure Cyber Ecosystem Monitoring Center (SCEMC)</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Insight -->
                    <li>
                        <a href="#">Insight <i class="fa fa-angle-down"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?= base_url('insight/article-news'); ?>">Article & News</a>
                            </li>
                            <li>
                                <a href="<?= base_url('insight/event'); ?>">Event</a>
                            </li>
                        </ul>
                    </li>
                    <!-- Contact -->
                    <li>
                        <a href="#">Contact <i class="fa fa-angle-down"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?= base_url('career'); ?>r">Career</a>
                            </li>
                            <li>
                                <a href="<?= base_url('contact-us'); ?>">Contact Us</a>
                            </li>
                            <li>
                                <a href="<?= base_url(''); ?>help/">Helpdesk</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle"><i class="fa fa-search fa-lg"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <form method="GET" class="search-form" action="insight/article-news">
                                    <button type="submit" title="Search" class="search-button">
                                        <i class="fa fa-search fa-lg"></i>
                                    </button>
                                    <input type="text" name="cari" placeholder="SEARCH ARTICLES" class="form-control search-field" />
                                </form>
                            </li>
                        </ul>
                    </li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle"><span class="lang">Eng</span><span class="caret"></span></a>
                        <!-- <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Indonesia</a></li>
                        </ul> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->