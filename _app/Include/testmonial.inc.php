<div class="testmonial_area">
    <div class="testmonial_active owl-carousel">
        <?php
        $database = "xp_author_and_test_and_team";
        $table = "testimonial";

        $Read = new Read();
        $Read->ExeRead($database, "WHERE lang=:lg AND type=:table ORDER BY RAND() LIMIT 6 ", "lg={$language}&table={$table}");

        if($Read->getResult()):
            foreach ($Read->getResult() as $key):
                ?>
                <div class="single-testmonial testmonial_bg_1 overlay2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 offset-xl-1">
                                <div class="testmonial_info text-center">
                                    <div class="quote">
                                        <i class="flaticon-straight-quotes"></i>
                                    </div>
                                    <p><?= $key['content']; ?></p>
                                    <div class="testmonial_author">
                                        <h4><?= $key['name']; ?></h4>
                                    </div>
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