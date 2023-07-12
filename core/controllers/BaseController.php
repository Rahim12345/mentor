<?php
/**
 * @author Rahim Süleymanov
 * @email rahim.suleymanov94@gmail.com
 * Date: 21.06.2023
 * Time: 22:07
 */


$contact_info = [
    'address' => 'Azərbaycan, Saatlı',
    'phone' => '+994 77 582 99 89',
    'email' => 'info@example.com'
];

if ( isset($_GET['page']) )
{
    $page = $_GET['page'];

    if ($page == 'haqqimizda')
    {
        include 'AboutController.php';
    }
    elseif ($page == 'kurslar' && !isset($_GET['id']))
    {
        include 'KursController.php';
    }
    elseif ($page == 'kurslar' && isset($_GET['id']))
    {
        include 'KursHaqqindaController.php';
    }
    elseif ($page == 'trainers')
    {
        include 'TrainersController.php';
    }
    elseif ($page == 'elaqe')
    {
        $page_title             = 'Əlaqə';
        $breadcrumbs_title      = 'Əlaqə';
        $breadcrumbs_content    = 'B2B GÖRÜŞÜN GÜCÜNƏ İNANIRIQ';
        $content                = view('pages/contact');
    }
    elseif ($page == 'test')
    {
        include 'TestController.php';
    }
    else
    {
        include 'ErrorController.php';
    }
}
else
{
    include 'HomeController.php';
}