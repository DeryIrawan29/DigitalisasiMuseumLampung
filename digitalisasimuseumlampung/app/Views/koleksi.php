<?= $this->extend('/layout/template'); ?>


<?= $this->section('content'); ?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    KOLEKSI
                </h1>
                <br><br><br><br><br><br><br><br><br><br>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->


<!-- Start gallery Area -->
<section class="gallery-area section-gap gallery-page-area" id="gallery">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Our Exhibition Gallery</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div id="grid-container" class="row">
            <a class="single-gallery" href="/assets/1/img/g1.jpg"><img class="grid-item" src="/assets/1/img/g1.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g2.jpg"><img class="grid-item" src="/assets/1/img/g2.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g3.jpg"><img class="grid-item" src="/assets/1/img/g3.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g4.jpg"><img class="grid-item" src="/assets/1/img/g4.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g5.jpg"><img class="grid-item" src="/assets/1/img/g5.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g6.jpg"><img class="grid-item" src="/assets/1/img/g6.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g7.jpg"><img class="grid-item" src="/assets/1/img/g7.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g8.jpg"><img class="grid-item" src="/assets/1/img/g8.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g9.jpg"><img class="grid-item" src="/assets/1/img/g9.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g10.jpg"><img class="grid-item" src="/assets/1/img/g10.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g11.jpg"><img class="grid-item" src="/assets/1/img/g11.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g12.jpg"><img class="grid-item" src="/assets/1/img/g12.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g4.jpg"><img class="grid-item" src="/assets/1/img/g4.jpg"></a>
            <a class="single-gallery" href="/assets/1/img/g5.jpg"><img class="grid-item" src="/assets/1/img/g5.jpg"></a>
        </div>
    </div>
</section>
<!-- End gallery Area -->

<?= $this->endSection(); ?>