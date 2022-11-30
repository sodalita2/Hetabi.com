// Banner Progress and slideshow

var IsSlideshowAutomatic = true;

// Nome ID do Banner (comeca no 1)
var FirstBanner = 1;
var LastBanner = 2;

var BannerAtual = FirstBanner;

// Interval for Automatic Slideshow
setInterval(() => {
    if (IsSlideshowAutomatic){
        if (BannerAtual == LastBanner){
            $(`#Banner${FirstBanner}`).css("left","100%");
            $(`#Banner${FirstBanner}`).css("display","flex");
            $(`#Banner${BannerAtual}`).css("animation","BannerSlideOut 0.4s");
            $(`#Banner${FirstBanner}`).css("animation","BannerSlideIn 0.4s");
            $("#ProgressNow").css("animation","ProgressBarReset 0.8s");
            $("#ProgressNow").css("left","0%");
            setTimeout(() => {
                $(`#Banner${BannerAtual}`).css("left","100%");
                $(`#Banner${BannerAtual}`).css("display","none");
                $(`#Banner${FirstBanner}`).css("left","0%");
                BannerAtual = FirstBanner;
            }, 370);
        }else{
            //codigo abaixo redundante, ja foi declarado no css
            //posical inicial left 100%
            $(`#Banner${BannerAtual+1}`).css("left","100%");
            $(`#Banner${BannerAtual+1}`).css("display","flex");
            $(`#Banner${BannerAtual}`).css("animation","BannerSlideOut 0.4s");
            $(`#Banner${BannerAtual+1}`).css("animation","BannerSlideIn 0.4s");
            $("#ProgressNow").css("animation","ProgressBarNext 0.8s");
            $("#ProgressNow").css("left","50%");
            setTimeout(() => {
                $(`#Banner${BannerAtual}`).css("left","100%");
                $(`#Banner${BannerAtual}`).css("display","none");
                $(`#Banner${BannerAtual+1}`).css("left","0%");
                BannerAtual += 1;
            }, 370);
        }
    }
}, 5000);    










// Controla Slideshow Slider Manual
// Troca IsSlideshowAutomatic para false e interrompe interval acima


// Drag Controle
let isDragging = false;
let startPos = 0;
let currentTranslate = 0;
let prevTranslate = 0;
let animationID;
let currentIndex = 0;

// Touch & Drag & Position Functions
function getPositionX(e) {
    return e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
}

function setPositionByIndex() {
    currentTranslate = currentIndex * -window.innerWidth;
    prevTranslate = currentTranslate;
    setSliderPosition();
}

function setSliderPosition() {
    this.style.transform = `translateX(${currentTranslate}px)`;
}

function animation() {
    setSliderPosition();
    if (isDragging){
        requestAnimationFrame(animation);
    }
}

function touchStart(index) {
    return function(e) {
        currentIndex = index;
        startPos = getPositionX(e);
        isDragging = true;
        animationID = requestAnimationFrame(animation);
    }
}

function touchMove(e) {
    if (isDragging) {
        const currentPosition  = getPositionX(e);
        currentTranslate = prevTranslate + currentPosition - startPos;
    }
}

function touchEnd() {
    cancelAnimationFrame(animationID);
    isDragging = false;
    const movedBy = currentTranslate - prevTranslate;

    if (movedBy < -100 && currentIndex < BannerSlides.length - 1) {
        currentIndex += 1;
    }

    if (movedBy > 100 && currentIndex > 0) {
        currentIndex -= 1;
    }

    setPositionByIndex();

}



// Controlador Principal
const BannerContainer = $(".Banner");
const BannerSlides = Array.from($(".Banner a"));


BannerSlides.forEach((slide,index) => {
    
    // stop drag automatico padrao do browser
    slide.addEventListener("dragstart", (e) => {
        e.preventDefault();
    });

    // touch events
    slide.addEventListener("touchstart", touchStart(index));
    slide.addEventListener("touchend", touchEnd);
    slide.addEventListener("touchmove", touchMove);
    
    // stop right click abrir context menu (o de salvar imagem, inspecionar elemento)
    slide.oncontextmenu = (e) => {
        e.preventDefault();
        e.stopPropagation();
        return false;
    };

});



