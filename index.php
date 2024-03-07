<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ketan - Childcare & Kids School HTML Template</title>
    <link rel="icon" href="./assests/img/favicon.png" type="image/icon type">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assests/css/style.css">
</head>

<body>
    <!-- Testimonial starts ----------------------------------------------------------------------------------------------->
    <section class="testimonial pt-100 position-relative">
        <div class="container text-center slides">
            <div class="row">
                <span class="text-center d-block">Testimonials</span>
                <h3 class="text-center">What Parents Say About Us</h3>
            </div>
            <div class="row py-5 text-center swiper mySwiper">
                <div class="swiper-wrapper d-flex">
                    <div class="col-lg-4 col-md-6 col-12 swiper-slide">
                        <div class="card-teacher">
                            <div class="icon">
                                <i class="fa-solid fa-quote-left text-orange fs-1"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis.
                            </p>
                            <div class="info-box">
                                <h3>Glims Bond</h3>
                                <span>Music Teacher</span>
                            </div>
                        </div>
                        <div class="birdimg text-center my-2">
                            <img src="./assests/img/testimonials-1.png">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 swiper-slide">
                        <div class="card-teacher">
                            <div class="icon">
                                <i class="fa-solid fa-quote-left text-orange fs-1"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis.
                            </p>
                            <div class="info-box">
                                <h3>Sherlock Bin</h3>
                                <span>Art Teacher</span>
                            </div>
                        </div>
                        <div class="birdimg text-center my-3">
                            <img src="./assests/img/testimonials-2.png">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 swiper-slide">
                        <div class="card-teacher">
                            <div class="icon">
                                <i class="fa-solid fa-quote-left text-orange fs-1"></i>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus vel facilisis.
                            </p>
                            <div class="info-box">
                                <h3>Priestly Herbart</h3>
                                <span>Maths Teacher</span>
                            </div>
                        </div>
                        <div class="birdimg text-center my-3">
                            <img src="./assests/img/testimonials-3.png">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 swiper-slide">
                        <div class="col-lg-4 col-12 swiper-slide">
                            <div class="card-teacher">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-left text-orange fs-1"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                                    commodo
                                    viverra maecenas accumsan lacus vel facilisis.
                                </p>
                                <div class="info-box">
                                    <h3>Ujjwal Suman</h3>
                                    <span>Lab Teacher</span>
                                </div>
                            </div>
                            <div class="birdimg text-center my-3">
                                <img src="./assests/img/testimonials-2.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-button justify-content-between d-flex buttons">
                <button class="nextbtn text-fa px-3 py-1 fs-3 position-absolute top-50 start-0 prev ms-5 ">
                    &#xf053;
                </button>
                <button class="nextbtn text-fa px-3 py-1 fs-3 position-absolute top-50 end-0 next me-5 ">
                    &#xf054;
                </button>
            </div>
    </section>
    <!-- testimonial section end -->

    <!-- ========================= copyright Section start ========================= -->
    <?php include 'include/copyright.php'?>
    <!-- ========================= /copyright Section end ========================= -->

    <!-- script section start -->

    <script src="./assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            centeredSlides: false,
            spaceBetween: 10,
            grabCursor: true,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".next",
                prevEl: ".prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                600: {
                    slidesPerView: 2,
                },
                1000: {
                    slidesPerView: 3,
                }
            }
        });
    </script>
    <!-- /script section end -->



</body>

</html>