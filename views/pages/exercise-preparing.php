<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js" integrity="sha512-b6lGn9+1aD2DgwZXuSY4BhhdrDURVzu7f/PASu4H1i5+CRpEalOOz/HNhgmxZTK9lObM1Q7ZG9jONPYz8klIMg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<main id="main">
    <?php
    include view('includes/breadcrumbs');

    $text   = '';
    $output = '';
    if (isset($_POST['text']))
    {
        $text   = $_POST['text'];
        $output = letter_converter($text);
    }
    ?>


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <form action="" method="post" onsubmit="return false">
                    <ul>
                   <?php for($i=1;$i<=2;$i++): ?>
                        <?php for($j=1;$j<=10;$j++): ?>
                        <li style="padding: 10px 0">
                            <?= $i.' + '.$j.' = ' ?>
                            <input type="text" placeholder="Cavab" data-i="<?= $i ?>" data-j="<?= $j ?>" class="sagirdin_cavabi">
                            <button class="btn btn-warning text-light cavab" data-cavab="<?= $i + $j ?>"  data-i="<?= $i ?>" data-j="<?= $j ?>">Yoxla</button>
                            <span style="display: none" class="neticeDogru" data-i="<?= $i ?>" data-j="<?= $j ?>">+</span>
                            <span style="display: none" class="neticeYalan" data-i="<?= $i ?>" data-j="<?= $j ?>">-</span>
                        </li>
                        <?php endfor; ?>
                    <?php endfor; ?>
                    </ul>
                </form>
            </div>
        </div>
    </section><!-- End About Section -->


</main><!-- End #main -->

<script>
    $(document).ready(function() {
        $('button.cavab').click(function() {
            let i       = $(this).attr('data-i');
            let j       = $(this).attr('data-j');
            let cavab   = $(this).attr('data-cavab');

            let sagirdin_cavabi = $('.sagirdin_cavabi[data-i="'+i+'"][data-j="'+j+'"]').val();
            let neticeDogru = $('span.neticeDogru[data-i="'+i+'"][data-j="'+j+'"]');
            let neticeYalan = $('span.neticeYalan[data-i="'+i+'"][data-j="'+j+'"]');

            neticeDogru.css('display', 'none');
            neticeYalan.css('display', 'none');

            if (sagirdin_cavabi == '')
            {
                return;
            }

            if (sagirdin_cavabi == cavab)
            {
                neticeDogru.css('display', 'inline-block');
            }
            else
            {
                neticeYalan.css('display', 'inline-block');
            }

            console.log(
                'i = '+i,
                'j = '+j,
                'cavab = '+cavab,
                'sagirdin_cavabi = '+sagirdin_cavabi,
            );
        });
    });
</script>