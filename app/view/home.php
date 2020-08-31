<?php include('app/view/includes/body_top.php'); ?>
    <!-- seção do banner -->
    <section class="banner">
        <div id="carouselExampleIndicators" data-interval="3000" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= IMAGENS.'slide_um.png'; ?>" alt="">
                </div>
                <div class="carousel-item">
                    <img src="<?= IMAGENS.'slide_dois.png'; ?>" alt="">
                </div>
                <div class="carousel-item">
                    <img src="<?= IMAGENS.'slide_tres.png'; ?>" alt="">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a><span class="sr-only">Next</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </section>

    <!-- confianca -->
    <section class="confiable">
        <ul>
            <li>
                <i class="fas fa-star"></i>
                <div class="content">
                    <h3>PRODUTO DE QUALIDADE</h3>
                    <p>Produtos com qualidade garantida</p>
                </div>
            </li>
            <li>
                <i class="fas fa-shield-alt"></i>
                <div class="content">
                    <h3>COMPRA 100% SEGURA</h3>
                    <p>Segurança e qualidade na sua ccompra</p>
                </div>
            </li>
            <li>
                <i class="fas fa-truck"></i>
                <div class="content">
                    <h3>ENTREGA SEGURA</h3>
                    <p>Envio para todo o Brasil</p>
                </div>
            </li>
        </ul>
    </section>

    <!-- seção dos produtos -->
    <section class="standard_styled product">
        <div class="section_header_product">
            <h1>NOVIDADES</h1>
        </div>
        <article class="card_products">
            <!-- tornar a div card um link que direciopne para a página no produto -->
            <?php for($i = 0; $i < 7; $i++): ?>
                <a href="product/<?= $i; ?>" class="cards">
                    <img src="<?= IMAGENS.'product.jpeg'; ?>" alt="">
                    <div class="description">
                        <p>Esfera e Card Bakugan Battle Planet Vicerox - Sunny 2070</p>
                        <span class="price">
                            <p>Por : </p><h1>R$ 79,90</h1>
                        </span>
                        <small>Total a vista sem juros</small>
                        <form action="" method="">
                            <button name="add_card" type="submit">
                                <span class="cart"><i class="fas fa-shopping-cart"></i></span>
                                <p>Adcionar ao carrinho</p>
                            </button>
                        </form>
                    </div>
                </a>
            <?php endfor; ?>
        </article>    
    </section>
<?php include('app/view/includes/body_bottom.php'); ?>