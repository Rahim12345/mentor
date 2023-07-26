<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<main id="main">
    <?php
    include view('includes/breadcrumbs');
    ?>


    <div class="test" style="background-color: bisque; margin: 5px">
        <p style="padding: 5px; text-align: justify">

            <?php
            $qd = '';
            $eded = '';
            $output = '';
            $operator = '';
            $quvvetin_derecesini_goster = 'none';
            if (isset($_POST['hesabla']))
            {
                if( isset($_POST['eded']) )
                {
                    $eded = $_POST['eded'];
                    if (is_numeric($eded))
                    {
                        if ( isset($_POST['operator']) )
                        {
                            $operator = $_POST['operator'];
                            if ($operator == 'menfi_musbet')
                            {
                                if ( $eded > 0 )
                                {
                                    $output = $eded." Musbet";
                                }
                                elseif ( $eded < 0)
                                {
                                    $output = $eded." Menfi";
                                }
                                else
                                {
                                    $output = $eded." nə mənfi,nə də müsbət ədəddir";
                                }
                            }
                            elseif ($operator == 'qy')
                            {
                                if (isset($_POST['quvvetin_derecesi']) && is_numeric($_POST['quvvetin_derecesi']))
                                {
                                    $qd = $_POST['quvvetin_derecesi'];
                                    $output = pow($eded,$qd);
                                }
                                else
                                {
                                    $output = 'Qüvvətin dərəcəsini daxil edin';
                                }
                                $quvvetin_derecesini_goster = 'inline-block';
                            }
                        }
                    }
                    else
                    {
                        $output = "<b>$eded</b> eded deyildir";
                    }
                    {
                        $eded1 = 25;
                        $eded2 = 100;

                        $kok1 = sqrt($eded1);
                        $kok2 = sqrt($eded2);
                    }
                }
            }

            if (isset($_POST['operator']) && $_POST['operator'] == 'qy')
            {
                $quvvetin_derecesini_goster = 'inline-block';
                $operator = $_POST['operator'];
                $qd = $_POST['quvvetin_derecesi'];
            }

            ?>

        <form action="" method="post">
            <input type="text" name="eded" value="<?= $eded ?>">
            <select name="operator" id="operator">
                <option value="menfi_musbet" <?= $operator == 'menfi_musbet' ? 'selected' : '' ?> >Menfi/Musbet</option>
                <option value="qy" <?= $operator == 'qy' ? 'selected' : '' ?> >Qüvvətə yüksəltmə</option>
            </select>
            <input type="text" name="quvvetin_derecesi" id="quvvetin_derecesi" placeholder="Qüvvətin dərəcəsi" style="display: <?= $quvvetin_derecesini_goster; ?>" value="<?= $qd ?>">
            <button type="submit" name="hesabla">Hesabla</button>
        </form>

        <?= $output ?>
        </p>
    </div>
</main>

<script !src="">
    $(document).ready(function(){
        $('#operator').change(function(){
            let operator_value = $(this).val();

            if(operator_value == 'qy')
            {
                $('#quvvetin_derecesi').css('display', 'inline-block');
            }
            else
            {
                $('#quvvetin_derecesi').css('display', 'none');
            }
        });
    });
</script>