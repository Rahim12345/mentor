<?php
/**
 * @author Rahim Süleymanov
 * @email rahim.suleymanov94@gmail.com
 * Date: 27.05.2023
 * Time: 22:38
 */

function view(string $path) :string
{
    return $_SERVER['DOCUMENT_ROOT'].'/views/' . $path . '.php';
}

function session($key = '',$value = '')
{
    if ( $key == '')
    {
        print_r($_SESSION);

        return ;
    }

    if ( $value == '' )
    {
        return $_SESSION[$key];
    }

    return $_SESSION[$key] = $value;
}