<!-- Header-->
<header data-background="<?= base_url('assets/'); ?>img/header/about-us.jpg" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1 class="">Contact us</h1>
    </div>
</header>
<!-- Contact Section-->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>contact us</h2>

                <h5>
                    18 Parc Place Tower D, 8th Floor Jl. Jendral Sudirman kav 52-53
                    Jakarta 12190
                </h5>
                <h5>
                    <i class="fa fa-envelope fa-fw fa-lg"></i>
                    <a href="mailto:sales@r17.co.id">sales@r17.co.id</a>
                </h5>
                <h5>
                    <i class="fa fa-phone fa-fw fa-lg"></i>
                    <a href="tel:+622139721717">+62 21 3972 1717</a>
                </h5>
            </div>
            <div class="col-md-5 col-md-offset-2">
                <h2>Business Contact</h2>
                <!-- Contact Form - Enter your email address on line 17 of the mail/contact_me.php file to make this form work. For more information on how to do this please visit the Docs!-->
                <form id="contactForm" name="form" method="POST">
                    <?php $time = date('d F Y, h:i:s A') ?>
                    <input type="hidden" name="Time" id="Time" value="<?= $time; ?>">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="name" class="sr-only control-label">You Name</label>
                            <input id="Name" name="Name" type="text" placeholder="You Name" required="" data-validation-required-message="Please enter name" class="form-control input-lg" /><span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="email" class="sr-only control-label">You Email</label>
                            <input id="Email" name="Email" type="email" placeholder="You Email" required="" data-validation-required-message="Please enter email" class="form-control input-lg" /><span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="phone" class="sr-only control-label">You Phone</label>
                            <input id="Phone" name="Phone" type="tel" placeholder="You Phone" required="" data-validation-required-message="Please enter phone number" class="form-control input-lg" /><span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label for="message" class="sr-only control-label">Message</label>
                            <textarea id="Message" name="Message" rows="2" placeholder="Message" required="" data-validation-required-message="Please enter a message." aria-invalid="false" class="form-control input-lg"></textarea><span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label class="control-label">Contact with</label>
                            <select id="To" name="opt-contact" class="form-control input-lg" style="width: 100%;" required="" data-validation-required-message="Please choose one.">
                                <option value="sales">Sales</option>
                                <option value="support">Support</option>
                            </select>
                        </div>
                    </div>
                    <div id="success"></div>
                    <button type="submit" name="submit" class="btn btn-blue">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>