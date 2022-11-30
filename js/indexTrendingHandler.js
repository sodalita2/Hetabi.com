



var TrendingOptionsDiv = document.querySelector(".Trending-Options");

TrendingOptionsDiv.children[0].style.backgroundColor = "whitesmoke";
TrendingOptionsDiv.children[0].style.color = "black";

var IdMarcado = "TrendingBlusas";
TrendingOptionsDiv.addEventListener("click", (event) =>{

    let id = event.target.id;

    BlusaSlide = AcessoriosSlide = SapatosSlide = BelezaSlide = PraiaSlide = 0;

    if (IdMarcado !== id && event.target.nodeName == 'LI'){
        let ActualDiv = document.querySelector(`#${IdMarcado}`);
        ActualDiv.style.backgroundColor = null;
        ActualDiv.style.color = null;
    
    
        let TargetDiv = document.querySelector(`#${id}`);
        TargetDiv.style.backgroundColor = "whitesmoke";
        TargetDiv.style.color = "black";
        IdMarcado = id;
    }
});


var TrendingNextButton = document.querySelector("#Trending-Next");
var TrendingPrevButton = document.querySelector("#Trending-Prev");

var BlusaSlide = 0;
var AcessoriosSlide = 0;
var SapatosSlide = 0;
var BelezaSlide = 0;
var PraiaSlide = 0;

var TrendingDisplayDiv = document.querySelector(".Trending-Display-Container");


// RESET SLIDES
function ResetSlides(){
    var SlidesReset = document.querySelectorAll(".Trending-Slide");
    for (i in SlidesReset){
        console.log(SlidesReset[i]);
        SlidesReset[i].style.display = "none";
    }
}
/*
ResetSlides();
var BlusaSlide1 = document.querySelector("#TrendingBlusas1");
BlusaSlide1.style.display = "flex";
*/


var slide1 = document.querySelector("#TrendingBlusas1");
var slide2 = document.querySelector("#TrendingBlusas2");
slide2.style.display = "none";

TrendingNextButton.addEventListener("click", () =>{

    slide1.style.display = "none";
    slide2.style.display = "flex";

});

TrendingPrevButton.addEventListener("click", () =>{

    slide2.style.display = "none";
    slide1.style.display = "flex";

});
