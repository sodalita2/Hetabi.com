// Navbar Dropdown Automatic Ads
// Feminino
var FemininoAd = 0;

setInterval(() => {
    if (FemininoAd == 0){
        $("#FemininoAd").attr("src","./resources/Index/Pequeno8.PNG");
        FemininoAd = 1;
    }else if (FemininoAd == 1){
        $("#FemininoAd").attr("src","./resources/Index/Pequeno9.PNG");
        FemininoAd = 0;
    }
}, 1550);




// TENTANDO FAZER ANIMATION FADE OUT DO HOVER NO HEADERLI

/*$(".HeaderLI").hover((e) => {
    $(e.currentTarget).children(".DropdownNavbar").css("display","flex");
    $(e.currentTarget).children(".DropdownNavbar").css("flex-direction","row");
    $(e.currentTarget).children(".DropdownNavbar").css("align-items","center");
    $(e.currentTarget).children(".DropdownNavbar").css("justify-content","center");
}).mouseleave((e) => {
    $(e.currentTarget).children(".DropdownNavbar").css("display","none");
});*/

/*$(".HeaderLI").focus((e) => {
    $(e.currentTarget).children(".DropdownNavbar").css("animation","NavbarDropdownHide 0.5s");
});*/
