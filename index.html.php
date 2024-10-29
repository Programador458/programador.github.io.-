<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" href="../img/pngtree-online-shop-digital-shopping-logo-concept-for-mouse-and-cart-bag-png-image_7265985.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnlineShop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/onlineShop_cabecalho.css">
    <link rel="stylesheet" href="../css/onlineShop_conteudoPrincipal.css">
</head>
<body>

    <div class="message">
        <a href="#"><i class="bi bi-chat-dots"></i></a>
    </div>



    <!--CABEÇALHO DO SITE-->
    <header class="cabecalho">
        <div class="registro">
            <a href="onlineShop_assinar.php"><button>Assinar</button></a>
            <a href="Entrar.php"><button>Entrar</button></a>
        </div>

        <div class="modo">
            <div class="box">
                <input type="checkbox" name="check" id="check">
                <label for="check" class="brn"></label>
            </div>
        </div>

        <div class="pesquisa">
            <i class="bi bi-search pesquisa" onclick="pesquisa()"></i>
        </div>

            <div class="navegacao">
                    <nav>
                        <ul>
                            <li><a href="#produtos">Produtos</a></li>
                            <li><a href="#">Estoque</a></li>
                            <li><a href="../html/onlineShop_emDestaque.html">Em Destaque</a></li>
                            <li><a href="onlineShop_sobre.html">Sobre</a></li>
                        </ul>
                    </nav>
            </div>


        <div class="logo">
            <img src="../img/pngtree-online-shop-digital-shopping-logo-concept-for-mouse-and-cart-bag-png-image_7265985.png" alt="">
        </div>
    </header>
    <!--FIM-->

    <!--CONTEÚDO PRINCIPAL DO SITE-->
    <main class="conteudo-principal">


        <section class="pag1">

            <div class="texto">
                <h1>OnlineShop</h1>
                <br>
                <br>
                <h2>Venha que nós satisfazemos a tua necessidade, <br> O melhor voçê encontra aqui.</h2>
                <br>
                <p class="pDark">
                    Temos os melhores produtos aos melhores preços e com uma qualidade como nunca antes vista,
                     o mundo tecnológico é a nossa maior prioridade, temos os melhores acessórios tecnológico modernos. 
                </p>
            <br>
            <br>

            <div class="btn">
                <a href="#"><button>Ver Agora &#8594;</button></a>
            </div>
            </div>

            <div class="pc">
                <img src="../img/lenovo-laptops-yoga-slim-6i-gen-8-14-intel-hero.avif" class="imagem1" alt="">
            </div>
        </section>


        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <!--Silde-->
   
    <section class="content">

        <div class="slides">

            <input type="radio" name="slide" id="slide1" checked>
            <input type="radio" name="slide" id="slide2">
            <input type="radio" name="slide" id="slide3">
            <input type="radio" name="slide" id="slide4">
            <input type="radio" name="slide" id="slide5">

            
            <div class="slide pri">
                <img src="../img/pc/lenovo-laptops-lenovo-v14-gen-3-14-intel-hero.webp" alt="">
            </div>

            <div class="slide">
                <img src="../img/telefone/unnamed.png" alt="Notebook Plus">
            </div>

            <div class="slide">
                <img src="../img/console/microsoft-xbox-w-controller-rrt-00001-iset.png" alt="">
            </div>

            <div class="slide">
                <img src="../img/pc/port-toshiba-dynabook-116-hd-n4020-4gb-128gb-w10p-4.png" alt="">
            </div>

            <div class="slide">
                <img src="../img/console/267452_0_eeziko.webp" alt="">
            </div>
        </div>

        <div class="navega">
            <label for="slide1" class="bord"></label>
            <label for="slide2" class="bord"></label>
            <label for="slide3" class="bord"></label>
            <label for="slide4" class="bord"></label>
            <label for="slide5" class="bord"></label>
        </div>
    </section>
    <!--FIm-->

    <!--CAIXA DE OPCAO PARA COMPRA DE PC-->
    
    <!--FIM-->
  
    <!--SECCÃO PCS MODERNOS-->
  
    <section class="pc1">

        <h2>Modelos Modernos</h2>
        <div class="borda"></div>
        
        <div class="interface-pc">
                        
            <div class="img">
                <img src="../img/pc/lenovo-laptop-thinkpad-e14-gen-2-gallery.png.webp" alt="" onmouseenter="lenovo()">
            </div>

            <div class="img">
                <img src="../img/pc/port-hp-250-156-i3-1005g1-fhd-4g-256-ssd-w10p.jpeg" alt="">
            </div>

            <div class="img">
                <img src="../img/pc/prod-2107-desktop-vostro-3710-lf-1920x1440.avif" alt="">
            </div>
        </div>
    </section>
  
    <!--FIM-->

      <!--SECCÃO PRODUTOS COMERCIALIZADOS-->
    
      <section class="produtos" id="products">

        <div class="interface-pro"  id="produtos">

            <h2>Videogames</h2>
            <div class="borda"></div>

            <div class="controlo-pro">

                <div class="img-pro">
                    <img src="../img/console/267452_0_eeziko.webp" alt="" title="PlayStaion 5">
                <p>PlayStaion 5</p>
                <p class="star">&#9733;&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <p>400.000 <span>KZ</span></p>
                <button class="comprar" id="compra" onclick="compraPro()">Comprar</button>
                <br>
                <button class="reservar" id="reserva">Reservar</button>
            </div>

            <div class="img-pro">
                <img src="../img/console/1200px-PS2-Versions.png" alt="" title="PlayStaion 2">
                <p>PlayStaion 2</p>
                <p class="star">&#9733;&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <p>70.000 <span>KZ</span></p>
                <button class="comprar" id="compra" onclick="compraPro()">Comprar</button>
                <br>
                <button class="reservar" id="reserva">Reservar</button>
            </div>

            <div class="img-pro">
                <img src="../img/console/585ea27bcb11b227491c350b.png" alt="" title="PlayStaion 4">
                <p>PlayStaion 4</p>
                <p class="star">&#9733;&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <p>200.000 <span>KZ</span></p>
                <button class="comprar" id="compra" onclick="compraPro()">Comprar</button>
                <br>
                <button class="reservar" id="reserva">Reservar</button>
            </div>
        </div>
        </div>


        <div class="interface-pro">

            <h2 class="phones">Smartiphones</h2>
            <div class="borda"></div>

            <div class="controlo-pro">

                <div class="img-pro">
                    <img src="../img/telefone/africa-pt-galaxy-s24-plus-sm-s926bzv2afa-thumb-539414351.webp" alt="" title="Galaxy S24 Plus">
                <p>Galaxy S24 Plus</p>
                <p class="star">&#9733;&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <p>100.000 <span>KZ</span></p>
                <button class="comprar" id="compra" onclick="compraProSmart()">Comprar</button>
                <br>
                <button class="reservar" id="reserva">Reservar</button>
            </div>

            <div class="img-pro">
                <img src="../img/telefone/IPHONE-13-RED.png" alt="" title="Iphone 13 RED">
                <p>Iphone 13 RED</p>
                <p class="star">&#9733;&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <p>300.000 <span>KZ</span></p>
                <button class="comprar" id="compra" onclick="compraProSmart()">Comprar</button>
                <br>
                <button class="reservar" id="reserva">Reservar</button>
            </div>

            <div class="img-pro">
                <img src="../img/telefone/unnamed.png" alt="" title="Iphone XR">
                <p>Iphone XR</p>
                <p class="star">&#9733;&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <p>190.000 <span>KZ</span></p>
                <button class="comprar" id="compra" onclick="compraProSmart()">Comprar</button>
                <br>
                <button class="reservar" id="reserva">Reservar</button>
            </div>
        </div>
        </div>

        <div class="interface-pro terceiro" >

            <h2 class="phones">Acessórios</h2>
            <div class="borda"></div>

            <div class="controlo-pro">

                <div class="img-pro">
                    <img src="../img/pc/as180538.png" alt="" title="Pendrive SanDisk">
                <p>Pendrive SanDisk 32GB</p>
                <p class="star">&#9733;&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <p>8.000 <span>KZ</span></p>
                <button class="comprar" id="compra" onclick="compraProacess()">Comprar</button>
                <br>
                <button class="reservar" id="reserva">Reservar</button>
            </div>

            <div class="img-pro">
                <img src="../img/pc/disco_rigido_interno_seagate_video_3_5_st500vm000_500gb_14323_1_4aa324d6f23f9263b564eb0dac8ae802.webp" alt="" title="HD Intel ">
                <p>HD Intel 300GB</p>
                <p class="star">&#9733;&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <p>20.000 <span>KZ</span></p>
                <button class="comprar" id="compra" onclick="compraProacess()">Comprar</button>
                <br>
                <button class="reservar" id="reserva">Reservar</button>
            </div>

            <div class="img-pro">
                <img src="../img/pc/memoria_ram_adata_4gb_3200mhz_notebook_125_1_c5b618dcf43876c500aeb2b3f0bac83b.webp" alt="" title="Memória Ram">
                <p>Memória Ram Ryzen 16GB</p>
                <p class="star">&#9733;&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <p>10.000 <span>KZ</span></p>
                <button class="comprar" id="compra" onclick="compraProacess()">Comprar</button>
                <br>
                <button class="reservar" id="reserva">Reservar</button>
            </div>
        </div>
        </div>

        <div class="see">
            <a href="../html/onlineShop_produtos.html"><button>Ver Mais Produtos &#8594;   </button></a>
        </div>
    </section>
  
    <!--FIM-->
  
