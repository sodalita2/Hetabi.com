<DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> HETABI </title>
    <link href='./css/Normalize.css' rel='stylesheet'>
    <link href='./css/Base.less' rel='stylesheet/less' type='text/css'>
    <link href='./css/Header.less' rel='stylesheet/less' type='text/css'>
    <link href='./css/Index.less' rel='stylesheet/less' type='text/css'>
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
        $_SESSION['LastURL'] = "index.php";    

        include_once('./components/DesktopHeader.php');
        include_once('./components/MobileBottomNavbar.php');
        include_once('./components/MobileLeftMenu.php');
    ?>
    
    
    <!-- MAIN CONTENT -->
    <div class="Banner">
        <!-- Progress Bar -->
        <div id="ProgressBar">
            <div id="ProgressNow"></div>
        </div>
        <a href="/produtos/nav" id="Banner1"></a>
        <a href="/produtos/nav" id="Banner2"></a>
    </div>

    <div>

    </div>


</body>
<script src="./js/IndexBannerHandler.js"></script>
<script src="./js/Geral/HeaderHandler.js"></script>
</html>
</DOCTYPE>