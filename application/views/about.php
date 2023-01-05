<!-- Header-->
<header data-background="<?= base_url('assets/'); ?>img/header/about-us.jpg" class="intro introhalf">
    <!-- Intro Header-->
    <div class="intro-body">
        <h1>About Us</h1>
    </div>
</header>

<!-- About -->
<section id="about">
    <div class="container-fluid text-justify">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <h3 class="text-center">About R17</h3>
                <p>
                    In a competitive world, we turn challenges into achievements.
                    Where we lives, where we heading, it’s through our experiences &
                    technology. Through years, we bring hopes into a reality, we
                    deliver you the happiness & satisfaction by connecting the best
                    expertise, ideas & new technology to onboarding you the
                    sustainable future.
                </p>
                <p>
                    Rizki Tujuh Belas (R17) Kelola – Large system integrator who helps
                    governments, companies and SOEs to bring digital transformation by
                    using reliable infrastructure, multi-layered cybersecurity systems
                    and application systems to help improving government services to
                    the community, customer satisfaction in companies and improving
                    the work of SOEs through Digital Age Networking, Business
                    Continuity Collaboration & Security and Intelligence solutions. We
                    offer the flexible solutions that made for your organisation’s
                    needs, either you are small or medium business with limited IT
                    resources or enterprises with complex IT infrastructure, together
                    we help you to invent the best solutions for your business.
                </p>
                <p>
                    To service this demand a multitude of vendors have entered the
                    market which has created complexity for the enterprise. We secure
                    your network environment through integrated security solutions,
                    providing security management system including software &
                    hardware, fasten onboarding technologies to your IT complexity
                    either on your data center or cloud, and also communication as
                    service. The solutions we offer are based on our constantly
                    updated and tested experience of proprietary AI and Data Science
                    tools.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section-small" id="ahli">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center">PROFESSIONAL CERFITICATIONS</h3>
                <div class="owl-carousel owl-theme ahli-carousel px-5">
                    <?php foreach ($sertifikatpro as $sertifpro) : ?>
                        <div class="item">
                            <img class="center-block img-responsive" src="<?= base_url('assets/img/sertifikasi/' . $sertifpro['img_certification']); ?>" alt="CERFITICATIONS R17" />
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-small">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="text-center">Our Certification</h3>
                <div class="owl-carousel owl-theme sertifikasi-carousel px-5 owl-centered py-5">
                    <?php foreach ($sertifikat as $sertif) : ?>
                        <div class="item">
                            <img class="center-block img-responsive" src="<?= base_url('assets/img/sertifikasi/' . $sertif['img_certification']); ?>" alt="Our Certification" />
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>