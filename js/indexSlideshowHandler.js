

var SlideshowPrevButton = document.querySelector("#Slideshow-Prev");
var SlideshowNextButton = document.querySelector("#Slideshow-Next");


var SlideshowContainer = document.querySelector(".Slideshow-Image");

var ImgAtual = 0;
//== Limit = Total de imagens - 1;
var LimitImg = 1;

SlideshowNextButton.addEventListener("click", () =>{

    if (ImgAtual == LimitImg){
        SlideshowContainer.children[ImgAtual].style.display = 'none';
        SlideshowContainer.children[0].style.display = 'block';
        ImgAtual = 0;
    }else{
        SlideshowContainer.children[ImgAtual].style.display = 'none';
        SlideshowContainer.children[ImgAtual+1].style.display = 'block';
        ImgAtual += 1;
    }
    

});

SlideshowPrevButton.addEventListener("click", () =>{

    if (ImgAtual == 0){
        SlideshowContainer.children[ImgAtual].style.display = 'none';
        SlideshowContainer.children[LimitImg].style.display = 'block';
        ImgAtual = LimitImg;
    }else{
        SlideshowContainer.children[ImgAtual].style.display = 'none';
        SlideshowContainer.children[ImgAtual-1].style.display = 'block';
        ImgAtual -= 1;
    }

});


// AUTOMATIC BANNER SLIDESHOW

setInterval(function() {

    if (ImgAtual == LimitImg){
        SlideshowContainer.children[ImgAtual].animation = '1s GoingLeft';
        setTimeout(function(){
            SlideshowContainer.children[ImgAtual].style.display = 'none';
        }, 950);
        SlideshowContainer.children[0].animation = '1s ComingRight';
        setTimeout(function(){
            SlideshowContainer.children[0].style.display = 'block';
            ImgAtual = 0;
        }, 950);
    }else{
        SlideshowContainer.children[ImgAtual].animation = '1s GoingLeft';
        setTimeout(function(){
            SlideshowContainer.children[ImgAtual].style.display = 'none';
        }, 950);
        SlideshowContainer.children[ImgAtual+1].animation = '1s ComingRight';
        setTimeout(function(){
            SlideshowContainer.children[ImgAtual+1].style.display = 'block';
            ImgAtual += 1;
        }, 950);  
    }
}, 5000);



if ($(window).width() < 413){
    $("#img1").attr('src','./resources/home-banner/3.jpg');
    $("#img2").attr('src','./resources/home-banner/4.jpg');
}