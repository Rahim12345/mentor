<?php
declare(strict_types=1);

include 'core/const/main.php';
include 'core/helpers/main.php';
include 'core/controllers/BaseController.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>
        <?php
            if( APP_NAME_FIRST )
            {
                echo APP_NAME . APP_TITLE_MARK . $page_title;
            }
            else
            {
                echo $page_title . APP_TITLE_MARK . APP_NAME;
            }
        ?>
    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="<?php echo APP_URL; ?>/assets/img/favicon.png" rel="icon">
    <link href="<?php echo APP_URL; ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="<?php echo APP_URL; ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?php echo APP_URL; ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo APP_URL; ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo APP_URL; ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo APP_URL; ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo APP_URL; ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo APP_URL; ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="<?php echo APP_URL; ?>/assets/css/style.css" rel="stylesheet">
</head>

<body>

<?php
    include view('includes/header');

    if (!isset($_GET['page']))
    {
        include view('includes/banner');
    }

    include $content;

    include view('includes/footer');
?>
</body>

</html>