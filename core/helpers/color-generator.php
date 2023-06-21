<?php
/**
 * @author Rahim Süleymanov
 * @email rahim.suleymanov94@gmail.com
 * Date: 14.06.2023
 * Time: 21:43
 */

function color_generator() : string
{
    $chars = 'ABCDEF0123456789';
    $color = '';
    for ( $i = 0; $i < 6; $i++ )
    {
        $color .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $color;
}
 