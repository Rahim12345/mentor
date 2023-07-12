<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2><?= $breadcrumbs_title.' - '.$_SESSION['test'] ?></h2>
            <p><?= $breadcrumbs_content ?></p>
        </div>
    </div><!-- End Breadcrumbs -->

    <?php
    include 'views/includes/trainers.php';
    ?>

</main><!-- End #main -->