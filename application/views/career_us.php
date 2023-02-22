<!-- Header-->
<header data-background="<?= base_url('assets/img/article/20221026075422221026-R17.jpg'); ?>" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1><?= $careers->title_jobs; ?></h1>
    </div>
</header>

<section id="news-single" class="section-small">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- flash data -->
                <?= $this->session->flashdata('message'); ?>
                <div class="row">
                    <div class="col-md-12">
                        <?= $careers->body_jobs; ?>
                        <div>
                            <span><b>Expiration Date</b> : <?= date('j F Y', $careers->expired_jobs); ?></span>
                        </div>
                        <div class="class mb-3">
                            <em>In the event that you haven&rsquo;t received any updates after 3 weeks, your data will be kept and we may contact you for another career destination.</em>
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                            Apply
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Apply Job</h4>
            </div>
            <form class="form-horizontal" action="<?= base_url('apply/career'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input name="apply" type="hidden" class="form-control" value="<?= $careers->title_jobs; ?>">
                            <input name="slug" type="hidden" class="form-control" value="<?= $careers->slug_jobs; ?>">
                            <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Name <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input name="nama" type="text" class="form-control" id="inputPassword3" placeholder="Full name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Phone <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input name="phone" type="number" class="form-control" id="inputPassword3" placeholder="Phone number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">CV <span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input name="cv" type="file" class="form-control" id="inputPassword3" accept="application/pdf" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Portofolio</label>
                        <div class="col-sm-10">
                            <input name="portofolio" type="file" class="form-control" id="inputPassword3" accept="application/pdf">
                            <span class="ms-2">Optional (if neccessary)</span>
                        </div>
                    </div>
                    <?php
                    // generating random numbers
                    $number1 = mt_rand(5, 12);
                    $number2 = mt_rand(3, 10);
                    ?>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label"> <?= $number1 . ' + ' . $number2; ?> =</label>
                        <div class="col-sm-10">
                            <input name="hasil" type="number" class="form-control" id="inputPassword3" required>
                            <input name="number1" type="hidden" value="<?= $number1; ?>" />
                            <input name="number2" type="hidden" value="<?= $number2; ?>" />
                            <span class="ms-2">complete this calculation <span class="text-danger">*</span></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="valid" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>