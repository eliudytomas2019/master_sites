<?php
$title = "Sobre nós - {$Ass['name']}";

$Seo = new SEO($title, $Ass['content'], "", "index, follow", "{$_SERVER['REQUEST_URI']}}", "Eliúdy Tomás");
$Seo->metaTags();

$yX = explode("-", $title);
include("_app/Include/Section.inc.php");
?>

<div class="service_area">
    <div class="container p-0">
        <div class="row no-gutters">
            <?php
                $id_xxx = null;
                $database = "xp_create_all_in_one";
                $table = "sobre";

                $Read = new Read();
                $Read->ExeRead($database, "WHERE lang=:lg AND type=:table ORDER BY id ASC LIMIT 4 ", "lg={$language}&table={$table}");

                if($Read->getResult()):
                    $id_xxx = $Read->getResult()[0]['id'];
                    foreach ($Read->getResult() as $key):
                        if($id_xxx != $key['id']):
                            ?>
                            <div class="col-xl-4 col-md-4" style="min-height: 276px!important;">
                                <div class="single_service">
                                    <h3><?= $key['title']; ?></h3>
                                    <p><?= $key['content']; ?></p>
                                </div>
                            </div>
                            <?php
                        endif;
                    endforeach;
                endif;
            ?>
        </div>
    </div>
</div>

<?php
include("_app/Include/about.inc.php");
include("_app/Include/rodape.inc.php");
?>
