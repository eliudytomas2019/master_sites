<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="index.php?exe=default/home&lang=<?= $language; ?>">
                                <img style="max-height: 160px!important;max-width: 220px!important;" src="uploads/<?= $Ass['cover_rodape']; ?>" alt="<?= $Ass['name']; ?>">
                            </a>
                        </div>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="<?= $Ass['facebook']; ?>" target="_blank">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $Ass['twitter']; ?>" target="_blank">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $Ass['instagram']; ?>" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $Ass['linkedin']; ?>" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= $Ass['youtube']; ?>" target="_blank">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            <?php if($language == "pt"): echo "Sobre Nós"; elseif($language == "fr"): echo "À propos de nous"; else: echo "About Us";endif; ?>
                        </h3>
                        <ul>
                            <li><a href=""><?php if($language == "pt"): echo "O INLS"; elseif($language == "fr"): echo "LES INLS"; else: echo "THE INLS";endif; ?></a></li>
                            <li><a href=""><?php if($language == "pt"): echo "História"; elseif($language == "fr"): echo "Histoire"; else: echo "History";endif; ?></a></li>
                            <li><a href=""><?php if($language == "pt"): echo "Estrutura Organica"; elseif($language == "fr"): echo "Structure organique"; else: echo "Organic Structure";endif; ?></a></li>
                            <li><a href=""><?php if($language == "pt"): echo "Legislação"; elseif($language == "fr"): echo "Législation"; else: echo "Legislation";endif; ?></a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            <?php if($language == "pt"): echo "Informações Úteis"; elseif($language == "fr"): echo "Informations utiles"; else: echo "Useful information";endif; ?>
                        </h3>
                        <ul>
                            <li><a href=""><?php if($language == "pt"): echo "Sobre o HIV e a SIDA"; elseif($language == "fr"): echo "À propos du VIH et du SIDA"; else: echo "About HIV and AIDS";endif; ?></a></li>
                            <li><a href=""><?php if($language == "pt"): echo "Protocolos"; elseif($language == "fr"): echo "Protocoles"; else: echo "Protocols";endif; ?></a></li>
                            <li><a href=""><?php if($language == "pt"): echo "Relatórios"; elseif($language == "fr"): echo "Rapports"; else: echo "Reports";endif; ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <h3 class="footer_title">
                            <?php if($language == "pt"): echo "Contactos"; elseif($language == "fr"): echo "Contacts"; else: echo "Contacts";endif; ?>
                        </h3>
                        <p>
                            <?= $Ass['endereco']; ?> <br>
                            <?= $Ass['telefone']; ?> <br>
                            <?= $Ass['email']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
                    <p class="copy_right text-center">
                        <?= $Ass['name']; ?>  <?php if($language == "pt"): echo " | Copyright  &copy; ". date('Y') ." Todos os direitos reservados | Desenvolvido por "; elseif($language == "fr"): echo " | Droit d'auteur et copie ; ".date('Y') ." Tous droits réservés | Développé par "; else: echo " | Copyright &copy; ". date('Y') ." All rights reserved | Developed by ";endif; ?> <a href="https://osl-itservice.com" target="_blank">OSL IT SERVICE</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>