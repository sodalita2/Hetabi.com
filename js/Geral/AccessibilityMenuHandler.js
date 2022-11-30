

var AccessibilityDecreaseFont = document.querySelector("#ACdecrease");
var AccessibilityFontNow = document.querySelector("#ACfontsize");
var AccessibilityIncreaseFont = document.querySelector("#ACincrease");

var AcessibilidadeButton = document.querySelector('.MenuAcessibilidade');
var AcessibilidadeDropdown = document.querySelector('.AcessibilidadeDropdown');



/* Declaration of all elements with font-size set */
const headerFontList = [
    '.Nav-Container > li',
    '.Nav-Container > li > .li-container > .Category-Title > a',
    '.Nav-Container > li > .li-container > .Category-Title > .Category-li > a',
    '.Options-Nav-Container > .Carrinho > a > i',
    '.Options-Nav-Container > .Profile > a > i',
    '.Options-Nav-Container > .Suporte > a > i',
    '.Profile-Dropdown'
]
const indexFontList = [
    '.Frete-Banner > a',
    '.Frete-Banner > a > span:nth-child(2)',
    '.Frete-Banner > a > span:nth-child(4)',
    '.Frete-Banner > a > span:nth-child(5)',
    '.Trending-Title',
    '.Trending-Options > li',
    '#Trending-Prev,#Trending-Next',
    '.TrendingBox-Title',
    '.TrendingBox-Price'
]

var url = location.href;
// @Param =>  increase: add 1px / decrease: remove 1px
function ChangeAllFonts(direction){

    var filename = url.split('/').pop().split('.')[0];
    if (filename == "index"){
        if (direction == "increase"){
            for (i in indexFontList){
                let newSize = parseInt($(`${indexFontList[i]}`).css("fontSize"))+1;
                $(`${indexFontList[i]}`).css("fontSize", `${newSize}`);
            }
            for (j in headerFontList){
                let newSize = parseInt($(`${headerFontList[j]}`).css("fontSize"))+1;
                $(`${headerFontList[j]}`).css("fontSize", `${newSize}`);
            }
        }else if (direction == "decrease"){
            for (i in indexFontList){
                let newSize = parseInt($(`${indexFontList[i]}`).css("fontSize"))-1;
                $(`${indexFontList[i]}`).css("fontSize", `${newSize}`);
            }
            for (j in headerFontList){
                let newSize = parseInt($(`${headerFontList[j]}`).css("fontSize"))-1;
                $(`${headerFontList[j]}`).css("fontSize", `${newSize}`);
            }
        }
    }

    
}


AccessibilityFontNow.value = "26";

AccessibilityDecreaseFont.addEventListener("click", () =>{

    if (parseInt(AccessibilityFontNow.value) > 20){
        AccessibilityFontNow.value = (parseInt(AccessibilityFontNow.value)-1).toString();
        ChangeAllFonts("decrease");
    }

});


AccessibilityIncreaseFont.addEventListener("click", () =>{

    if (parseInt(AccessibilityFontNow.value) < 30){
        AccessibilityFontNow.value = (parseInt(AccessibilityFontNow.value)+1).toString();
        ChangeAllFonts("increase");
    }

});



/* Open and Close Acessibilidade Dropdown */

var isOpen = false;
$(AcessibilidadeButton).click(function() {
    if (isOpen == false){
        $(AcessibilidadeDropdown).css("display","flex");
        $(AcessibilidadeDropdown).css("animation","SlowFadeIn 0.3s");
        isOpen = true;
    }else if (isOpen == true){
        $(AcessibilidadeDropdown).css("animation","SlowFadeOut 0.3s");
        setTimeout(function() {
            $(AcessibilidadeDropdown).css("display","none");
        }, 250);
        isOpen = false;
    }
});


