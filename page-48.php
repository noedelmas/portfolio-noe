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

    <?php
                                $post = get_post(121)
                            ?>

                            <?php 
                                echo $post->post_content
                            ?>

 <?php get_footer();?>