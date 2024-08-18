<?php get_header() ?>

    <div class="breadcrumbss">
        <div class="container">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-house.svg" alt="">
            <p>Home</p>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-arrow-right-two.svg" alt="">
            <p>Blog</p>
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-arrow-right-two.svg" alt="">
            <p>Conteúdo A</p>
        </div>
    </div>

    <div class="content-title">
        <div class="container">
            <h2>Conteúdo A</h2>
        </div>
    </div>
    
    <div class="single">
        <div class="container">
            <div class="search">
                <ul>
                    <li><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-search-facebook.svg" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-search-whatsapp.svg" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-search-x.svg" alt=""></a></li>
                    <li><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-search-telegram.svg" alt=""></a></li>
                </ul>
            </div>

            <div class="content">
                <div class="image"><img src="<?php echo get_template_directory_uri() ?>/assets/images/image-single.jpg" alt=""></div>
                <div class="text">
                    <div class="title">Notícias</div>
                    <h3>A importância do microcrédito produtivo orientado</h3>
                    <div class="info">
                        <div class="author"><p>Por <span>Por Jardson Martins</span></p></div>
                        <div class="min"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-eye" alt=""><p><span>4 min</span> de leitura</p></div>
                        <div class="date"><p>Publicado em 26 de setembro de 2022.</p></div>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet neque quos dolores exercitationem autem, nisi maxime nesciunt nihil vero voluptas voluptate hic possimus corrupti non accusantium odio in magnam dolorum.</p>
            </div>

            <div class="free-content">
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/free-content.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="similarPosts">
        <div class="container">
            <div class="text" data-aos="fade-in">
                <h2>Confira nossas ultimas postagens</h2>
            </div>
            <div class="bottom">
                <div class="card-blog">
                    <a href="">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/imagem-blog.jpg" alt="">
                        </div>
                        <h5>Banco do Brasil lança primeiro cartão totalmente em braile</h5>
                        <button class="btn">Ver mais</button>
                    </a>
                </div>

                <div class="card-blog">
                    <a href="">
                        <div class="image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/imagem-blog.jpg" alt="">
                        </div>
                        <h5>Banco do Brasil lança primeiro cartão totalmente em braile</h5>
                        <button class="btn">Ver mais</button>
                    </a>
                </div>

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
    </div>

    <?php get_template_part('blocos'); ?>

<?php get_footer() ?>