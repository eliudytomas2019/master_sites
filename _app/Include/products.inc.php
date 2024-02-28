<div class="business_expert_area">
    <div class="business_tabs_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul class="nav" id="myTab" role="tablist">
                        <?php
                        $this_id = null;
                        $database = "xp_create_all_in_one";
                        $table = "produto";

                        $Read = new Read();
                        $Read->ExeRead($database, "WHERE lang=:lg AND type=:table ORDER BY id ASC LIMIT 3", "lg={$language}&table={$table}");

                        if($Read->getResult()):
                            $this_id = $Read->getResult()[0]['id'];
                            foreach ($Read->getResult() as $key):
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($this_id == $key['id']): echo "active"; endif; ?>" id="home-tab_<?= $key['id']; ?>" data-toggle="tab" href="#home_<?= $key['id']; ?>" role="tab" aria-controls="home_<?= $key['id']; ?>"
                                       aria-selected="true"><?= $key['title']; ?></a>
                                </li>
                            <?php
                            endforeach;
                        endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="border_bottom">
            <div class="tab-content" id="myTabContent">
                <?php
                $database = "xp_create_all_in_one";
                $table = "produto";

                $Read = new Read();
                $Read->ExeRead($database, "WHERE lang=:lg AND type=:table ORDER BY id ASC LIMIT 3", "lg={$language}&table={$table}");

                if($Read->getResult()):
                    foreach ($Read->getResult() as $key):
                        ?>
                        <div class="tab-pane fade <?php if($this_id == $key['id']): echo "show active"; endif; ?>" id="home_<?= $key['id']; ?>" role="tabpanel" aria-labelledby="home-tab_<?= $key['id']; ?>">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-md-6">
                                    <div class="business_info">
                                        <h3><?= $key['title']; ?></h3>
                                        <?= Check::Words($key['content'], 110); ?>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="business_thumb">
                                        <img src="uploads/<?php if(isset($key['cover']) || !empty($key['cover'])): echo $key['cover']; else: echo "default.jpg"; endif; ?>" alt="<?= $key['title']; ?>">
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
    </div>
</div>
