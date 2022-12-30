<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="IT complexity management & networking infrastructure company who is expertise in helping customers to modernize & empower the IT, through Digital Age Networking, Business Continuity Collaboration & Intelligence and Security solutions" />
    <meta name="keywords" content="IT complexity management, networking infrastructure, through Digital Age Networking, Business Continuity Collaboration, Intelligence and Security solutions" />
    <meta name="author" content="R17 Group" />

    <title><?= $title; ?></title>

    <meta property="og:title" content="R17 Kelola" />
    <meta property="og:description" content="IT complexity management & networking infrastructure company who is expertise in helping customers to modernize & empower the IT, through Digital Age Networking, Business Continuity Collaboration & Intelligence and Security solutions" />
    <meta property="og:image" content="<?= base_url(''); ?>assets/img/logo.png" />
    <meta property="og:url" content="<?= base_url(''); ?>" />
    <meta property="og:site_name" content="R17 Kelola" />

    <!-- faveicon -->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/faveicon.png'); ?>">
    <!-- fontawosom -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <!-- Bootstrap Core CSS-->
    <link href="<?= base_url('assets'); ?>/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS-->
    <link href="<?= base_url('assets'); ?>/css/pheromone.css" rel="stylesheet" />
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Search Console Verification -->

    <meta name="google-site-verification" content="aUJm4-rRzZnLDixhenQnSBDJzsHtmIC1IpCzE6JASVk" />
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
    <nav class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".navbar-main-collapse" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/" class="navbar-brand page-scroll">
                    <!-- Img or text logo-->
                    <img src="<?= base_url('assets'); ?>/img/logo.png" alt="Logo R17 kelola" class="logo logo-asli" />
                    <img src="<?= base_url('assets'); ?>/img/logo-r17-white.png" alt="Logo R17 kelola" class="logo logo-white" />
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
                            <li><a href="<?= base_url('insight/article-news'); ?>">Article & News</a></li>
                            <li><a href="<?= base_url('insight/event'); ?>">Event</a></li>
                        </ul>
                    </li>
                    <!-- Contact -->
                    <li>
                        <a href="#">Contact <i class="fa fa-angle-down"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?= base_url('career'); ?>">Career</a></li>
                            <li><a href="<?= base_url('contact-us'); ?>">Contact Us</a></li>
                            <li><a href="<?= base_url(''); ?>help/">Helpdesk</a></li>
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