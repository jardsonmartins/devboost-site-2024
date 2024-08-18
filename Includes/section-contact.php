<section class="contact">
    <div class="container">
        <div class="content-left" data-aos="fade-right">
            <img src="<?php the_field('imagem_section_contato') ?>" alt="">
        </div>
        <div class="content-right" data-aos="fade-left">
            <div class="line"></div>
            <h2><?php the_field('titulo_section_contato') ?></h2>
            <p><?php the_field('descricao_section_contato') ?></p>
            <a href="<?php the_field('link_botao_section_contato') ?>"><button class="btn-primary"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-talk.svg" alt=""><?php the_field('texto_botao_section_contato') ?></button></a>
        </div>
    </div>
</section>