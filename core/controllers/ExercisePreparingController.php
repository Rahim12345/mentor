<?php
/**
 * @author Rahim Süleymanov
 * @email rahim.suleymanov94@gmail.com
 * Date: 21.06.2023
 * Time: 22:48
 */

include_once $_SERVER['DOCUMENT_ROOT'].'/core/helpers/letter-converter.php';
$page_title             = 'Misal hazırlayan';
$breadcrumbs_title      = 'Misal hazırlayan';
$breadcrumbs_content    = 'Bu bir avtomatik misal hazırlayan proqramdır.';

$content                = $_SERVER['DOCUMENT_ROOT'].'./views/pages/exercise-preparing.php';

if ( isset($_POST['text']) )
{
    echo letter_converter($_POST['text']);
}