<section class="section-small-event">
    <img src="<?= base_url('assets/img/event/' . $article->header_image); ?>" class="img-fluid" alt="" />
</section>

<section id="news-single" class="section-small">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row d-md-flex" style="justify-content: center">
                    <div class="col-md-10 fs-20">
                        <h1 style="letter-spacing: normal">
                            <?= $article->title_id; ?>
                        </h1>
                        <article>
                            <?= $article->body_text; ?>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>