<main id="main">
    <?php
    include view('includes/breadcrumbs');
    ?>


    <div class="test" style="background-color: bisque; margin: 5px">
        <p style="padding: 5px; text-align: justify">

            <?php
                $arr = [1,2,3,5,7,10];

                foreach ($arr as $rahim)
                {
                    echo $rahim.'<br>';
                }
            ?>


        </p>
    </div>
</main>