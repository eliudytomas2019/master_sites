<div class="slider_area">
    <div class="slider_active owl-carousel">
        <?php
            $database = "xp_create_all_in_one";
            $table = "home";

            $Read = new Read();
            $Read->ExeRead($database, "WHERE lang=:lg AND type=:table ORDER BY id DESC LIMIT 5 ", "lg={$language}&table={$table}");

            if($Read->getResult()):
                foreach ($Read->getResult() as $key):
                    ?>
                    <div class="single_slider  d-flex align-items-center" style="background-image: url(uploads/<?= $key['cover']; ?>);">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="slider_text " style="color: #e2682a!important;">
                                        <h3 style="color: #e2682a!important; font-size: 42pt!important;"><?= $key['title']; ?></h3>
                                        <p><?= $key['content']; ?></p>
                                        <a href="index.php?exe=about/about_us" class="boxed-btn3"><?php if($language == "pt"): echo "Saiba mais"; elseif($language == "fr"): echo "savoir plus"; else: echo "know more";endif; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                endforeach;
            endif;
        ?>
    </div>
</div>

<?php
include("_app/Include/about.inc.php");
include("_app/Include/services.inc.php");
include("_app/Include/testmonial.inc.php");
include("_app/Include/products.inc.php");
include("_app/Include/rodape.inc.php");
?>

