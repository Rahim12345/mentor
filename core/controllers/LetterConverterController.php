<?php
/**
 * @author Rahim Süleymanov
 * @email rahim.suleymanov94@gmail.com
 * Date: 21.06.2023
 * Time: 22:48
 */

include_once $_SERVER['DOCUMENT_ROOT'].'/core/helpers/letter-converter.php';
$page_title             = 'Letter Converter';
$breadcrumbs_title      = 'Letter Converter';
$breadcrumbs_content    = 'How to make a letter converter';

$content                = $_SERVER['DOCUMENT_ROOT'].'./views/pages/letter-converter.php';

if ( isset($_POST['text']) )
{
    echo letter_converter($_POST['text']);
}