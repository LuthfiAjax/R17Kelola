<!-- Header-->
<header data-background="<?= base_url('assets'); ?>/img/header/about-us.jpg" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1>Event</h1>
    </div>
</header>
<!-- News Block-->
<section id="news" class="section-small">
    <div class="container">
        <div class="clearfix"></div>
        <div class="row grid-pad">
            <?php foreach ($events as $event) : ?>
                <div class="col-sm-6 col-md-4">
                    <a href="<?= base_url('insight/event/R17/' . $event['slug_id']); ?>"><img src="<?= base_url('assets/img/event/' . $event['small_image']); ?>" alt="<?= $event['title_id']; ?>" class="img-responsive center-block" />
                        <h5 style="
                            display: -webkit-box;
                            -webkit-line-clamp: 2;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;">
                            <?= $event['title_id']; ?>
                        </h5>
                    </a>
                    <div class="mb-4" style="
                        display: -webkit-box;
                        -webkit-line-clamp: 3;
                        -webkit-box-orient: vertical;
                        overflow: hidden;
                        text-overflow: ellipsis;">
                        <?= $event['deskripsi']; ?>
                    </div>
                    <span style="position: absolute;right:20px;top:10px;background:#f9f9f9d1;text-align: center;border-radius: 10px 10px 10px 10px;color:black;padding:5px 10px;font-size:10px;"><b><?= date('Y-m-d', $event['publish_date']); ?></b></span>
                    <a href="<?= base_url('insight/event/R17/' . $event['slug_id']); ?>" class="btn btn-gray btn-xs">Read more</a>
                </div>
            <?php endforeach; ?>
            <!-- pagination -->
            <div class="row">
                <div class="d-flex justify-content-center">
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
</section>