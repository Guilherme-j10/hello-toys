<?php include('app/view/includes/body_top.php'); ?>

    <!-- secao onde aparece a imagem do produto -->
    <section class="standard_styled product_container">
        <div class="big_side_left">
            <div class="saty_image_and_info">
                <div class="header_options">
                    <a href="#"><i class="fas fa-heart"></i> Favoritar</a>
                    <a href="#"><i class="fas fa-share-alt"></i> Compartilhar</a>
                </div> 
                <img src="<?= IMAGENS.'product.jpeg'; ?>" alt="">
            </div>
            <div class="location_info_product">
                <div class="header_info_product">
                    <h1>Esfera Card Bakugan Battle Planet Vicerox - Sunny 2070</h1>
                    <div class="row_line">
                        <small>(Cód. <?= $dados['id']; ?>)</small>
                    </div>
                </div>
                <p>Novas Figuras Bakugan Battle Planet da Sunny. Comece a sua batalha com a Esfera Bakugan. Basta jogar sua esfera para ativar o incr...</p>
                <a href="#">Mais informações do produto</a>
                <a href="#">Política e troca e devolução</a>
            </div>
        </div>
        <div class="small_side_right">
        
        </div>
    </section>

<?php include('app/view/includes/body_bottom.php'); ?>