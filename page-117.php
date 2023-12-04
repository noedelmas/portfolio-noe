<div class="maincontent">
<?php get_header()?>
 
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
    <?php the_content(); ?>
    <?php wp_link_pages(); ?>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="test">
                        <p class="intro">Développeur Web <br>& Web Mobile <br>Junior</p>
                        <p class="soustitre">Satisfait d’avoir un but à accomplir, d’arriver au fait accompli.</p>
                        <a class="Mecontacter btn btn-secondary" href="contact.html">Me contacter<i class="fleche2 bi bi-arrow-right-circle"></i></a>
                    </div>
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
                    <img class="img-fluid" src="<?php echo bloginfo( 'template_directory' )."/images/HTML5.png"?>" alt="HTML5">
                </div>
                <div class="col-12 col-md-3">
                    <ul class="HTML5">
                        <li>HTML5</li>
                    </ul>
                </div>
                <div class="col-12 col-md-3">
                    <img class="img-fluid" src="<?php echo bloginfo( 'template_directory' )."/images/css3.png"?>" alt="CSS3">
                </div>
                <div class="col-12 col-md-3">
                    <ul class="CSS3">
                        <li>CSS3</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <img class="img-fluid" src="<?php echo bloginfo( 'template_directory' )."/images/bootstrap.png"?>" alt="Bootstrap">
                </div>
                <div class="col-12 col-md-3">
                    <ul class="Bootstrap">
                        <li>Bootstrap</li>
                    </ul>
                </div>
                    <div class="col-12 col-md-3">
                        <img class="img-fluid" src="<?php echo bloginfo( 'template_directory' )."/images/figma.png"?>" alt="Figma">
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
    <section class="presentation">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <p>Je me nomme Noé, je suis apprenti DW/WM <br>
                        toujours motivé de créer <br>
                        des sites, des designs à l’aide de mon vécu,<br>
                         de mon inspiration. <br>
                        Satisfait de mon travail vu que <br>
                        ça me permet de remplir mes objectifs.</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php endwhile; ?>
 
    <?php endif; ?>
    <?php get_footer();?>