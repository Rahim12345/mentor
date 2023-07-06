<!-- ======= Popular Courses Section ======= -->
<section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

        <?php
            if ( !isset($_GET['page']) )
            {
                echo '
                <div class="section-title">
                    <h2>
                        '.$courses['title']['title_1'].'
                    </h2>
                    <p>
                        '.$courses['title']['title_2'].'
                    </p>
                </div>
                ';
            }
        ?>


        <div class="row" data-aos="zoom-in" data-aos-delay="100">

            <?php
            foreach ($courses['elements'] as $element)
            {
                echo '
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="course-item">
                                <img src="'.$element['src'].'" class="img-fluid" alt="...">
                                <div class="course-content">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4>'.$element['category'].'</h4>
                                        <p class="price">$'.$element['price'].'</p>
                                    </div>

                                    <h3><a href="'.APP_URL.'/?page=kurslar&id='.$element['id'].'">'.$element['name'].'</a></h3>
                                    <p>'.$element['intro_text'].'</p>
                                    <div class="trainer d-flex justify-content-between align-items-center">
                                        <div class="trainer-profile d-flex align-items-center">
                                            <img src="'.$element['trainer_src'].'" class="img-fluid" alt="">
                                            <span>'.$element['trainer_name'].'</span>
                                        </div>
                                        <div class="trainer-rank d-flex align-items-center">
                                            <i class="bx bx-user"></i>&nbsp;'.$element['visit'].'
                                            &nbsp;&nbsp;
                                            <i class="bx bx-heart"></i>&nbsp;'.$element['like'].'
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Course Item-->
                        ';
            }

            ?>


        </div>

    </div>
</section><!-- End Popular Courses Section -->