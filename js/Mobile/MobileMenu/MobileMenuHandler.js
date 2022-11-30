// Mobile Left Menu Handler

function OpenMobileMenu(){

    MobileMenuIsOpen = true;
    $(".MobileLeftMenu").css("animation","MobileLeftMenuShow 0.5s");
    setTimeout(() => {
        $(".MobileLeftMenu").css("display","flex");
    }, 500);
}

function CloseMobileMenu(){

    MobileMenuIsOpen = false;
    $(".MobileLeftMenu").css("animation","MobileLeftMenuHide 0.5s");
    setTimeout(() => {
        $(".MobileLeftMenu").css("display","none");
        $(".LIMenu").css("display","none");
        $(".LISubMenu").css("display","none");
        $("#CategoriaReturnButton").css("display","none");
    }, 490);
}

var MobileMenuIsOpen = false;

// Open Left Menu
$(".MobileCategorias").click(() => {

    if (MobileMenuIsOpen){
        CloseMobileMenu();
    } else {
        OpenMobileMenu();
    }
});

// Close Left Menu
$("#MobileMenuClose").click(() => {
    CloseMobileMenu();
});



// Controle Menus e Submenus de Mobile Categorias
var InCategoriaMenu = false;
var InCategoriaSubMenu = false;
var MenusClicados = [];

// Primeiro Menu
$(".CategoriasLI > p").click((e) => {
    $(e.currentTarget).siblings().eq(0).css("animation","MobileLeftMenuShow 0.5s");
    MenusClicados.push($(e.currentTarget).siblings().eq(0));
    InCategoriaMenu = true;
    setTimeout(() => {
        $(e.currentTarget).siblings().eq(0).css("display","flex");
        $("#CategoriaReturnButton").css("display","flex");
    }, 490);

    // So retorna se o submenu estiver fechado, logo volta para o original
    $("#CategoriaReturnButton").click(() => {
        if (!InCategoriaSubMenu){
            $(e.currentTarget).siblings().eq(0).css("animation","MobileLeftMenuHide 0.5s");
            InCategoriaMenu = false;
            setTimeout(() => {
                $(e.currentTarget).siblings().eq(0).css("display","none");
                $("#CategoriaReturnButton").css("display","none");
            }, 490);
        }
    });    
});

// SubMenu
$(".LIMenu > p").click((e) => {
    $(e.currentTarget).siblings().eq(0).css("animation","MobileLeftMenuShow 0.5s");
    MenusClicados.push($(e.currentTarget).siblings().eq(0));
    InCategoriaSubMenu = true;    
    setTimeout(() => {
        $(e.currentTarget).siblings().eq(0).css("display","flex");
    }, 490);

    // So retorna se tiver com submenu aberto
    $("#CategoriaReturnButton").click(() => {
        if (InCategoriaSubMenu){
            $(e.currentTarget).siblings().eq(0).css("animation","MobileLeftMenuHide 0.5s");
            setTimeout(() => {
                $(e.currentTarget).siblings().eq(0).css("display","none");
                InCategoriaSubMenu = false;
            }, 490);
        }
    });
});




