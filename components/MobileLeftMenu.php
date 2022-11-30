<!-- Mobile Left Menu Categorias -->
<div class="MobileLeftMenu">
    <!-- Absolute positioned Close Button -->
    <div class="CloseButtonContainer">
        <i id="MobileMenuClose" class="bi bi-x-lg"></i>
    </div>
    <!-- Login Bar -->
    <div class="MobileLoginContainer">
        <?php if (!isset($_SESSION["User"])){ ?>
            <a href="./membro/cadastro"> Cadastre-se para receber cupons e benefícios <span>exclusivos para membros!</span></a>
            <a href="./membro/login">LOGIN <i class="bi bi-arrow-right-circle-fill"></i></a>
        <?php } else{ ?>
            <a id="LogadoTitle" href="./membro/perfil">Olá, <?php echo $_SESSION["User"]; ?> !</a>
        <?php } ?>
    </div>

    <!-- Mobile Categorias -->
    <div class="CategoriasContainer">
        <div class="CategoriasLI"><p>Feminino</p>
            <div class="LIMenu">
                <p>Roupas
                    <div class="LISubMenu">
                        <a href="./produtos/nav"><p style="font-size:30px;font-weight:700;text-decoration: underline;text-decoration-color: #fa8e2f;letter-spacing: 1.5px;">Ver todos</p></a>
                        <a href="./produtos/nav"><p>Blusas</p></a>
                        <a href="./produtos/nav"><p>Camisetas</p></a>
                        <a href="./produtos/nav"><p>Regatas</p></a>
                        <a href="./produtos/nav"><p>Camisolas</p></a>
                        <a href="./produtos/nav"><p style="color:#FDCDA2;font-family:'Nunito',sans-serif;font-weight:900;text-decoration: underline;text-decoration-color: #fa8e2f;">20% OFF</p></a>
                        <div style="width:90%;height:500px;align-self: center;">
                            <img style="width:100%;height:400px;" src="./resources/MobileMenu/Feminino-Roupas-Banner.PNG">
                        </div>
                    </div>
                </p>
                <p>Praia
                    <div class="LISubMenu">
                        <a href="./produtos/nav"><p>Bikinis</p></a>
                        <a href="./produtos/nav"><p>Quimonos</p></a>
                        <a href="./produtos/nav"><p>Tankinis</p></a>
                        <a href="./produtos/nav"><p>Acessórios de Praia</p></a>
                        <a href="./produtos/nav"><p>Calças de Praia</p></a>
                    </div>
                </p>
                <p>Calçados
                    <div class="LISubMenu">
                        <a href="./produtos/nav"><p>Sandálias</p></a>
                        <a href="./produtos/nav"><p>Tênis</p></a>
                        <a href="./produtos/nav"><p>Botas</p></a>
                        <a href="./produtos/nav"><p>Sapatilhas</p></a>
                        <a href="./produtos/nav"><p>Chinelos</p></a>
                    </div>
                </p>
            </div>
            <!-- Botao Retornar nos Menus -->
            <div id="CategoriaReturnButton">
                <i class="bi bi-arrow-bar-left"></i>
            </div>
        </div>
        <div class="CategoriasLI"><p>Masculino</p></div>
        <div class="CategoriasLI"><p>Infantil</p></div>
        <div class="CategoriasLI"><p>Beleza</p></div>
    </div>

    <!-- Em Alta e outras opcoes -->
    <div id="TrendingOpcoesContainer">
        <a class="TrendingOpcoesLI">Em Alta</a>
        <a class="TrendingOpcoesLI">Lookbook</a>
        <a class="TrendingOpcoesLI">Mais Vendidos</a>
    </div>

    
    <!-- Pequeno Footer do MobileLeftMenu para colocar opcoes q deixam de ser acessiveis -->
    <!-- do desktop no mobile -->

    <!-- Container Opcoes Extras -->
    <div id="OpcoesContainer">
        <a href="/loja/sobre" class="OpcoesLI">Sobre Nós</a>
        <a href="/loja/noticias" class="OpcoesLI">Notícias</a>
        <a href="/loja/faq" class="OpcoesLI">FAQ</a>
        <a href="/loja/frete" class="OpcoesLI">Entenda o Frete</a>
    </div>
    <!-- Atendimento -->
    <div class="AtendimentoContainer">
        <a href="/loja/atendimento">
            Central de Atendimento
        </a>
    </div>

    <!-- Placeholder / Espaco Extra -->
    <div id="Espaco">

    </div>

</div>
<script src="./js/Mobile/MobileMenu/MobileMenuHandler.js"></script>
