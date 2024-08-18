<?php
    // Template name: Blog
?>

<?php get_header() ?>

    <div class="page-blog">

        <div class="hero">
            <div class="container">
                <div class="text">
                    <div class="line"></div>
                    <h1>Insights para ajudar você e sua empresa</h1>
                    <p>Lorem ipsum dolor sit amet consectetur. Lectus pellentesque ipsum pharetra sed quam turpis pellentesque gravida tellus.</p>
                    <a href=""><button class="btn-primary">Fale com um especialista</button></a>
                </div>
            </div>
        </div>

        <div class="search">
            <div class="container">
                <ul>
                    <li><a href="">Últimas notícias</a></li>
                    <li><a href="">Mais lidas</a></li>
                    <li><a href="">Mais lidas</a></li>
                    <li><a href="">Mais lidas</a></li>
                    <li><a href="">Mais lidas</a></li>
                    <li><a href="">Mais lidas</a></li>
                </ul>
                <form action="">
                    <input type="text" placeholder="Pesquisar">
                    <button><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-search.svg" alt=""></button>
                </form>
            </div>
        </div>

        <div class="mostSeen">
            <div class="container">
                <div class="content-left">
                    <div class="card-blog-large">
                        <a href="">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/imagem-blog.jpg" alt="">
                            </div>
                            <div class="text">
                                <div class="title">Notícias</div>
                                <h4>Lorem ipsum dolor sit amet consectetur. Ullamcorper id pharetra auctor a augue. Iaculis sit nunc nam adipiscing.</h4>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="content-right">
                    <div class="card-blog-small">
                        <a href="">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/card-blog-small.jpg" alt="">
                            </div>
                            <div class="text">
                                <div class="title">Notícias</div>
                                <h5>A importância do microcrédito produtivo orientado</h5>
                            </div>
                        </a>
                    </div>

                    <div class="card-blog-small">
                        <a href="">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/card-blog-small.jpg" alt="">
                            </div>
                            <div class="text">
                                <div class="title">Notícias</div>
                                <h5>A importância do microcrédito produtivo orientado</h5>
                            </div>
                        </a>
                    </div>

                    <div class="card-blog-small">
                        <a href="">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/card-blog-small.jpg" alt="">
                            </div>
                            <div class="text">
                                <div class="title">Notícias</div>
                                <h5>A importância do microcrédito produtivo orientado</h5>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>

        <div class="latest">
            <div class="container">
                <div class="top">
                    <div class="line"></div>
                    <h2>Últimas notícias</h2>
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
    
        <?php include(TEMPLATEPATH .'/includes/section-contact.php') ?>

    </div>

<?php get_footer() ?>