<DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> HETABI </title>
    <link href='../css/Normalize.css' rel='stylesheet'>
    <link href='../css/Base.less' rel='stylesheet/less' type='text/css'>
    <link href='../css/Header.less' rel='stylesheet/less' type='text/css'>
    <link href='../css/Produtos.less' rel='stylesheet/less' type='text/css'>
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
        $LastPageRedirect = $_SESSION['LastURL'];
        $LastURL = "/produto/nav?";
        if (isset($_GET['page'])){
            $LastURL = $LastURL."page=".$_GET['page'];
        }
        if (isset($_GET['ct0'])){
            $LastURL = $LastURL."&ct0=".$_GET['ct0'];
        }
        if (isset($_GET['ct1'])){
            $LastURL = $LastURL."&ct1=".$_GET['ct1'];
        }
        if (isset($_GET['ct2'])){
            $LastURL = $LastURL."&ct2=".$_GET['ct2'];
        }
        $_SESSION['LastURL'] = $LastURL;
    ?>
    

    <header>
        <!-- Logo -->
        <a href="/" class="HeaderLogo">
            <img src="../resources/Header/hetabi_logo.png">
        </a>

        <!-- Nav Bar -->
        <div class="HeaderNavbar">
            <div class="HeaderLI">
                <a href="nav?page=1&ct0=Feminino">Feminino
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
                        <a href="nav?page=1&ct0=Feminino&ct1=Roupas">Roupas</a>
                        <a id="Divisoria"></a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Roupas&ct2=Blusas">Blusas</a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Roupas&ct2=Camisetas">Camisetas</a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Roupas&ct2=Regatas">Regatas</a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Roupas&ct2=Camisolas">Camisolas</a>
                        <a href="nav?page=1&ct0=Feminino" style="margin-top:auto;font-size:14px;color:#8b4d16d7;">Ver Todos os Produtos</a>
                    </div>
                    <!-- Praia Container -->
                    <div class="DropdownSecao">
                        <a href="nav?page=1&ct0=Feminino&ct1=Praia">Praia</a>
                        <a id="Divisoria"></a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Praia&ct2=Bikinis">Bikinis</a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Praia&ct2=Quimonos">Quimonos</a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Praia&ct2=Tankinis">Tankinis</a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Praia&ct2=Acessorios">Acessórios de Praia</a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Praia&ct2=Calcas">Calças de Praia</a>
                    </div>
                        <!-- Calcados Container -->
                        <div class="DropdownSecao">
                        <a href="nav?page=1&ct0=Feminino&ct1=Calcados">Calçados</a>
                        <a id="Divisoria"></a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Sandalias">Sandálias</a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Tenis">Tênis</a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Botas">Botas</a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Sapatilhas">Sapatilhas</a>
                        <a href="nav?page=1&ct0=Feminino&ct1=Calcados&ct2=Chinelos">Chinelos</a>
                    </div>
                </div>
            </div>
            <div class="HeaderLI">
                <a href="nav?page=1&ct0=Masculino">Masculino
                    <div class="HoverLI"></div>
                </a>
            </div>
            <div class="HeaderLI">
                <a href="nav?page=1&ct0=Infantil">Infantil
                    <div class="HoverLI"></div>
                </a>
            </div>
            <div class="HeaderLI">
                <a href="nav?page=1&ct0=Beleza">Beleza
                    <div class="HoverLI"></div>
                </a>
            </div>
        </div>

        <!-- CART / LOGIN / SIGNUP -->
        <div class="HeaderRightSideContainer">
            <!-- Contact / Signup -->
            <div class="ContactSignupBar">
                <a href="../atendimento">Central de Atendimento</a>
                <span></span>
                <?php if (!isset($_SESSION["User"])){ ?>
                    <a href="../membro/cadastro">Cadastre-se</a>
                <?php } else { ?>
                    <a href="../membro/perfil">Olá, <?php echo $_SESSION["User"]; ?></a>
                <?php } ?>
            </div>
            <!-- Cart / Login -->
            <div class="CartLoginBar">
                <a href="Carrinho.php"><i class="bi bi-basket3"></i></a>
                <?php if (!isset($_SESSION["User"])){ ?>
                    <a href="../membro/login">LOGIN</a>
                <?php } else { ?>
                    <a href="../membro/pedidos">Meus Pedidos</a>
                <?php } ?>
            </div>
        </div>
    </header>
    <!-- Mobile Bottom Nav Menu (controlado por Header.less) -->
    <div class="MobileNavbar">
        <a class="MobileCategorias" style="color:#fa8e2f">
            <i class="bi bi-list"></i>
            <span>Categorias</span>
        </a>
        <a href="Trending.php" class="MobileEmAlta">
            <i class="bi bi-fire"></i>
            <span>Em Alta</span>
        </a>
        <a href="/" class="MobileHome">
            <i class="bi bi-house"></i>
            <span>Home</span>
        </a>
        <a href="../membro/perfil" class="MobileProfile">
            <i class="bi bi-person"></i>
            <span>Perfil</span>
        </a>
        <a href="../membro/arquivo" class="MobileVisto">
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
                <a href="../membro/cadastro"> Cadastre-se para receber cupons e benefícios <span style="margin-left:5px;font-weight:900;">member only!</span></a>
                <a href="../membro/login">LOGIN <i class="bi bi-arrow-right-circle-fill"></i></a>
            <?php } else{ ?>
                <a id="LogadoTitle" href="../membro/perfil">Olá, <?php echo $_SESSION["User"]; ?> !</a>
            <?php } ?>
        </div>

        <!-- Mobile Categorias -->
        <div class="CategoriasContainer">
            <div class="CategoriasLI"><p>Feminino</p>
                <div class="LIMenu">
                    <p>Roupas
                        <div class="LISubMenu">
                            <a href="nav"><p style="font-size:30px;font-weight:700;text-decoration: underline;text-decoration-color: #fa8e2f;letter-spacing: 1.5px;">Ver todos</p></a>
                            <a href="nav"><p>Blusas</p></a>
                            <a href="nav"><p>Camisetas</p></a>
                            <a href="nav"><p>Regatas</p></a>
                            <a href="nav"><p>Camisolas</p></a>
                            <a href="nav"><p style="color:#fa8e2f;font-family:'Nunito',sans-serif;font-weight:900;text-decoration: underline;text-decoration-color: #fa8e2f;">20% OFF</p></a>
                            <div style="width:90%;height:500px;align-self: center;">
                                <img style="width:100%;height:100%" src="../resources/MobileMenu/Feminino-Roupas-Banner.PNG">
                            </div>
                        </div>
                    </p>
                    <p>Praia
                        <div class="LISubMenu">
                            <a href="nav"><p>Bikinis</p></a>
                            <a href="nav"><p>Quimonos</p></a>
                            <a href="nav"><p>Tankinis</p></a>
                            <a href="nav"><p>Acessórios de Praia</p></a>
                            <a href="nav"><p>Calças de Praia</p></a>
                        </div>
                    </p>
                    <p>Calçados
                        <div class="LISubMenu">
                            <a href="nav"><p>Sandálias</p></a>
                            <a href="nav"><p>Tênis</p></a>
                            <a href="nav"><p>Botas</p></a>
                            <a href="nav"><p>Sapatilhas</p></a>
                            <a href="nav"><p>Chinelos</p></a>
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

    <?php
        include_once('../db_conn.php');


        if(isset($_GET['page']) && $_GET['page'] > 0){
            $page = $_GET['page'];
            $offset = ($page-1)*6;
        }
        elseif(isset($GET['page']) && $_GET['page'] == 0){
            $page = 1;  
            $offset = 0;     
        }
        else{
            $page = 1;
            $offset = 0;
        }


        // CONTAGEM DE PRODUTOS PARA PAGINACAO
        // Query dos Produtos

        if (isset($_GET['ct0']) && isset($_GET['ct1']) && isset($_GET['ct2'])){
            $ct0 = $_GET['ct0'];
            $ct1 = $_GET['ct1'];
            $ct2 = $_GET['ct2'];

            $pagination_redirect = "&ct0=".$ct0."&ct1=".$ct1."&ct2=".$ct2;

            $contar_produtos_query = $conn->prepare("SELECT COUNT(*) as total FROM hetabi.produtos WHERE ct0=? AND ct1=? AND ct2=?;");
            $contar_produtos_query->bind_param("sss",$ct0,$ct1,$ct2);
            $contar_produtos_query->execute();
            $Count_Result = $contar_produtos_query->get_result();

            $produtos_query = $conn->prepare("SELECT * FROM hetabi.produtos WHERE ct0=? AND ct1=? AND ct2=?;");
            $produtos_query->bind_param("sss",$ct0,$ct1,$ct2);
            $produtos_query->execute();
            $Produtos_Result = $produtos_query->get_result();




        }elseif (isset($_GET['ct0']) && isset($_GET['ct1'])){
            $ct0 = $_GET['ct0'];
            $ct1 = $_GET['ct1'];

            $pagination_redirect = "&ct0=".$ct0."&ct1=".$ct1;

            $contar_produtos_query = $conn->prepare("SELECT COUNT(*) as total FROM hetabi.produtos WHERE ct0=? AND ct1=?;");
            $contar_produtos_query->bind_param("ss",$ct0,$ct1);
            $contar_produtos_query->execute();

            $produtos_query = $conn->prepare("SELECT * FROM hetabi.produtos WHERE ct0=? AND ct1=?;");
            $produtos_query->bind_param("ss",$ct0,$ct1);
            $produtos_query->execute();




        }elseif(isset($_GET['ct0'])){
            $ct0 = $_GET['ct0'];

            $pagination_redirect = "&ct0=".$ct0;

            $contar_produtos_query = $conn->prepare("SELECT COUNT(*) as total FROM hetabi.produtos WHERE ct0=?;");
            $contar_produtos_query->bind_param("s",$ct0);
            $contar_produtos_query->execute();

            $produtos_query = $conn->prepare("SELECT * FROM hetabi.produtos WHERE ct0=?;");
            $produtos_query->bind_param("s",$ct0);
            $produtos_query->execute();




        }else{
            echo "<script>window.location.replace('$LastPageRedirect')</script>";
        }
    ?>

    <!-- MAIN CONTENT -->
    
    <!-- Top bar Nav + Searchbar -->
    <div class="Topbar">
        <div class="NavHistory">
            <?php 
                $ct0 = $_GET['ct0'];
                $ct1 = isset($_GET['ct1']) ? $_GET['ct1'] : "";
                $ct2 = isset($_GET['ct2']) ? $_GET['ct2'] : "";
            ?>
            <a href="/">Home</a>/<a href="nav?page=1&ct0=<?php echo $_GET['ct0']; ?>"><?php echo $ct0; ?></a><?php echo (isset($_GET['ct1']) ? "/<a href=nav?page=1&ct0=$ct0&ct1=$ct1>$ct1</a>" : "") ?><?php echo (isset($_GET['ct2']) ? "/<a href=nav?page=1&ct0=$ct0&ct1=$ct1&ct2=$ct2>$ct2</a>" : ""); ?>
        </div>
    </div>

    <!-- Filter Bar e Produtos Container -->
    <div class="ContainerGeral">
        <!-- Filter Bar -->
        <div class="FilterBar">

        </div>
        <!-- Produtos Container -->
        <div class="Produtos">
            <?php
                while($Resultado = $Produtos_Result->fetch_assoc()){
            ?>
                    <div class="ProdutoBox">
                        <!-- Add To Wishlist -->
                        <a onclick="javascript:WishlistRedirect(<?php echo $Resultado['id'] ?>)" class="AddToWishlist">
                            <i class="bi bi-bag-plus"></i>
                        </a>
                        <a href="View.php?id=<?php echo $Resultado['id'] ?>" class="ProdutoBoxInside">
                            <!-- Produto Imagem -->
                            <div class="ProdutoImg">
                                <?php echo "<img src=../resources/products_img/$Resultado[img_path].jpg>" ?>
                            </div>
                            <!-- Produto Nome -->
                            <div class="ProdutoNome">
                                <?php echo $Resultado['nome'] ?>
                            </div> 
                            <!-- Produto Preco -->
                            <div class="ProdutoPreco">
                                <?php echo "R$".str_replace(".",",",$Resultado['preco']) ?>
                            </div>
                        </a>
                    </div>
            <?php 
                }
            ?>
        </div>
    </div>



</body>
<script src="../js/Mobile/MobileMenuNavbar/MobileMenuNavbarHandler.js"></script>
<script src="../js/Produtos/ProdutosHandler.js"></script>
<script src="../js/Geral/HeaderHandler.js"></script>
</html>
</DOCTYPE>