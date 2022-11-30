<DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> HETABI </title>
    <link href='../css/Normalize.css' rel='stylesheet'>
    <link href='../css/Base.less' rel='stylesheet/less' type='text/css'>
    <link href='../css/Header.less' rel='stylesheet/less' type='text/css'>
    <link href='../css/Desktop/LoginDesktop.less' rel='stylesheet/less' type='text/css'>
    <link href='../css/Mobile/LoginMobile.less' rel='stylesheet/less' type='text/css'>
    <!-- <link href='./css/headerMEDIA.less' rel='stylesheet/less' type='text/css' media='screen and (max-width:413px)'> -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- Dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/less" ></script>
</head>
<body> 
    <?php 
        session_start();
    ?>

    <header>
        <!-- Logo -->
        <a href="/" class="HeaderLogo">
            <img src="../resources/Header/hetabi_logo.png">
        </a>

        <!-- Nav Bar -->
        <div class="HeaderNavbar">
            <div class="HeaderLI">
                <a href="../produtos/nav?page=1&ct0=Feminino">Feminino
                    <div class="HoverLI"></div>
                </a>
                <div class="DropdownNavbar">
                    <!-- Advertisement Image -->
                    <div class="AdImage">
                        <img id="FemininoAd" src="../resources/Index/Pequeno8.PNG">
                    </div>
                    <span style="height:98%;width:2px;background-color:#fa8e2f3b;margin-left:15px;margin-right:15px;"></span>
                    <!-- Roupas Container -->
                    <div class="DropdownSecao">
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Roupas">Roupas</a>
                        <a id="Divisoria"></a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Roupas&ct2=Blusas">Blusas</a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Roupas&ct2=Camisetas">Camisetas</a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Roupas&ct2=Regatas">Regatas</a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Roupas&ct2=Camisolas">Camisolas</a>
                        <a href="../produtos/nav?page=1&ct0=Feminino" style="margin-top:auto;font-size:14px;color:#8b4d16d7;">Ver Todos os Produtos</a>
                    </div>
                    <!-- Praia Container -->
                    <div class="DropdownSecao">
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Praia">Praia</a>
                        <a id="Divisoria"></a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Praia&ct2=Bikinis">Bikinis</a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Praia&ct2=Quimonos">Quimonos</a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Praia&ct2=Tankinis">Tankinis</a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Praia&ct2=Acessorios">Acessórios de Praia</a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Praia&ct2=Calcas">Calças de Praia</a>
                    </div>
                     <!-- Calcados Container -->
                     <div class="DropdownSecao">
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Calcados">Calçados</a>
                        <a id="Divisoria"></a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Sandalias">Sandálias</a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Tenis">Tênis</a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Botas">Botas</a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Sapatilhas">Sapatilhas</a>
                        <a href="../produtos/nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Chinelos">Chinelos</a>
                    </div>
                </div>
            </div>
            <div class="HeaderLI">
                <a href="../produtos/nav?page=1&ct0=Masculino">Masculino
                    <div class="HoverLI"></div>
                </a>
            </div>
            <div class="HeaderLI">
                <a href="../produtos/nav?page=1&ct0=Infantil">Infantil
                    <div class="HoverLI"></div>
                </a>
            </div>
            <div class="HeaderLI">
                <a href="../produtos/nav?page=1&ct0=Beleza">Beleza
                    <div class="HoverLI"></div>
                </a>
            </div>
        </div>

        <!-- CART / LOGIN / SIGNUP -->
        <div class="HeaderRightSideContainer">
            <!-- Contact / Signup -->
            <div class="ContactSignupBar">
                <a href="Atendimento.php">Central de Atendimento</a>
                <span></span>
                <?php if (!isset($_SESSION["User"])){ ?>
                    <a href="cadastro">Cadastre-se</a>
                <?php } else { ?>
                    <a href="Perfil.php">Olá, <?php echo $_SESSION["User"]; ?></a>
                <?php } ?>
            </div>
            <!-- Cart / Login -->
            <div class="CartLoginBar">
                <a href="Carrinho.php"><i class="bi bi-basket3"></i></a>
                <?php if (!isset($_SESSION["User"])){ ?>
                    <a href="login">LOGIN</a>
                <?php } else { ?>
                    <a href="MeusPedidos.php">Meus Pedidos</a>
                <?php } ?>
            </div>
        </div>
    </header>
    <!-- Mobile Bottom Nav Menu (controlado por Header.less) -->
    <div class="MobileNavbar">
        <a class="MobileCategorias">
            <i class="bi bi-list"></i>
            <span>Categorias</span>
        </a>
        <a href="Trending.php" class="MobileEmAlta">
            <i class="bi bi-fire"></i>
            <span>Em Alta</span>
        </a>
        <a href="index.php" class="MobileHome"  style="color:#fa8e2f">
            <i class="bi bi-house"></i>
            <span>Home</span>
        </a>
        <a href="Perfil.php" class="MobileProfile">
            <i class="bi bi-person"></i>
            <span>Perfil</span>
        </a>
        <a href="Arquivo.php" class="MobileVisto">
            <i class="bi bi-archive"></i>
            <span>Visto Recentemente</span>
        </a>
    </div>
    <!-- Mobile Left Menu Categorias -->
    <div class="MobileLeftMenu">
        <!-- Absolute positioned Close Button -->
        <div class="CloseButtonContainer">
            <i id="MobileMenuClose" class="bi bi-x-lg"></i>
        </div>
        <!-- Login Bar -->
        <div class="MobileLoginContainer">
            <?php if (!isset($_SESSION["User"])){ ?>
                <a href="Cadastro.php"> Cadastre-se para receber cupons e benefícios <span style="margin-left:5px;font-weight:900;">member only!</span></a>
                <a href="Login.php">LOGIN <i class="bi bi-arrow-right-circle-fill"></i></a>
            <?php } else{ ?>
                <a id="LogadoTitle" href="Perfil.php">Olá, <?php echo $_SESSION["User"]; ?> !</a>
            <?php } ?>
        </div>

        <!-- Mobile Categorias -->
        <div class="CategoriasContainer">
            <div class="CategoriasLI"><p>Feminino</p>
                <div class="LIMenu">
                    <p>Roupas
                        <div class="LISubMenu">
                            <a href="../produtos/nav"><p style="font-size:30px;font-weight:700;text-decoration: underline;text-decoration-color: #fa8e2f;letter-spacing: 1.5px;">Ver todos</p></a>
                            <a href="../produtos/nav"><p>Blusas</p></a>
                            <a href="../produtos/nav"><p>Camisetas</p></a>
                            <a href="../produtos/nav"><p>Regatas</p></a>
                            <a href="../produtos/nav"><p>Camisolas</p></a>
                            <a href="../produtos/nav"><p style="color:#FDCDA2;font-family:'Nunito',sans-serif;font-weight:900;text-decoration: underline;text-decoration-color: #fa8e2f;">20% OFF</p></a>
                            <div style="width:90%;height:500px;align-self: center;">
                                <img style="width:100%;height:100%" src="./resources/MobileMenu/Feminino-Roupas-Banner.PNG">
                            </div>
                        </div>
                    </p>
                    <p>Praia
                        <div class="LISubMenu">
                            <a href="../produtos/nav"><p>Bikinis</p></a>
                            <a href="../produtos/nav"><p>Quimonos</p></a>
                            <a href="../produtos/nav"><p>Tankinis</p></a>
                            <a href="../produtos/nav"><p>Acessórios de Praia</p></a>
                            <a href="../produtos/nav"><p>Calças de Praia</p></a>
                        </div>
                    </p>
                    <p>Calçados
                        <div class="LISubMenu">
                            <a href="../produtos/nav"><p>Sandálias</p></a>
                            <a href="../produtos/nav"><p>Tênis</p></a>
                            <a href="../produtos/nav"><p>Botas</p></a>
                            <a href="../produtos/nav"><p>Sapatilhas</p></a>
                            <a href="../produtos/nav"><p>Chinelos</p></a>
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
    </div>

    <!-- MAIN CONTENT -->
    <!-- Outer Container -->
    <div class="MainContainer">
        <!-- Login Container -->
        <div class="LoginContainer">
            <!-- Form Box -->
            <form class="FormBox" action="login" method="POST">
                <span> Login </span>
                <input type="text" placeholder="Email" name="email">
                <input type="text" placeholder="Senha" name="senha">
                <a href="SenhaReset" id="EsqueciSenha"> Esqueci minha senha </a>
                <button type="submit" id="EntrarBtn"> Entrar </button>
                <!-- Opcoes Login -->
                <div id="GoogleAppleContainer">
                    <!-- Google -->
                    <div id="Google">
                        <i class="bi bi-google"></i>
                        <span> Entre com Google </span>
                    </div>
                    <!-- Apple -->
                    <div id="Apple">
                        <i class="bi bi-apple"></i>
                        <span> Entre com Apple </span>
                    </div>
                </div>
                <!-- Cadastre-se -->
                <a id="Cadastre" href="../membro/cadastro"> Não possui conta? Cadastre-se </a>
            </form>
            <!-- Divisoria -->
            <span id="Divisoria"></span>
            <!-- Advertisement -->
            <div class="LoginAdvertisement">
                <img src="../resources/LoginCadastro/Feminino-Roupas-Banner.PNG">
            </div>
        </div>
    </div>

</body>
<script src="../js/Geral/HeaderHandler.js"></script>
</html>
</DOCTYPE>