</main>
<!--FIM-->


<!--R O D A P É-->

<footer>

        
    <div class="logo-footer">

        <div class="rodape">

            <img src="../img/pngtree-online-shop-digital-shopping-logo-concept-for-mouse-and-cart-bag-png-image_7265985.png" alt="">
            <h1>OnlineShop</h1>
    </div>

    <div class="border"></div>

    <div class="links">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-twitter-x"></i></a>        
        <a href="#"><i class="bi bi-whatsapp"></i></a>        
    </div>
</div>

    <div class="interface-footer">

        <div class="controlo">
            <h2>AcessStore</h2>

            <nav>
                <ul>
                    <li><a href="onlineShop_sobre.html">Acerca</a></li>
                    <li><a href="#">Contactos</a></li>
                    <li><a href="#">História</a></li>
                    <li><a href="#">Informações Adicionais</a></li>
                </ul>
            </nav>
        </div>

        <div class="controlo">
            <h2>Loja</h2>

            <nav>
                <ul>
                    <li><a href="#">Localização</a></li>
                    <li><a href="#">Regulamento</a></li>
                    <li><a href="#">Parceria</a></li>
                    <li><a href="#">Atividades Extras</a></li>
                </ul>
            </nav>
        </div>


        <div class="controlo">
            <h2>suporte</h2>

            <nav>
                <ul>
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">Contactos</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">Avaliar</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="copy">
        <p>&copy;</p>
        <p>Copyright: All rights reserved.</p>
    </div>


</footer>
<!--FIM-->

    <section class="processo">

        <div class="borda_pro">

            <div class="container">

                <h1>Processando <span class="pri">.</span><span class="sec">.</span><span class="ter">.</span></span><span class="quarta">.</span></h1>
            </div>
        </div>
    </section>

    


    <script src="../js/produtos_compra.js"></script>

    <script>
         

let conta = 1;

setInterval(()=>{

    document.getElementById('slide' + conta).checked = true;
    conta++;

    if(conta > 5){
        conta = 1;
    }

    }, 2000);

        var check = document.getElementById('check');
        var pDark = document.querySelector('.pDark');
        check.addEventListener('change', ()=>{
                document.body.classList.toggle('blackMode');
                pDark.color = "white";
        })
    </script>
</body>
</html>