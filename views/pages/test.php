<main id="main">
    <?php
    include view('includes/breadcrumbs');
    ?>


    <div class="test" style="background-color: bisque; margin: 5px">
        <p style="padding: 5px; text-align: justify">

            <?php
            $eded = '';
            $output = '';
            if( isset($_POST['eded']) )
            {
                $eded = $_POST['eded'];
                if (is_numeric($eded))
                {
                    if ( isset($_POST['tek_cut']) )
                    {
                        if ( $eded%2 == 0 )
                        {
                            $output = $eded." cutdur";
                        }
                        else
                        {
                            $output = $eded." tekdir";
                        }
                    }
                    elseif ( isset($_POST['kv']) )
                    {
                        $output = $eded * $eded;
                    }

                }
                else
                {
                    $output = "<b>$eded</b> eded deyildir";
                }
            }

            ?>

        <form action="" method="post">
            <input type="text" name="eded" value="<?= $eded ?>">
            <input type="submit" name="tek_cut" value="Tek/Cut">
            <input type="submit" name="kv" value="KV">
        </form>

        <?= $output ?>
        </p>
    </div>
</main>