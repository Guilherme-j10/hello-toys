<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="<?= SITE_NAME.'public/style/style.css'; ?>">
        <link rel="icon" href="<?= IMAGENS.'icon.png'; ?>"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- fontawesome -->
        <link rel="stylesheet" href="<?= SITE_NAME.'public/style/css/all.css'; ?>">
    </head>
    <body>
        <main class="home">
            <!-- header -->
            <section class="header">
                <img src="<?= IMAGENS.'icon.png'; ?>" alt="">
                <div class="middle">
                    <form action="" method="POST">
                        <input type="text" name="search" placeholder="Pesquise aqui seu produto" required>
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="user_profile">
                        <span class="icon_user_profile">
                            <i class="far fa-user"></i>
                        </span>
                        <p>Olá, faça seu login ou<br> cadastre-se <i class="fas fa-angle-down"></i></p>
                    </div>
                </div>
                <div class="right_side">
                    <ul>
                        <li>
                            <a href="#" title="Acesse seus favoritos"><i class="fas fa-heart"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Meu carrinho"><i class="fas fa-shopping-cart"></i></a>
                            <span class="qtd_cart">0</span>
                        </li>
                    </ul>
                </div>
            </section>

            <!-- header for js -->
            <section class="header add_to_header" style="display: none; padding: .8% 10%;" id="header_js">
                <img src="<?= IMAGENS.'icon.png'; ?>" style="width:8%;" alt="">
                <div class="middle">
                    <form action="" method="POST">
                        <input type="text" name="search" placeholder="Pesquise aqui seu produto" required>
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <div class="user_profile">
                        <span class="icon_user_profile">
                            <i class="far fa-user"></i>
                        </span>
                        <p>Olá faça seu login ou<br> cadastre-se <i class="fas fa-angle-down"></i></p>
                    </div>
                </div>
                <div class="right_side">
                    <ul>
                        <li>
                            <a href="#" title="Acesse seus favoritos"><i class="fas fa-heart"></i></a>
                        </li>
                        <li>
                            <a href="#" title="Meu carrinho"><i class="fas fa-shopping-cart"></i></a>
                            <span class="qtd_cart">0</span>
                        </li>
                    </ul>
                </div>
            </section>
            
            <!-- menu que fica em cima do menu verdee -->
            <nav class="middle_nav">
                <ul>
                    <li>
                        <a href="#">aniversário</a>
                    </li>
                    <li>
                        <a href="#">ofertas do dia</a>
                    </li>
                    <li>
                        <a href="#">dinheiro de volta</a>
                    </li>
                    <li>
                        <a href="#">produtos importados</a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </nav>

            <!-- menu verde -->
            <nav class="nav_bar">
                <ul>
                    <li>
                        <a href="#"><i style="margin-right: 10px;" class="fas fa-bars"></i> compre por departamento <i style="margin-left: 10px;" class="fas fa-angle-down"></i></a>
                        <ul>
                            <li><a href="#">MALAS E BOLSAS</a></li>
                            <li><a href="#">JOGOS</a></li>
                            <li><a href="#">ESCOLAR</a></li>
                            <li><a href="#">VEÍCULOS DE PEDAL E ELÉTRICOS</a></li>
                            <li><a href="#">RÁDIO CONTROLE</a></li>
                            <li><a href="#">QUEBRA-CABEÇA</a></li>
                            <li><a href="#">TOCAS E BARRACAS</a></li>
                            <li><a href="#">FANTASI</a></li>
                            <li><a href="#">BRINQUEDOS DE MONTAR</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">MENINAS</a>
                    </li>
                    <li>
                        <a href="#">MENINOS</a>
                    </li>
                    <li>
                        <a href="#">BEBÊS</a>
                    </li>
                    <li>
                        <a href="#">CARRINHOS</a>
                    </li>
                    <li>
                        <a href="#">PERSONAGENS</a>
                    </li>
                    <li>
                        <a href="#">LANÇAMENTOS</a>
                    </li>
                </ul>
            </nav>

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
                    <a href="#" class="cards">
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
                    <a href="#" class="cards">
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
                    <a href="#" class="cards">
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
                    <a href="#" class="cards">
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
                    <a href="#" class="cards">
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
                </article>    
            </section>

            <!-- seção do rodapé - footer -->
            <footer class="standard_styled rodape">
                <div class="box_top">
                    <div class="left">
                        <img src="<?= IMAGENS.'icon.png'; ?>" alt="LOGO">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="center">
                        <div class="content_options_clients">
                            <span class="header_client"><h1>CATEGORIA</h1></span>
                            <ul>
                                <li><a href="#">Malas e bolsas</a></li>
                                <li><a href="#">Bonecos e personagens</a></li>
                                <li><a href="#">Lançamento</a></li>
                                <li><a href="#">Quebra-cabeça</a></li>
                                <li><a href="#">Fantasia</a></li>
                                <li><a href="#">Rádio controle</a></li>
                            </ul>
                        </div>
                        <div class="content_options_clients">
                            <span class="header_client"><h1>INSTITUCIONAL</h1></span>
                            <ul>
                                <li><a href="#">Quem somos</a></li>
                                <li><a href="#">Trocas e devoluções</a></li>
                                <li><a href="#">Como comprar em nosso site</a></li>
                            </ul>
                        </div>
                        <div class="content_options_clients">
                            <span class="header_client"><h1>CONTATO</h1></span>
                            <ul>
                                <li><a href="#">(11) 258-1948 ou 1598-1950</a></li>
                                <li><a href="#">Loja Carrão: (11) 2671-0926</a></li>
                                <li><a href="#">sac@hellotoys.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="right">
                        <div class="header_newslatter">
                            <h1>NEWSLATTER</h1>
                            <small>Assine para receber promoções e novidades</small>
                        </div>
                        <form action="" method="POST">
                            <input type="email" name="email_newslatter" placeholder="Digite seu e-mail" required>
                            <button type="submit" name="send_newslatter"><i class="fas fa-plus"></i></button>
                        </form>
                    </div>
                </div>
                <div class="biox_bottom">
                    <div class="left_side"></div>
                    <div class="right_side"></div>
                </div>
            </footer>

            <a href="#" class="whats"><img src="<?= IMAGENS.'whats.png'; ?>" alt="whats"></a>
        </main>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- js of  -->
        <script src="<?= SITE_NAME.'public/js/main.js'; ?>"></script>
    </body>
</html>