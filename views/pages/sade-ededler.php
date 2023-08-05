<main id="main">
    <?php
    include view('includes/breadcrumbs');
    ?>


    <div class="test" style="background-color: bisque; margin: 5px">
        <p style="padding: 5px; text-align: justify">
            <?php
            $eded_1 = 1;
            $eded_2 = 1;
            if ( isset($_POST['eded_1']) )
            {
                $eded_1 = $_POST['eded_1'];
                $eded_2 = $_POST['eded_2'];
            }
            ?>

        <form action="" method="post">
            <input type="text" name="eded_1" value="<?= $eded_1; ?>">
            <input type="text" name="eded_2" value="<?= $eded_2; ?>" style="display:none;">
            <button type="submit">Yoxla</button>
        </form>
        <?php
        $ebob = EBOB($eded_1);
        echo "ƏBOB($eded_1) = $ebob";
        ?>
        </p>
    </div>
</main>
