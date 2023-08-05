<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="<?php echo APP_URL ?>"><?php echo APP_NAME ?></a></h1>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a  class="<?php echo !isset($_GET['page']) ? 'active' : '' ?>" href="<?php echo APP_URL; ?>">Əsas səhifə</a></li>
                <li><a  class="<?php echo isset($_GET['page']) && $_GET['page'] == 'haqqimizda' ? 'active' : '' ?>" href="<?php echo APP_URL; ?>?page=haqqimizda">Haqqımızda</a></li>
                <li><a  class="<?php echo isset($_GET['page']) && $_GET['page'] == 'kurslar' ? 'active' : '' ?>" href="<?php echo APP_URL; ?>?page=kurslar">Kurslar</a></li>
                <li><a  class="<?php echo isset($_GET['page']) && $_GET['page'] == 'trainers' ? 'active' : '' ?>" href="<?php echo APP_URL; ?>?page=trainers">Trainers</a></li>
                <li class="dropdown"><a href="#"><span>Tasks</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="<?php echo APP_URL; ?>?page=letter-converter">Letter Converter</a></li>
                        <li><a href="<?php echo APP_URL; ?>?page=exercise-preparing">Misal hazırlayan</a></li>
                        <li><a href="<?php echo APP_URL; ?>?page=sade-ededler">Sadə ədədlər</a></li>
                        <li><a href="#">Drop Down 4</a></li>
<!--                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Deep Drop Down 1</a></li>-->
<!--                                <li><a href="#">Deep Drop Down 2</a></li>-->
<!--                                <li><a href="#">Deep Drop Down 3</a></li>-->
<!--                                <li><a href="#">Deep Drop Down 4</a></li>-->
<!--                                <li><a href="#">Deep Drop Down 5</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
                    </ul>
                </li>
                <li><a class="<?php echo isset($_GET['page']) && $_GET['page'] == 'elaqe' ? 'active' : '' ?>" href="<?php echo APP_URL; ?>?page=elaqe">Əlaqə</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <a href="courses.html" class="get-started-btn">Get Started</a>

    </div>
</header><!-- End Header -->