<?php get_header()?>
<section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="test">
                        <p class="intro">Développeur Web <br>& Web Mobile <br>Junior</p>
                        <p class="soustitre">Satisfait d’avoir un but à accomplir, d’arriver au fait accompli.</p>
                        <a class="Serenseigner btn btn-secondary" href="#">En savoir +<i class="fleche2 bi bi-arrow-right-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1 class="QSJ">Qui suis-je ?</h1>
                    <p class="text-presentation">Je me nomme Noé, je suis apprenti DW/WM<br> 
                        toujours motivé de créer<br> 
                        des sites, des designs à l’aide de mon vécu,<br>
                         de mon inspiration.<br>
                        Satisfait de mon travail vu que<br> 
                        ça me permet de remplir mes objectifs.</p>
                    <div class="btn2">
                    <a class="btn btn-secondary" href="#">En savoir +</a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <img class="avatar" src="<?php echo bloginfo('template_directory')."/images/avatar.png"?>" alt="avatar">
                </div>
            </div>
        </div>
    </section>
    <section class="competences">
        <div class="logos container">
            <div class="row">
                <div class="col-6">
                    <h2 class="titre">Mes Compétences :</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <img class="img-fluid" src="<?php echo bloginfo('template_directory')."/images/HTML5.png"?>" alt="HTML5">
                </div>
                <div class="col-12 col-md-3">
                    <ul class="HTML5">
                        <li>HTML5</li>
                    </ul>
                </div>
                <div class="col-12 col-md-3">
                    <img class="img-fluid" src="<?php echo bloginfo('template_directory')."/images/css3.png"?>" alt="CSS3">
                </div>
                <div class="col-12 col-md-3">
                    <ul class="CSS3">
                        <li>CSS3</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <img class="img-fluid" src="<?php echo bloginfo('template_directory')."/images/bootstrap.png"?>" alt="Bootstrap">
                </div>
                <div class="col-12 col-md-3">
                    <ul class="Bootstrap">
                        <li>Bootstrap</li>
                    </ul>
                </div>
                    <div class="col-12 col-md-3">
                        <img class="img-fluid" src="<?php echo bloginfo('template_directory')."/images/figma.png"?>" alt="Figma">
                    </div>
                    <div class="col-12 col-md-3">
                        <ul class="Figma">
                            <li>Figma</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projets">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="Projet">Projet :</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo bloginfo('template_directory')."/images/aperçuduprojetbriefjohnnydepp.png"?>" alt="projet forumlaire">
                            <div class="card-body"></div>
                            <h5>Mon premier projet via Figma</h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-secondary">Github</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer()?>