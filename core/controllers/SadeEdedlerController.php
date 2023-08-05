<?php
/**
 * @author Rahim Süleymanov
 * @email rahim.suleymanov94@gmail.com
 * Date: 30.05.2023
 * Time: 21:00
 */

$page_title             = 'Sadə ədədlər' ;
$breadcrumbs_title      = 'Sadə ədədlər';
$breadcrumbs_content    = 'Sadə ədədləri tapmaq üçün proqram';

$content = view('pages/sade-ededler');

function bolenleri_tap( $eded )
{
    $convert_before_int_len     = strlen($eded);
    $eded                       = (int)$eded;
    $convert_after_int_len      = strlen($eded);

    if ( $convert_before_int_len == $convert_after_int_len && $eded > 0 )
    {
        if ( $eded == 1 )
        {
            return [
                'message'=>'1 nə sadə, nə də mürəkkəb ədəddir',
                'bolenleri'=>[1]
            ];
        }
        else
        {
            $bolen_sayi = [];
            for ( $i = 1; $i <= $eded;$i++)
            {
                if ( $eded%$i == 0 )
                {
                    $bolen_sayi[] = $i;
                }
            }

            if ( count($bolen_sayi) == 2 )
            {
                return [
                    'message'=>$eded.' sadə ədəddir',
                    'bolenleri'=>$bolen_sayi,
                    'check'=>true
                ];
            }
            else
            {
                return [
                    'message'=>$eded.' mürəkkəb ədəddir',
                    'bolenleri'=>$bolen_sayi
                ];
            }
        }
    }
    else
    {
        return [
            'message'=>'Yalnız natural ədədlər daxil edilə bilər',
            'bolenleri'=>[]
        ];
    }
}

function EKOB($eded_1, $eded_2)
{
    return ($eded_1 * $eded_2) / EBOB($eded_1, $eded_2);
}

function EBOB($eded_1)
{
    $ededler = explode(';', $eded_1);

    $a = 1;

    $test = [];
    foreach ($ededler as $eded)
    {
        ${'eded_'.$a.'_bolenleri'} = bolenleri_tap( $eded )['bolenleri'];
        $test[] = ${'eded_'.$a.'_bolenleri'};
        $a++;
    }

    $result = call_user_func_array('array_intersect', $test);
    return max($result);
}
