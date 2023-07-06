<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="<?php echo $about_section['sekil'] ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3><?php echo $about_section['basliq'] ?></h3>
                    <?php
                        echo $about_section['mezmun'];
                    ?>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">
                <?php

                foreach ( $counts_section as $kateqoriya )
                {
                    echo '
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="'.$kateqoriya['say'].'" data-purecounter-duration="1" class="purecounter"></span>
                        <p>'.$kateqoriya['kateqoriya_adi'].'</p>
                    </div>
                    ';
                }

                ?>
            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3><?php echo $why_us_section['col_1']['basliq']; ?></h3>
                        <?php echo $why_us_section['col_1']['mezmun']; ?>
                        <div class="text-center">
                            <a href="<?php echo $why_us_section['col_1']['link']; ?>" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <?php
                                foreach ( $why_us_section['col_2'] as $col2)
                                {
                                    echo '
                                    <div class="col-xl-4 d-flex align-items-stretch">
                                        <div class="icon-box mt-4 mt-xl-0">
                                            '.$col2['icon'].'
                                            <h4>'.$col2['basliq'].'</h4>
                                            <p>'.$col2['intro_text'].'</p>
                                        </div>
                                    </div>
                                    ';
                                }

                            ?>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <?php
                    foreach ($features as $value)
                    {
                        echo '
                        <div class="col-lg-3 col-md-4 mt-4">
                            <div class="icon-box">
                                <i class="'.$value['icon']['class'].'" style="color: #'.color_generator().';"></i>
                                <h3><a href="">'.$value['link_text'].'</a></h3>
                            </div>
                        </div>
                        ';
                    }
                ?>
            </div>

        </div>
    </section><!-- End Features Section -->

    <?php
        include 'views/includes/courses.php';
    ?>

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <?php foreach ($trainers as $trainer): ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="<?= $trainer['src'] ?>" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4><?= $trainer['name'] ?></h4>
                            <span><?= $trainer['profession'] ?></span>
                            <p>
                                <?= $trainer['intro_text'] ?>
                            </p>
                            <div class="social">
                                <a href="<?= $trainer['social']['twitter'] ?>"><i class="bi bi-twitter"></i></a>
                                <a href="<?= $trainer['social']['facebook'] ?>"><i class="bi bi-facebook"></i></a>
                                <a href="<?= $trainer['social']['instagram'] ?>"><i class="bi bi-instagram"></i></a>
                                <a href="<?= $trainer['social']['linkedin'] ?>"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section><!-- End Trainers Section -->

</main><!-- End #main -->