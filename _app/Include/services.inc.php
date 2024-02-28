<div class="our_department_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-55">
                    <h3><?php if($language == "pt"): echo "Áreas de Actuação"; elseif($language == "fr"): echo "Domaines d'activité "; else: echo "Areas of Activity";endif; ?></h3>
                    <p><?php if($language == "pt"): echo "Elaboramos um conjunto de políticas e estratégias com o objectivo de reduzir o impacto do VIH na vida dos Angolanos."; elseif($language == "fr"): echo "Nous avons élaboré un ensemble de politiques et de stratégies dans le but de réduire l'impact du VIH sur la vie des Angolais."; else: echo "We have developed a set of policies and strategies with the aim of reducing the impact of HIV on the lives of Angolans.";endif; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $database = "xp_create_all_in_one";
            $table = "servico";

            $Read = new Read();
            $Read->ExeRead($database, "WHERE lang=:lg AND type=:table ORDER BY id ASC LIMIT 6 ", "lg={$language}&table={$table}");

            if($Read->getResult()):
                foreach ($Read->getResult() as $key):
                    ?>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_department">
                            <div class="department_thumb">
                                <img src="uploads/<?php if(isset($key['cover']) || !empty($key['cover'])): echo $key['cover']; else: echo "default.jpg"; endif; ?>" alt="<?= $key['title']; ?>">
                            </div>
                            <div class="department_content" style="min-height: 216px!important;">
                                <h3><a href="#"><?= $key['title']; ?></a></h3>
                                <p><?= $key['content']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</div>