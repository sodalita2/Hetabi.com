

var ShareButton = document.querySelector("#Share-Button");

var CloseShareButton = document.querySelector("#Close-Share-Button");

var ShareDropdownDiv = document.querySelector("#Share-Dropdown");



ShareButton.addEventListener("click", () =>{

    ShareDropdownDiv.style.display = "flex";
    ShareDropdownDiv.style.animation = "SlowFadeIn 0.3s";

    CloseShareButton.addEventListener("click", () =>{

        ShareDropdownDiv.style.animation = "SlowFadeOut 0.3s";
        setTimeout(function() {
            ShareDropdownDiv.style.display = "none";
        }, 250);

    });

});



// Quantidade

var DiminuirQtdButton = document.getElementById("-qtd");
var QtdAtual= document.getElementById("qtd");
var AumentarQtdButton = document.getElementById("+qtd");

$(DiminuirQtdButton).click(function() {
    if (parseInt(QtdAtual.innerText) > 1){
        let newvalue = parseInt(QtdAtual.innerText) - 1;
        QtdAtual.innerText = newvalue.toString();
    }
});
$(AumentarQtdButton).click(function() {
    if (parseInt(QtdAtual.innerText) < 10){
        let newvalue = parseInt(QtdAtual.innerText) + 1;
        QtdAtual.innerText = newvalue.toString();
    }
});






// View Image Selector //

var LeftRowDiv = document.querySelector(".Left-Row");

var ImgDisplayBox = document.querySelector("#Img-Display");


var Hovered = $(LeftRowDiv).children().first().css('border','2px solid red');

for (let i=0;i<LeftRowDiv.children.length;i++){
    $(LeftRowDiv.children[i]).hover(function(e) {
        $(Hovered).css('border','0');
        Hovered = $(e.currentTarget);
        $(e.currentTarget).css('border','2px solid red');
        $(ImgDisplayBox).attr('src',e.currentTarget.src);
    });
}




// Tamanho Selector Handler

var TamanhoRowDiv = document.querySelector(".Tamanho-Row");

var TamanhoSelectedIndex = null;

$(TamanhoRowDiv).click(function(e) {
    if (e.target.nodeName == "SPAN" && TamanhoSelectedIndex == null){
        for (i in TamanhoRowDiv.children){
            if (TamanhoRowDiv.children[i].innerText == e.target.innerText){
                TamanhoSelectedIndex = i;
                e.target.style.border = "2px solid white"
            }
        }
    }else if (e.target.nodeName == "SPAN" && TamanhoSelectedIndex !== null){
        TamanhoRowDiv.children[TamanhoSelectedIndex].children[0].style.border = "0";
        for (i in TamanhoRowDiv.children){
            if (TamanhoRowDiv.children[i].innerText == e.target.innerText){
                TamanhoSelectedIndex = i;
            }
        }
        e.target.style.border = "2px solid white";
    }
});