    <footer>
        <div class="container">
            <div class="top">
                <div class="infos">
                    <a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="" class="logo"></a>
                    <p>Lorem ipsum dolor sit amet consectetur. Velit non placerat id diam sapien. Commodo sed.</p>
                    <div class="social">
                        <a href=""><div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-instagram.svg" alt=""></div></a>
                        <a href=""><div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-youtube.svg" alt=""></div></a>
                        <a href=""><div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-linkedin.svg" alt=""></div></a>
                    </div>
                </div>

                <div class="services">
                    <h5>Serviços</h5>
                    <ul>
                        <li><a href="">Criação de sites</a></li>
                        <li><a href="">Social Media</a></li>
                        <li><a href="">Tráfego Pago</a></li>
                    </ul>
                </div>

                <div class="menus">
                    <h5>Menus</h5>
                    <?php
                        $args = array(
                            'menu' => 'Header Principal',
                            'theme_location' => 'header-principal',
                            'container' => false
                        );
                        wp_nav_menu( $args );
                    ?>
                </div>

                <div class="contacts">
                    <h5>Contatos</h5>
                    <ul>
                        <li><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-whatsapp.svg" alt="">Whatsapp</a></li>
                        <li><a href=""><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-email.svg" alt="">contato@devboost.com.br</a></li>
                    </ul>
                </div>

            </div>
            <div class="bottom">
                <div class="content-left">
                    <p>Copyright © Devboost 2024</p>
                    <div class="lineTwo"></div>
                    <div class="lgpd">
                        <a href="">Termos de uso</a>
                        <a href="">Política de privacidade</a>
                    </div>
                </div>
                <div class="content-right">
                    <a href="#topo">
                        <p>Voltar ao topo</p>
                        <div class="circle"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-arrow-top.svg" alt=""></div>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
</body>
</html>