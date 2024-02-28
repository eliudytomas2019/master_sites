<?php
$title = "Contactos - {$Ass['name']}";

$Seo = new SEO($title, $Ass['content'], "", "index, follow", "{$_SERVER['REQUEST_URI']}}", "Eliúdy Tomás");
$Seo->metaTags();

$yX = explode("-", $title);
include("_app/Include/Section.inc.php");
?>

<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="contact-title"><?php if($language == "pt"): echo ""; elseif($language == "fr"): echo ""; else: echo "";endif; ?>
                </h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="" method="post" id="contactForm" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php if($language == "pt"): echo "Mensagem"; elseif($language == "fr"): echo "Message"; else: echo "Message";endif; ?>
                                        '" placeholder=" <?php if($language == "pt"): echo "Mensagem"; elseif($language == "fr"): echo "Message"; else: echo "Message";endif; ?>"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php if($language == "pt"): echo "Nome"; elseif($language == "fr"): echo "Nom"; else: echo "Name";endif; ?>
                                        '" placeholder="<?php if($language == "pt"): echo "Nome"; elseif($language == "fr"): echo "Nom"; else: echo "Name";endif; ?>
">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php if($language == "pt"): echo "Endereço de Email"; elseif($language == "fr"): echo "Adresse e-mail"; else: echo "Email address";endif; ?>
                                        '" placeholder="<?php if($language == "pt"): echo "Endereço de Email"; elseif($language == "fr"): echo "Adresse e-mail"; else: echo "Email address";endif; ?>
">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php if($language == "pt"): echo "Objectivo"; elseif($language == "fr"): echo "Objectif"; else: echo "Objective";endif; ?>
                                        '" placeholder="<?php if($language == "pt"): echo "Objectivo"; elseif($language == "fr"): echo "Objectif"; else: echo "Objective";endif; ?>
">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn"><?php if($language == "pt"): echo "Enviar"; elseif($language == "fr"): echo "Envoyer"; else: echo "Send";endif; ?>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3><?php if($language == "pt"): echo "Endereço"; elseif($language == "fr"): echo "Adresse"; else: echo "Address";endif; ?></h3>
                        <p><?= $Ass['endereco']; ?></p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3><?= $Ass['telefone']; ?></h3>
                        <p><?php if($language == "pt"): echo "Disponível de segunda à sexta-feira das 09h00 às 17h00"; elseif($language == "fr"): echo "Disponible du lundi au vendredi de 9h00 à 17h00"; else: echo "Available from Monday to Friday from 9:00 am to 5:00 pm";endif; ?></p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3><?= $Ass['email']; ?></h3>
                        <p><?php if($language == "pt"): echo "A nossa linha de apoio por email, está disponível 24/7"; elseif($language == "fr"): echo "Notre ligne d'assistance par e-mail est disponible 24h/24 et 7j/7"; else: echo "Our email support line is available 24/7";endif; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
