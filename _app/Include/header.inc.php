<header>
    <div class="header-area ">
        <div class="header-top_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 ">
                        <div class="social_media_links">
                            <a href="<?= $Ass['linkedin']; ?>" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a href="<?= $Ass['facebook']; ?>" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="<?= $Ass['instagram']; ?>" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="<?= $Ass['twitter']; ?>" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="<?= $Ass['youtube']; ?>" target="_blank">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="short_contact_list">
                            <ul>
                                <li><a href="#"> <i class="fa fa-envelope"></i> <?= $Ass['email']; ?></a></li>
                                <li><a href="#"> <i class="fa fa-phone"></i> <?= $Ass['telefone']; ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="sticky-header" class="main-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="index.php?exe=default/home&lang=<?= $language; ?>">
                                <img style="max-height: 80px!important;max-width: 220px!important;" src="uploads/<?= $Ass['cover']; ?>" alt="<?= $Ass['name']; ?>">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="li<?php if (in_array('default', $linkto)) echo ' active';  ?>" href="index.php?exe=default/home&lang=<?= $language; ?>"><?php if($language == "pt"): echo "Início"; elseif($language == "fr"): echo "Commencer"; else: echo "Start";endif; ?></a></li>
                                    <li><a href="#" class="li<?php if (in_array('about', $linkto)) echo ' active';  ?>"><?php if($language == "pt"): echo "Sobre nós"; elseif($language == "fr"): echo "À propos de nous"; else: echo "About Us";endif; ?> <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="index.php?exe=about/about_us&lang=<?= $language; ?>"><?php if($language == "pt"): echo "O INLS"; elseif($language == "fr"): echo "LES INLS"; else: echo "THE INLS";endif; ?></a></li>
                                            <li><a href=""><?php if($language == "pt"): echo "História"; elseif($language == "fr"): echo "Histoire"; else: echo "History";endif; ?></a></li>
                                            <li><a href=""><?php if($language == "pt"): echo "Estrutura Organica"; elseif($language == "fr"): echo "Structure organique"; else: echo "Organic Structure";endif; ?></a></li>
                                            <li><a href=""><?php if($language == "pt"): echo "Legislação"; elseif($language == "fr"): echo "Législation"; else: echo "Legislation";endif; ?></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><?php if($language == "pt"): echo "Área de atuação"; elseif($language == "fr"): echo "Zone d'occupation"; else: echo "Occupation area";endif; ?> <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href=""><?php if($language == "pt"): echo "A cura do HIV"; elseif($language == "fr"): echo "Le remède contre le VIH"; else: echo "The cure for HIV";endif; ?></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#"><?php if($language == "pt"): echo "Informações Úteis"; elseif($language == "fr"): echo "Informations utiles"; else: echo "Useful information";endif; ?> <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href=""><?php if($language == "pt"): echo "Sobre o HIV e a SIDA"; elseif($language == "fr"): echo "À propos du VIH et du SIDA"; else: echo "About HIV and AIDS";endif; ?></a></li>
                                            <li><a href=""><?php if($language == "pt"): echo "Protocolos"; elseif($language == "fr"): echo "Protocoles"; else: echo "Protocols";endif; ?></a></li>
                                            <li><a href=""><?php if($language == "pt"): echo "Relatórios"; elseif($language == "fr"): echo "Rapports"; else: echo "Reports";endif; ?></a></li>
                                        </ul>
                                    </li>
                                    <li><a class="" href=""><?php if($language == "pt"): echo "Notícias"; elseif($language == "fr"): echo "Nouvelles"; else: echo "News";endif; ?></a></li>
                                    <li><a class="" href=""><?php if($language == "pt"): echo "Galeria"; elseif($language == "fr"): echo "Galerie"; else: echo "Gallery";endif; ?></a></li>
                                    <li><a class="li<?php if (in_array('contact', $linkto)) echo ' active';  ?>" href="index.php?exe=contact/contact_us&lang=<?= $language; ?>"><?php if($language == "pt"): echo "Contactos"; elseif($language == "fr"): echo "Contacts"; else: echo "Contacts";endif; ?></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>