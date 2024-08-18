<?php
    //Template name: Sobre nós
?>

<?php get_header() ?>

    <div class="page-sobre">

        <div class="hero">
            <div class="container">
                <div class="text">
                    <div class="line"></div>
                    <h1>Sobre nós</h1>
                    <p>Lorem ipsum dolor sit amet consectetur. Lectus pellentesque ipsum pharetra sed quam turpis.</p>
                    <a href=""><button class="btn-primary">Fale com um especialista</button></a>
                </div>
            </div>
        </div>

        <div class="about">
            <div class="container">
                <div class="text">
                    <div class="line"></div>
                    <h2>Sobre nós</h2>
                    <p>Lorem ipsum dolor sit amet consectetur. Elit feugiat posuere quis velit pretium eget viverra nunc. Ullamcorper et ullamcorper pellentesque nullam sollicitudin mauris massa. A maecenas laoreet ultrices gravida commodo adipiscing. 
                    <br><br>Dictum vehicula interdum et risus dolor quam sagittis vulputate. Pharetra sed tristique lorem purus odio rhoncus fringilla elementum. Maecenas vivamus orci leo dictum in egestas. Quisque nec a.</p>
                </div>
                <div class="image">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/Rectangle 494.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="principles">
            <div class="container">
                <div class="text">
                    <div class="line"></div>
                    <h2>Nossos Princípios</h2>
                </div>
                <div class="items">
                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-principes.svg" alt="">
                        </div>
                        <h4>Conhecimento é nossa maior ferramenta</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Elit feugiat posuere quis velit pretium eget viverra nunc. Ullamcorper et ullamcorper pellentesque nullam sollicitudin mauris massa.</p>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-principes.svg" alt="">
                        </div>
                        <h4>Conhecimento é nossa maior ferramenta</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Elit feugiat posuere quis velit pretium eget viverra nunc. Ullamcorper et ullamcorper pellentesque nullam sollicitudin mauris massa.</p>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-principes.svg" alt="">
                        </div>
                        <h4>Conhecimento é nossa maior ferramenta</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Elit feugiat posuere quis velit pretium eget viverra nunc. Ullamcorper et ullamcorper pellentesque nullam sollicitudin mauris massa.</p>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-principes.svg" alt="">
                        </div>
                        <h4>Conhecimento é nossa maior ferramenta</h4>
                        <p>Lorem ipsum dolor sit amet consectetur. Elit feugiat posuere quis velit pretium eget viverra nunc. Ullamcorper et ullamcorper pellentesque nullam sollicitudin mauris massa.</p>
                    </div>
                </div>
            </div>
        </div>

        <?php include (TEMPLATEPATH .'/includes/section-blog.php') ?>

        <?php include (TEMPLATEPATH .'/includes/section-contact.php') ?>

    </div>

<?php get_footer() ?>