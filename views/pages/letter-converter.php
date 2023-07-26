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
                <form action="" method="post">
                    <div class="form-group">
                        <label for="elish">Text</label>
                        <textarea class="form-control" name="text" id="elish" rows="3"><?= $text ?></textarea>
                    </div>

                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary float-end" name="convert">Convert</button>
                    </div>
                </form>
            </div>

            <div class="row border-top mt-1" id="output">
                <?= $output ?>
            </div>
        </div>
    </section><!-- End About Section -->


</main><!-- End #main -->

<script>
    $("#elish").on("change paste keyup", function() {
        let text = $(this).val();

        $.ajax({
            type: "POST",
            data : {
                'text' : $('#elish').val()
            },
            url: "<?php echo APP_URL; ?>/core/controllers/LetterConverterController.php",
            success: function(response) {
                $('#output').html(response);
            }
        });
    });
</script>