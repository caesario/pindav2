



<!--================ Get Started =================-->
<section class="section-padding" style="padding-top: 10em; padding-bottom: 20em;">
    <div class="container ">
        <div class="section-intro text-center pb-90px">
            <h2>PINDA</h2>
            <h2>Frequently Asked Question</h2>
            <p> Sekut jika ada tanya di hati dan pikiranmuuu...</p>
        </div>
        <div class="panel-group" id="faqAccordion">

            <?php foreach ($FAQ as $faq) : ?>
            <div class="panel panel-default "   >
                <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#<?= $faq['id_faq']?>">
                    <h4 class="panel-title">
                        <a href="#" class="text-dark">Q: <?= $faq['judul_tanya']?></a>
                    </h4>

                </div>
                <div id="<?= $faq['id_faq']?>" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                        <h5><span class="label label-primary">Jawaban</span></h5>

                        <p><?= $faq['jawaban_tanya'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
        <!--/panel-group-->
    </div>
</section>
<!--================ Get Started End =================-->





