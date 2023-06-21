<?php
/**
 * @author Rahim Süleymanov
 * @email rahim.suleymanov94@gmail.com
 * Date: 30.05.2023
 * Time: 21:00
 */


if ( isset($_POST['name'], $_POST['email'], $_POST['subject'], $_POST['message']) )
{
    $name       = trim( $_POST['name'] );
    $email      = trim( $_POST['email'] );
    $subject    = trim( $_POST['subject'] );
    $message    = trim( $_POST['message'] );

    if ( empty( $name ))
    {
        echo 'Ad xanası boş ola bilməz';
    }
    else
    {
        $name_length = mb_strlen($name);

        if ( $name_length > 30 )
        {
            echo 'Ad maksimum 30 simvol ola bilər';
        }
    }

    if ( empty( $email ) )
    {
        echo 'Email xanası boş ola bilməz';
    }
    else
    {
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL) )
        {
            echo 'Email doğru email formatında deyil';
        }
    }
}
else
{
    include '../const/main.php';

    header("Location: ".APP_URL."?page=elaqe");
    die();
}