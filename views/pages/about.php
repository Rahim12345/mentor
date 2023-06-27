<main id="main">
    <?php
    include view('includes/breadcrumbs');
    ?>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="<?= $about_section['src'] ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <?= $about_section['text'] ?>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">

                <?php foreach ($counts as $count): ?>
                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="<?= $count['start'] ?>" data-purecounter-end="<?= $count['end'] ?>" data-purecounter-duration="<?= $count['duration'] ?>" class="purecounter"></span>
                    <p><?= $count['name'] ?></p>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?= $testimonials['title'] ?></h2>
                <p><?= $testimonials['sub_title'] ?></p>
            </div>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                <?php 
                    $n = 1;
                ?>
                <?php foreach($testimonials['slides'] as $slide): ?>
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="assets/img/testimonials/testimonials-<?= $n; ?>.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman <?= $n ?></h3>
                                <h4>Ceo &amp; Founder <?= $n ?></h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.  <?= $n ?>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <?php 
                        $n++;
                    ?>

                <?php endforeach; ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

</main><!-- End #main -->