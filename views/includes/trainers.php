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