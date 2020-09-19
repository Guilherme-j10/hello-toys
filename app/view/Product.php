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
                    <small class="brand">Sunny</small>
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
            <div class="price_information">
                <h1>R$ 79,90</h1> 
                <p>Em até <strong>10x</strong> de <strong>R$ 7.99</strong> sem juros </p>
                <a href="#"><i class="fas fa-long-arrow-alt-right"></i>Consultar mais formas de pagamento</a>
            </div>
            <form action="" method="post">
                <label>Calcule o prazo de entrega</label>
                <div class="box_ex">
                    <i class="fas fa-shipping-fast"></i>
                    <input type="text" name="cep" required placeholder="Digite o seu CEP">
                    <button type="submit" name="see">Ver</button>
                </div>
                <label>Quantidade</label>
                <div class="qtd">   
                    <button>-</button>
                    <input type="text" name="qtd" readonly value="1" required>
                    <button>+</button>
                </div>
                <small>Items disponiveis: 27</small>
                <div class="payment_option">
                    <button type="submit" name="pay"><i class="fas fa-shopping-basket"></i> Comprar</button>
                </div>
            </form>
        </div>
    </section>

<?php include('app/view/includes/body_bottom.php'); ?>