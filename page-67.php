<?php get_header()?>
<section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="test">
                        <p class="intro">Développeur Web <br>& Web Mobile <br>Junior</p>
                        <p class="soustitre">Satisfait d’avoir un but à accomplir, d’arriver au fait accompli.</p>
                        <a class="Mecontacter btn btn-secondary" href="#">Me contacter<i class="fleche2 bi bi-arrow-right-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projets">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="Projet">Mes Projets :</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo bloginfo( 'template_directory' )."/images/aperçuduprojetbriefjohnnydepp.png"?>" alt="projet">
                            <h5>Mon premier projet via Figma</h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-secondary">Github</a>
                        </div>
                    </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card">
                                <img src="<?php echo bloginfo( 'template_directory' )."/images/aperçudutestframework.png"?>" alt="placehold">
                                <div class="card-body h5">
                                    <h5>Mon dernier projet en date (formulaire en JS)</h5>
                                </div>
                                <p class="card-text"></p>
                                <a href="#" class="btn btn-secondary">GitHub</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer()?>