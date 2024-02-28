<div class="welcome_docmed_area">
    <div class="container">
        <div class="row">
            <?php
            $database = "xp_create_all_in_one";
            $table = "sobre";

            $Read = new Read();
            $Read->ExeRead($database, "WHERE lang=:lg AND type=:table ORDER BY id ASC LIMIT 1 ", "lg={$language}&table={$table}");

            if($Read->getResult()):
                foreach ($Read->getResult() as $key):
                    ?>
                    <div class="col-xl-6 col-lg-6">
                        <div class="welcome_thumb">
                            <img style="max-width: 558px!important; max-height: 540px!important;" src="uploads/<?= $key['cover']; ?>" alt="<?= $key['title']; ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="welcome_docmed_info">
                            <h2>Sobre nós</h2>
                            <h3><?= $key['title']; ?></h3>
                            <p><?= $key['content']; ?></p>
                            <a href="index.php?exe=about/about_us&lang=<?= $language; ?>" class="boxed-btn3-white-2"><?php if($language == "pt"): echo "Saiba mais"; elseif($language == "fr"): echo "savoir plus"; else: echo "know more";endif; ?></a>
                        </div>
                    </div>
                <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</div>