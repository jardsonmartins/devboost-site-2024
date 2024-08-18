<?php
    // Template name: Home
?>

<?php get_header() ?>


    <section class="hero">
        <div class="container">
            <div class="text" data-aos="fade-right">
                <div class="line"></div>
                <h1><?php the_field('titulo_section_hero') ?></h1>
                <p><?php the_field('descricao_section_hero') ?></p>
                <a href="<?php the_field('link_botao_section_hero') ?>"><button class="btn-primary"><?php the_field('texto_botao_section_hero') ?></button></a>
            </div>
        </div>
    </section>

    <section class="solutions">
        <div class="container">
            <div class="top">
                <div class="content-left" data-aos="fade-right">
                    <div class="line"></div>
                    <h2><?php the_field('titulo_section_solucoes') ?></h2>
                </div>
                <div class="content-right" data-aos="fade-left">
                    <a href="">Ver todos</a>
                </div>
            </div>
            <div class="slide-solutions">
                <div class="swiper-wrapper">

                    <?php if( have_rows('cards_section_solucoes') ) : while ( have_rows('cards_section_solucoes') ) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="card-solution">
                                <div class="image">
                                    <img src="<?php the_sub_field('imagem_cards_section_solucoes') ?>" alt="">
                                </div>
                                <h3><?php the_sub_field('titulo_cards_section_solucoes') ?></h3>
                                <p><?php the_sub_field('descricao_cards_section_solucoes') ?></p>
                                <a href="">Saiba mais</a>
                            </div>
                        </div>
                    <?php endwhile; else : endif; ?>

                </div>
                <div class="swiper-pagination"></div>
              </div>
        </div>
    </section>

    <section class="cases">
        <div class="container">
            <div class="top">
                <h2 data-aos="fade-in"><?php the_field('titulo_section_cases') ?></h2>
            </div>

            <div class="btns-options">
                <button id="btn-case-one" class="btn-active"><?php the_field('tipo_01_section_cases') ?></button>
                <button id="btn-case-two"><?php the_field('tipo_02_section_cases') ?></button>
                <button id="btn-case-three"><?php the_field('tipo_03_section_cases') ?></button>
            </div>

            <div id="content-case-one" class="content-case content-active">
                <div class="swiper-wrapper">

                    <?php if( have_rows('botao_01_section_cases') ) : while ( have_rows('botao_01_section_cases') ) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="card-case">
                                    <a href="<?php the_sub_field('link_do_projeto_botao_01') ?>" target="_blank">
                                        <img src="<?php the_sub_field('imagem_botao_01') ?>" alt="">
                                        <div class="text">
                                            <h3><?php the_sub_field('nome_do_projeto_botao_01') ?></h3>
                                            <button class="btn-secondary">Ver completo</button>
                                        </div>
                                    </a>
                            </div>
                        </div>
                    <?php endwhile; else : endif; ?>
                  
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div id="content-case-two" class="content-case">
                <div class="swiper-wrapper">

                    <?php if( have_rows('botao_02_section_cases') ) : while ( have_rows('botao_02_section_cases') ) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="card-case">
                                <a href="<?php the_sub_field('link_do_projeto_botao_02') ?>" target="_blank">
                                    <img src="<?php the_sub_field('imagem_botao_02') ?>" alt="">
                                    <div class="text">
                                        <h3><?php the_sub_field('nome_do_projeto_botao_02') ?></h3>
                                        <button class="btn-secondary">Ver completo</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; else : endif; ?>
                  
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div id="content-case-three" class="content-case">
                <div class="swiper-wrapper">

                    <?php if( have_rows('botao_03_section_cases') ) : while ( have_rows('botao_03_section_cases') ) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="card-case">
                                <a href="<?php the_sub_field('link_do_projeto_botao_03') ?>" target="_blank">
                                    <img src="<?php the_sub_field('imagem_botao_03') ?>" alt="">
                                    <div class="text">
                                        <h3><?php the_sub_field('nome_do_projeto_botao_03') ?></h3>
                                        <button class="btn-secondary">Ver completo</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; else : endif; ?>
                  
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <section class="clients">
        <div class="text">
            <h2 data-aos="fade-in">Alguns dos nossos clientes</h2>
        </div>
        <div class="logos-slide">
            <?php if( have_rows('logos_section_clientes') ) : while ( have_rows('logos_section_clientes') ) : the_row(); ?>
                <img src="<?php the_sub_field('logo_section_clientes') ?>" alt="">
            <?php endwhile; else : endif; ?>
        </div>
    </section>

    <?php include (TEMPLATEPATH .'/includes/section-blog.php') ?>

    <?php include (TEMPLATEPATH .'/includes/section-contact.php') ?>
    

<?php get_footer() ?>