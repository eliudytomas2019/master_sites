<div class="Emergency_contact">
    <div class="conatiner-fluid p-0">
        <div class="row no-gutters">
            <div class="col-xl-6">
                <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_1 overlay_skyblue">
                    <div class="info">
                        <h3><?php if($language == "pt"): echo "Em caso de emergência ligue para nós"; elseif($language == "fr"): echo "En cas d'urgence appelez-nous"; else: echo "In case of emergency call us";endif; ?></h3>
                        <p><?php if($language == "pt"): echo "Linha disponível 24/7"; elseif($language == "fr"): echo "Ligne disponible 24h/24 et 7j/7"; else: echo "Line available 24/7";endif; ?></p>
                    </div>
                    <div class="info_button">
                        <a href="#" class="boxed-btn3-white"><?= $Ass['telefone']; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_2 overlay_skyblue">
                    <div class="info">
                        <h3><?php if($language == "pt"): echo "Linha de atendimento online disponível"; elseif($language == "fr"): echo "Assistance en ligne disponible tous les jours"; else: echo "Online helpline available every day";endif; ?></h3>
                        <p>-</p>
                    </div>
                    <div class="info_button">
                        <a href="#" class="boxed-btn3-white"><?= $Ass['email']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>