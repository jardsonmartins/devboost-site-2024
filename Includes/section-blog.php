<?php 
    $title = get_sub_field('titulo'); 

?>

<section class="blog">
    <div class="container">
        <div class="top">
            <div class="text" data-aos="fade-right">
                <div class="line"></div>
                <h2><?php the_field('titulo_section_blog') ?></h2>
            </div>
            <div class="arrows" data-aos="fade-left">
                <div class="icon swiper-button-prev">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-arrow-left.svg" alt="">
                </div>
                <div class="icon swiper-button-next">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-arrow-right.svg" alt="" class="">
                </div>
            </div>
        </div>
        <div class="slide-blog">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <div class="card-blog">
                    <a href="">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/imagem-blog.jpg" alt="">
                        </div>
                        <h5>Banco do Brasil lança primeiro cartão totalmente em braile</h5>
                        <button class="btn">Ver mais</button>
                    </a>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="card-blog">
                    <a href="">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/imagem-blog.jpg" alt="">
                        </div>
                        <h5>Banco do Brasil lança primeiro cartão totalmente em braile</h5>
                        <button class="btn">Ver mais</button>
                    </a>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="card-blog">
                    <a href="">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/imagem-blog.jpg" alt="">
                        </div>
                        <h5>Banco do Brasil lança primeiro cartão totalmente em braile</h5>
                        <button class="btn">Ver mais</button>
                    </a>
                </div>
                </div>
                <div class="swiper-slide">
                <div class="card-blog">
                    <a href="">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/imagem-blog.jpg" alt="">
                        </div>
                        <h5>Banco do Brasil lança primeiro cartão totalmente em braile</h5>
                        <button class="btn">Ver mais</button>
                    </a>
                </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>