<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    EVENTS
                </h1>
                <br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start upcoming-event Area -->
<section class="upcoming-event-area section-gap" id="events">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Events Gallery</h1>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 event-left">
                <div class="single-events">
                    <img class="img-fluid" src="/assets/1/img/tmn_way_kambas.jpg" alt="">
                    <a href="/Events/TAMAN NASIONAL WAY KAMBAS/Taman_Way_Kambas">
                        <h4>Taman Way Kambas</h4>
                    </a>
                    <h6><span>21st February</span> at Central government museum</h6>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially.
                    </p>
                    <a href="Views/Events/TAMAN NASIONAL WAY KAMBAS/Taman_Way_Kambas" class="primary-btn text-uppercase">View Details</a>
                </div>
                <div class="single-events">
                    <img class="img-fluid" src="/assets/1/img/festival.jpg" alt="">
                    <a href="#">
                        <h4>Event on the rock solid carbon</h4>
                    </a>
                    <h6><span>21st February</span> at Central government museum</h6>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially.
                    </p>
                    <a href="#" class="primary-btn text-uppercase">View Details</a>
                </div>
            </div>
            <div class="col-lg-6 event-right">
                <div class="single-events">
                    <a href="#">
                        <h4>Event on the rock solid carbon</h4>
                    </a>
                    <h6><span>21st February</span> at Central government museum</h6>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially.
                    </p>
                    <a href="#" class="primary-btn text-uppercase">View Details</a>
                    <img class="img-fluid" src="/assets/1/img/siger.JPG" alt="">
                </div>
                <div class="single-events">

                    <a href="#">
                        <h4>Event on the rock solid carbon</h4>
                    </a>
                    <h6><span>21st February</span> at Central government museum</h6>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially.
                    </p>
                    <a href="#" class="primary-btn text-uppercase">View Details</a>
                    <img class="img-fluid" src="/assets/1/img/teluk_kiluan.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End upcoming-event Area -->


<?= $this->endSection(); ?>