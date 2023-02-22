<!-- Header-->
<header data-background="<?= base_url('assets/'); ?>img/header/about-us.jpg" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1>Career</h1>
    </div>
</header>
<!-- About -->
<section id="news" class="section-small">
    <div class="container">
        <style>
            .clearfix h2 {
                margin-bottom: 2px !important;
            }
        </style>
        <div class="clearfix text-center">
            <h2><b>WORKING AT R17</b></h2>
            <p>Join our team and help connect the world with customized communication and networking solutions.</p>
        </div>
        <div class="row grid-pad">
            <style>
                #small_image {
                    width: 400px;
                    height: 200px;
                    object-fit: cover;
                }

                h4 {
                    margin-bottom: 2px !important;
                }
            </style>
            <?php foreach ($careers as $row) : ?>
                <div class="col-sm-6 col-md-4">
                    <a href="<?= base_url('career/' . $row['slug_jobs']); ?>">
                        <img id="small_image" src="<?= base_url('assets/img/techno/dw.jpg'); ?>" alt="Loker" class="img-responsive center-block" />
                        <span class="text-left"><i class="fas fa-location-dot"></i> <?= $row['type_jobs']; ?></span>
                        <h4 style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                            <b><?= $row['title_jobs']; ?></b>
                        </h4>
                    </a>
                    <div class="mb-4" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                        We have opened vacancies for workers to fill the <?= $row['title_jobs']; ?> position <br>
                        <span><b>Expiration Date</b> : <?= date('j F Y', $row['expired_jobs']); ?></span>
                    </div>
                    <a href="<?= base_url('career/' . $row['slug_jobs']); ?>" class="btn btn-gray btn-xs">View Detail</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>