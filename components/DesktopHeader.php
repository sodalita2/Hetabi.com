<header>
    <!-- Logo -->
    <a href="/" class="HeaderLogo">
        <img src="./resources/Header/hetabi_logo.png">
    </a>

    <!-- Nav Bar -->
    <div class="HeaderNavbar">
        <div class="HeaderLI">
            <a href="./produtos/nav?page=1&ct0=Feminino">Feminino
                <div class="HoverLI"></div>
            </a>
            <div class="DropdownNavbar">
                <!-- Advertisement Image -->
                <div class="AdImage">
                    <img id="FemininoAd" src="./resources/Index/Pequeno8.PNG">
                </div>
                <span style="height:98%;width:2px;background-color:#fa8e2f3b;margin-left:15px;margin-right:15px;"></span>
                <!-- Roupas Container -->
                <div class="DropdownSecao">
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Roupas">Roupas</a>
                    <a id="Divisoria"></a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Roupas&ct2=Blusas">Blusas</a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Roupas&ct2=Camisetas">Camisetas</a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Roupas&ct2=Regatas">Regatas</a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Roupas&ct2=Camisolas">Camisolas</a>
                    <a href="./produtos/nav?page=1&ct0=Feminino" style="margin-top:auto;font-size:14px;color:#8b4d16d7;">Ver Todos os Produtos</a>
                </div>
                <!-- Praia Container -->
                <div class="DropdownSecao">
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Praia">Praia</a>
                    <a id="Divisoria"></a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Praia&ct2=Bikinis">Bikinis</a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Praia&ct2=Quimonos">Quimonos</a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Praia&ct2=Tankinis">Tankinis</a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Praia&ct2=Acessorios">Acessórios de Praia</a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Praia&ct2=Calcas">Calças de Praia</a>
                </div>
                    <!-- Calcados Container -->
                    <div class="DropdownSecao">
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Calcados">Calçados</a>
                    <a id="Divisoria"></a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Sandalias">Sandálias</a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Tenis">Tênis</a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Botas">Botas</a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Sapatilhas">Sapatilhas</a>
                    <a href="./produtos/nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Chinelos">Chinelos</a>
                </div>
            </div>
        </div>
        <div class="HeaderLI">
            <a href="./produtos/nav?page=1&ct0=Masculino">Masculino
                <div class="HoverLI"></div>
            </a>
        </div>
        <div class="HeaderLI">
            <a href="./produtos/nav?page=1&ct0=Infantil">Infantil
                <div class="HoverLI"></div>
            </a>
        </div>
        <div class="HeaderLI">
            <a href="./produtos/nav?page=1&ct0=Beleza">Beleza
                <div class="HoverLI"></div>
            </a>
        </div>
    </div>

    <!-- CART / LOGIN / SIGNUP -->
    <div class="HeaderRightSideContainer">
        <!-- Contact / Signup -->
        <div class="ContactSignupBar">
            <a href="atendimento">Central de Atendimento</a>
            <span></span>
            <?php if (!isset($_SESSION["User"])){ ?>
                <a href="./membro/cadastro">Cadastre-se</a>
            <?php } else { ?>
                <a href="./membro/perfil">Olá, <?php echo $_SESSION["User"]; ?></a>
            <?php } ?>
        </div>
        <!-- Cart / Login -->
        <div class="CartLoginBar">
            <a href="Carrinho.php"><i class="bi bi-basket3"></i></a>
            <?php if (!isset($_SESSION["User"])){ ?>
                <a href="./membro/login">LOGIN</a>
            <?php } else { ?>
                <a href="./membro/pedidos">Meus Pedidos</a>
            <?php } ?>
        </div>
    </div>
</header>