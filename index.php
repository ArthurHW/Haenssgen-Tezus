<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/home.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Sintony:wght@400;700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" defer></script>
    <script src="js/main.js" defer></script>
    <script src="js/home.js" defer></script>

    <title>Haenssgen</title>
</head>
<body>
    
    <header>
        <div class="container-border">
            <div class="container">
                <div class="menu-mobile">
                    <button class="open-menu-mobile">
                        <div></div>
                    </button>
                    <div class="menu-mobile-content">
                        <div class="close-container">
                            <button class="close">X</button>
                        </div>
                        <ul class="conta-fav">
                            <li class="conta">
                                <div>
                                    <a href="">
                                        <img src="images/header/user.svg" alt="">
                                        <h2>Conta</h2>
                                    </a>
                                    <div class="seta"></div>
                                </div>
                                <ul class="submenu"> 
                                    <li><a href="">Criar conta</a></li>
                                    <li><a href="">Entrar</a></li>
                                </ul>
                            </li>
                            <li class="favoritos">
                                <div>
                                    <a href="">
                                        <img src="images/header/heart.svg" alt="">
                                        <h2>Favoritos</h2>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <ul class="linhas-container-mobile">
                            <li class="linha-mobile">
                                <div>
                                    <a href="">
                                        <img src="images/header/food-service.svg" alt="">
                                        <h3>Linha Food Service</h3>
                                    </a>
                                    <div class="seta"></div>
                                </div>
                                <ul class="submenu">
                                    <li><a href="">Chocolate em p??</a></li>
                                    <li><a href="">Chocolate diet</a></li>
                                    <li><a href="">Chocolate sem lactose</a></li>
                                    <li><a href="">Cobertura fracionada</a></li>
                                    <li><a href="">Cobertura Profissional</a></li>
                                    <li><a href="">Recheio forne??vel</a></li>
                                    <li><a href="">Raspar e cobrir</a></li>
                                </ul>
                            </li>
                            <li class="linha-mobile">
                                <div>
                                    <a href="">
                                        <img src="images/header/functional.svg" alt="">
                                        <h3>Linha Funcional</h3>    
                                    </a>
                                    <div class="seta"></div>
                                </div>
                                <ul class="submenu">
                                    <li><a href="">Chocolate em p??</a></li>
                                    <li><a href="">Chocolate diet</a></li>
                                    <li><a href="">Chocolate sem lactose</a></li>
                                    <li><a href="">Cobertura fracionada</a></li>
                                    <li><a href="">Cobertura Profissional</a></li>
                                    <li><a href="">Recheio forne??vel</a></li>
                                    <li><a href="">Raspar e cobrir</a></li>
                                </ul>
                            </li>
                            <li class="linha-mobile">
                                <div>
                                    <a href="">
                                        <img src="images/header/star.svg" alt="">
                                        <h3>Linha Tradicional</h3>
                                    </a>
                                    <div class="seta"></div>
                                </div>
                                <ul class="submenu">
                                    <li><a href="">Chocolate em p??</a></li>
                                    <li><a href="">Chocolate diet</a></li>
                                    <li><a href="">Chocolate sem lactose</a></li>
                                    <li><a href="">Cobertura fracionada</a></li>
                                    <li><a href="">Cobertura Profissional</a></li>
                                    <li><a href="">Recheio forne??vel</a></li>
                                    <li><a href="">Raspar e cobrir</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="./">
                    <img class="logo" src="images/header/haenssgen-logo.svg" alt="logo">
                </a>
                <div class="lupa-carrinho-mobile">
                    <img class="lupa" src="images/header/search.svg" alt="">
                    <a href="">
                        <img src="images/header/cart.svg" alt="">
                    </a>
                </div>
                <div class="busca">
                    <input id="pesquisa" type="text" name="pesquisa" placeholder="O que voc?? procura?">
                    <div class="menu-busca">
                        <div class="opcoes">
                            <div class="pesquisas-populares">
                                <h3>Pesquisas populares</h3>
                                <p onclick="buscarElemento(this)">Exemplo</p>
                                <p onclick="buscarElemento(this)">Exemplo</p>
                                <p onclick="buscarElemento(this)">Exemplo</p>
                                <p onclick="buscarElemento(this)">Exemplo</p>
                            </div>
                            <div class="categorias">
                                <h3>Categorias</h3>
                                <p onclick="buscarElemento(this)">Exemplo</p>
                            </div>
                            <div class="pesquisas-recentes">
                                <h3>Pesquisas recentes</h3>
                                <div onclick="buscarElemento(this)" class="pesquisa">Exemplo</div>
                                <div onclick="buscarElemento(this)" class="pesquisa">Exemplo</div>
                                <div onclick="buscarElemento(this)" class="pesquisa">Exemplo</div>
                                <div onclick="buscarElemento(this)" class="pesquisa">Exemplo</div>
                            </div>
                        </div>
                        <div class="produtos">
                            <h3>Produtos</h3>
                            <div class="produtos-container">
                                <div class="produto">
                                    <img src="images/home/produto_01.png" alt="">
                                    <h2>Recheio Forne??vel sabor Chocolate ao leite 5kg</h2>
                                    <a href="products.html">
                                        <button class="comprar">Comprar</button>
                                    </a>
                                </div>
                                <div class="produto">
                                    <img src="images/home/produto_02.png" alt="">
                                    <h2 class="nome">Chocolate Nutris Diet Sem Lactose 400g</h2>
                                    <a href="">
                                        <button class="comprar">Comprar</button>
                                    </a>
                                </div>
                                <div class="produto">
                                    <img src="images/home/produto_03.png" alt="">
                                    <h2 class="nome">Creme de Amendoim Zero A????car 150g</h2>
                                    <a href="">
                                        <button class="comprar">Comprar</button>
                                    </a>
                                </div>
                            </div>
                            <a href="">ver tudo (10)</a>
                        </div>
                    </div>
                </div>
                <div class="menus">
                    <div class="dropdown-conta dropdown-menu">
                        <div class="icone-container">
                            <img class="icone" src="images/header/user.svg" alt="conta">
                            <div>
                                <div class="nome">Conta </div> 
                                <div class="mensagem">Entrar</div>
                            </div>
                        </div>
                        <div>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="">Criar conta</a>
                                </li>
                                <li>
                                    <a href="">Entrar</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="icone-container">
                        <img class="icone" src="images/header/heart.svg" alt="favoritos">
                        <div>
                            <div class="nome">Favoritos</div>
                            <div class="mensagem">Ver todos</div>
                        </div>
                    </div>  
                    <div class="dropdown-carrinho dropdown-menu">
                        <div class="icone-container">
                            <img class="icone" src="images/header/cart.svg" alt="carrinho">
                            <div>
                                <div class="nome">Carrinho</div>
                                <div class="mensagem">3 produtos</div>
                            </div>
                        </div>
                        <div>
                            <ul class="dropdown-content">
                                <li>
                                    <a href="" class="produto">
                                        <img class="produto-img" src="images/header/produto_01.png" alt="">
                                        <h2>Recheio Forne??vel sabor Chocolate ao Leite 5kg</h2>
                                        <img src="" alt="">
                                        <img src="" alt="">
                                    </a>
                                    <p class="valor">R$ 100,00</p>
                                </li>
                                <li>
                                    <a href="" class="produto"> 
                                        <img class="produto-img" src="images/header/produto_02.png" alt="">
                                        <h2>Chocolate Nutris Diet Sem Lactose 400g</h2>
                                        <img src="" alt="">
                                        <img src="" alt="">
                                    </a>
                                    <p class="valor">R$ 20,00</p>
                                </li>
                                <li>
                                    <a href="" class="produto">
                                        <img class="produto-img" src="images/header/produto_03.png" alt="">
                                        <h2>Creme de Amendoim Zero A????car 150g</h2>
                                        <img src="" alt="">
                                        <img src="" alt="">
                                    </a>
                                    <p class="valor">R$ 10,00</p>
                                </li>
                                <div class="info-compra">
                                    <div class="subtotal">
                                        <p>Subtotal</p>
                                        <p class="valor-total">R$ 130,00</p>
                                    </div>
                                    <a href="">
                                        <button>
                                            Finalizar Compra
                                        </button>
                                    </a>
                                    <a class="ver-carrinho" href="">ver carrinho</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="linhas-container">
            <ul class="linhas">
                <li class="dropdown-menu dropdown-linha">
                    <a href="" class="linha">
                        <img class="icone-linha" src="images/header/food-service.svg" alt="linha food-service">
                        Linha Food Service
                    </a>
                    <ul class="dropdown-content">
                        <li><a href="">Chocolate em p??</a></li>
                        <li><a href="">Chocolate diet</a></li>
                        <li><a href="">Chocolate sem lactose</a></li>
                        <li><a href="">Cobertura fracionada</a></li>
                        <li><a href="">Cobertura Profissional</a></li>
                        <li><a href="">Recheio forne??vel</a></li>
                        <li><a href="">Raspar e cobrir</a></li>
                    </ul>
                </li>
                <li class="dropdown-menu dropdown-linha">
                    <a href="" class="linha">
                        <img class="icone-linha" src="images/header/functional.svg" alt="linha funcional">
                        Linha Funcional
                    </a>
                    <ul class="dropdown-content">
                        <li><a href="">Chocolate em p??</a></li>
                        <li><a href="">Chocolate diet</a></li>
                        <li><a href="">Chocolate sem lactose</a></li>
                        <li><a href="">Cobertura fracionada</a></li>
                        <li><a href="">Cobertura Profissional</a></li>
                        <li><a href="">Recheio forne??vel</a></li>
                        <li><a href="">Raspar e cobrir</a></li>
                    </ul>
                </li>
                <li class="dropdown-menu dropdown-linha">
                    <a href="" class="linha">
                        <img class="icone-linha" src="images/header/star.svg" alt="linha tradicional">
                            Linha Tradicional
                    </a>
                    <ul class="dropdown-content">
                        <li><a href="">Chocolate em p??</a></li>
                        <li><a href="">Chocolate diet</a></li>
                        <li><a href="">Chocolate sem lactose</a></li>
                        <li><a href="">Cobertura fracionada</a></li>
                        <li><a href="">Cobertura Profissional</a></li>
                        <li><a href="">Recheio forne??vel</a></li>
                        <li><a href="">Raspar e cobrir</a></li>
                    </ul>
                </li>
            </ul>
        </div>
   
    </header>

    <main>
        <div class="owl-carousel banner-slider owl-theme">
            <div><img src="images/home/haenssgen_banner_01_desk.png" id="banner1" class="banner"></img></div>
            <div><img src="images/home/haenssgen_banner_01_desk.png" id="banner1" class="banner"></img></div>
            <div><img src="images/home/haenssgen_banner_01_desk.png" id="banner1" class="banner"></img></div>
        </div>
        <div class="owl-carousel banner-slider owl-theme mobile">
            <div><img src="images/home/haenssgen_banner_01_mobile@2x.png" id="banner1" class="banner"></img></div>
            <div><img src="images/home/haenssgen_banner_01_mobile@2x.png" id="banner1" class="banner"></img></div>
            <div><img src="images/home/haenssgen_banner_01_mobile@2x.png" id="banner1" class="banner"></img></div>
        </div>

        <div class="after-banner">
            <div class="container">
                <div class="qualidades">
                    <img class="icone" src="images/home/tradition.svg" alt="">
                    <div>
                        <div class="qualidade">125 anos de tradi????o</div>
                        <div class="adicional">em receitas de sucesso</div>
                    </div>
                </div>
    
                <div class="qualidades hide-mobile">
                    <img class="icone" src="images/home/tradition.svg" alt="">
                    <div>
                        <div class="qualidade">Entrega com agilidade</div>
                        <div class="adicional">nas regi??es sul e sudeste</div>
                    </div>
                </div>
    
                <div class="qualidades hide-mobile">
                    <img class="icone" src="images/home/card.svg" alt="">
                    <div>
                        <div class="qualidade">10x sem juros</div>
                        <div class="adicional">para pagamentos no cart??o</div>
                    </div>
                </div>
    
                <div class="qualidades hide-mobile">
                    <img class="icone" src="images/home/discount.svg" alt="">
                    <div>
                        <div class="qualidade">5% de desconto</div>
                        <div class="adicional">para pagamentos no boleto</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="linha-container">

            <div id="linha-food-service" class="linha">

                <img src="images/home/food-service.svg" alt="">
                <h3>Linha Food Service</h3>
                <p>Conhe??a a linha Food Service, composta por chocolates, coberturas e recheios para uso profissional e dom??stico.</p>
                <a href="">
                    <p>Ver Tudo </p> 
                    <div class="ver-tudo"></div>
                </a>
            </div>
            
            <div class="produtos-container">
                <div class="produtos-slider">
                    <button class="seta-esquerda seta" id="seta1">
                        <img src="images/home/arrow-left-1.svg" alt="">
                    </button>
                    <div class="produtos owl-carousel owl-theme" id="produtos1">
                    <div class="produto">
                        <div class="header-produto">
                            <div class="desconto">10% OFF</div>
                            <img src="images/home/heart.svg" alt="">    
                        </div>
                        <div class="container-imagem">
                            <img src="images/home/produto_01.png" alt="">
                            <a href=""><button class="comprar">Comprar</button>  </a>  
                        </div>
                        <div class="nome">Recheio Forne??vel sabor Chocolate ao leite 5kg</div>
                        <div class="de">R$ 120,00</div>
                        <div class="pre??o">R$ 100,00</div>
                        <div class="pagamento">5x de R$ 20,00 sem juros</div>
                    </div>
    
                    <div class="produto">
                        <div class="header-produto">
                            <div class="desconto oculto"></div>
                            <img src="images/home/heart.svg" alt="">    
                        </div>
                        <div class="container-imagem">
                            <img src="images/home/produto_02.png" alt="">
                            <button class="avise-me">Avise-me</button>
                        </div>
                        <div class="nome">Chocolate Nutris Diet Sem Lactose 400g</div>
                        <div class="de"></div>
                        <div class="pre??o">R$ 20,00</div>
                        <div class="pagamento">1x de R$ 20,00 sem juros</div>
                    </div>
    
                    <div class="produto">
                        <div class="header-produto">
                            <div class="desconto oculto"></div>
                        </div>
                        <div class="container-imagem">
                            <img src="images/home/produto_03.png" alt="">
                        </div>
                        <div class="nome">Creme de Amendoim Zero A????car 150g</div>
                        <div class="de"></div>
                        <div class="pre??o">R$ 10,00</div>
                        <div class="pagamento">1x de R$ 10,00 sem juros</div>
                    </div>  
                </div>
                    <button class="seta-direita seta" id="seta1">
                        <img src="images/home/arrow-right-2.svg" alt="">
                    </button>
                </div>
            </div>
            
        </div>

        <div class="banner-destaques " id="banner-destaques1">
            <ul class="slider owl-carousel owl-theme">
                <li>
                    <img src="images/home/banner_destaque_01@2x.png" alt="">
                </li>
                <li>
                    <img src="images/home/banner_destaque_02@2x.png" alt="">
                </li>
                <li>
                    <img src="images/home/banner_destaque_03@2x.png" alt="">
                </li>
            </ul>
        </div>


    <div class="linha-container">
        <div id="linha-funcional" class="linha">

            <img src="images/home/functional.svg" alt="">
            <h3>Linha Funcional</h3>
            <p>Conhe??a a Linha Nutris, criada para p??blicos espec??ficos, tais como os diab??ticos, os intolerantes ?? lactose e/ou ao gl??ten</p>
            <a href="">
                <p>Ver Tudo </p> 
                <div class="ver-tudo"></div>
            </a>
        </div>
        <div class="produtos-container">
            <div class="produtos-slider">
                <button class="seta-esquerda seta" id="seta2">
                    <img src="images/home/arrow-left-1.svg" alt="">
                </button>
                <div class="produtos owl-carousel owl-theme" id="produtos2">
                    <div class="produto">
                        <div class="header-produto">
                            <div class="desconto">10% OFF</div>
                        </div>
                        <div class="container-imagem">
                            <img src="images/home/produto_01.png" alt="">
                        </div>
                        <div class="nome">Recheio Forne??vel sabor Chocolate ao leite 5kg</div>
                        <div class="de">R$ 120,00</div>
                        <div class="pre??o">R$ 100,00</div>
                        <div class="pagamento">5x de R$ 20,00 sem juros</div>
                    </div>
        
                    <div class="produto">
                        <div class="header-produto">
                            <div class="desconto oculto"></div> 
                        </div>
                        <div class="container-imagem">
                            <img src="images/home/produto_02.png" alt="">
                        </div>
                        <div class="nome">Chocolate Nutris Diet Sem Lactose 400g</div>
                        <div class="de"></div>
                        <div class="pre??o">R$ 20,00</div>
                        <div class="pagamento">1x de R$ 20,00 sem juros</div>
                    </div>
        
                    <div class="produto">
                        <div class="header-produto">
                            <div class="desconto oculto"></div>
                        </div>
                        <div class="container-imagem">
                            <img src="images/home/produto_03.png" alt="">
                        </div>
                        <div class="nome">Creme de Amendoim Zero A????car 150g</div>
                        <div class="de"></div>
                        <div class="pre??o">R$ 10,00</div>
                        <div class="pagamento">1x de R$ 10,00 sem juros</div>
                    </div>
                </div>  
                <button class="seta-direita seta" id="seta2">
                    <img src="images/home/arrow-right-2.svg" alt="">
                </button>         
            </div>
        </div>

        
    </div>

    <div class="banner-destaques" id="banner-destaques2">
        <div class="slider owl-carousel owl-theme">
            <img src="images/home/banner_destaque_04@2x.png" alt="">
        <img src="images/home/banner_destaque_05@2x.png" alt="">
        </div>
    </div>

    <div class="linha-container">
        <div id="linha-tradicional" class="linha">

            <img src="images/home/star.svg" alt="">
            <h3>Linha Tradicional</h3>
            <p>Conhe??a nossos tabletes e bombons tradicionais, produzidos pelo m??todo convencional com mat??ria-prima selecionada.</p>
            <a href="">
                <p>Ver Tudo </p> 
                <div class="ver-tudo"></div>
            </a>
        </div>

        <div class="produtos-container">
            <div class="produtos-slider">
                <button class="seta-esquerda seta" id="seta3">
                    <img src="images/home/arrow-left-1.svg" alt="">
                </button>
                <div class="produtos owl-carousel owl-theme" id="produtos3">
                    <div class="produto">
                        <div class="header-produto">
                            <div class="desconto">10% OFF</div>
                        </div>
                        <div class="container-imagem">
                            <img src="images/home/produto_01.png" alt="">
                        </div>
                        <div class="nome">Recheio Forne??vel sabor Chocolate ao leite 5kg</div>
                        <div class="de">R$ 120,00</div>
                        <div class="pre??o">R$ 100,00</div>
                        <div class="pagamento">5x de R$ 20,00 sem juros</div>
                    </div>
                    <div class="produto">
                        <div class="header-produto">
                            <div class="desconto oculto"></div> 
                        </div>
                        <div class="container-imagem">
                            <img src="images/home/produto_02.png" alt="">
                        </div>
                        <div class="nome">Chocolate Nutris Diet Sem Lactose 400g</div>
                        <div class="de"></div>
                        <div class="pre??o">R$ 20,00</div>
                        <div class="pagamento">1x de R$ 20,00 sem juros</div>
                    </div>
                    <div class="produto">
                        <div class="header-produto">
                            <div class="desconto oculto"></div>
                        </div>
                        <div class="container-imagem">
                            <img src="images/home/produto_03.png" alt="">
                        </div>
                        <div class="nome">Creme de Amendoim Zero A????car 150g</div>
                        <div class="de"></div>
                        <div class="pre??o">R$ 10,00</div>
                        <div class="pagamento">1x de R$ 10,00 sem juros</div>
                    </div> 
                </div>  
                <button class="seta-direita seta" id="seta3">
                    <img src="images/home/arrow-right-2.svg" alt="">
                </button>         
            </div>
        </div>
        
    </div>

    

    </main>

    <footer>
        <div class="novidades">
            <p>Receba novidades e ofertas exclusivas por e-mail</p>
            <form action="">
                <input type="text" name="nome" id="nome" placeholder="Nome">
                <input type="email" id="email" name="email" placeholder="E-mail">
                <button type="submit" id="enviar">Enviar</button>
            </form>
        </div>

        <div class="info-container">
            <ul>

                <li class="contato">
                    <div class="menu-title">
                        <h3>Contato</h3>
                        <div class="seta"></div>
                    </div>
                    <ul class="submenu">
                        <li>
                            <a href="" class="contato-info">
                                <img src="images/footer/phone.svg" alt="">
                                <p>(51) 3764-1166</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="contato-info">
                                <img src="images/footer/email.svg" alt="">
                                <p>sac@natal.ind.br</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="contato-info">
                                <img src="images/footer/XMLID_834_.svg" alt="">
                                <p>&nbsp;&nbsp;@haenssgen</p>
                            </a>
                        </li>
                        <li>
                            <a href="" class="contato-info">
                                <img src="images/footer/placeholder.svg" alt="">
                                <p>R. Frederico Germano Haenssgen, 2074 - Cruzeiro do Sul/RS</p>
                            </a>
                        </li>
                    </ul>                    
                </li>

                <li class="informacoes">
                    <div class="menu-title">
                        <h3>Informa????es</h3>
                        <div class="seta"></div>
                    </div>
                    
                    <ul class="submenu">
                        <li><a href="">D??vidas Frequentes</a></li>
                        <li><a href="">Formas de pagamento</a></li>
                        <li><a href="">Trocas e devolu????es</a></li>
                        <li><a href="">Como Comprar</a></li>
                        <li><a href="">Seguran??a</a></li>
                    </ul>  
                </li>

                <li class="institucional">
                    <div class="menu-title">
                        <h3>Institucional</h3>
                        <div class="seta"></div>
                    </div>
                    <ul class="submenu">
                        <li><a href="">Quem Somos</a></li>
                        <li><a href="">Pol??tica de Privacidade</a></li>
                        <li><a href="">Termos e Condi????es</a></li>
                        <li><a href="">Regras de Frete</a></li>
                        <li><a href="">Fale Conosco</a></li>
                    </ul>
                </li>

                <li class="cliente">
                    <div class="menu-title">
                        <h3>Cliente</h3>
                        <div class="seta"></div>
                    </div>
                    <ul class="submenu">
                        <li><a href="">Entrar</a></li>
                        <li><a href="">Criar Conta</a></li>
                        <li><a href="">Pedidos</a></li>
                        <li><a href="">Favoritos</a></li>
                        <li><a href="">Avalia????es</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="aditional-information">
            <div>
                <div class="pagamento">
                    <p>Formas de Pagamento</p>
                    <div class="bandeiras">
                        <img src="images/footer/americanexpress.svg" alt="">
                        <img src="images/footer/bancodobrasil.svg" alt="">
                        <img src="images/footer/boleto.svg" alt="">
                        <img src="images/footer/elo.svg" alt="">
                        <img src="images/footer/itau.svg" alt="">
                        <img src="images/footer/mastercard.svg" alt="">
                        <img src="images/footer/visa.svg" alt="">
                    </div>
                </div>

                <div class="desenvolvimento">
                    <p>Desenvolvimento</p>
                    <img src="images/footer/tezus_logo.svg" alt="">
                </div>

                <div class="certificados">
                    <p>Certificados e seguran??a</p>
                    <img src="images/footer/letsencrypt-logo.svg" alt="">
                    <img src="images/footer/site-seguro.svg" alt="">
                </div>
            </div>

            <p>
                ?? 2020 Haenssgen S. A. - CNPJ: 00.000.000/0000-00
            </p>
        </div>
        
    </footer>
   

</body>
</html>