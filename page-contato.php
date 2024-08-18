<?php
    // Template name: Contato
?>

<?php get_header() ?>

    <div class="page-contact">

        <div class="hero">
            <div class="container">
                <div class="content-form">
                    <div class="text">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-contact.svg" alt="">
                        <h3>Solicite seu orçamento</h3>
                        <p>Preencha o formulário que nossa equipe entrará em contato</p>
                    </div>
                    <form action="">
                        <div class="inputs">
                            <div class="name">
                                <label for="">Nome</label>
                                <input type="text" placeholder="Nome">
                            </div>
                            <div class="email">
                                <label for="">Email</label>
                                <input type="text" placeholder="Digite seu e-mail">
                            </div>
                            <div class="company">
                                <label for="">Nome da empresa</label>
                                <input type="text" placeholder="Qual o nome da sua empresa?">
                            </div>
                            <div class="phone">
                                <label for="">Telefone/Whatsapp</label>
                                <input type="text" placeholder="Digite seu Whatsapp">
                            </div>
                        </div>
                        <div class="checkboxs">
                            <label for="">Serviço que precisa</label>
                            <div class="items">
                                <input type="checkbox" name="Ui/Ux" id="uiux" value="Criação de Sites">
                                <input type="checkbox" name="Criação de site" id="site">
                                <input type="checkbox" name="Social Media" id="socialmedia">
                                <input type="checkbox" name="Tráfego Pago" id="trafegopago">
                            </div>
                        </div>
                        <button type="submit" class="btn-form">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

<?php get_footer() ?>