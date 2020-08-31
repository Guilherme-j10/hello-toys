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
        <main class="global">
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