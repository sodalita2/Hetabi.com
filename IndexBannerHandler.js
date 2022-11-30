// Banner Progress and slideshow

// Nome ID do Banner (comeca no 1)
var FirstBanner = 1;
var LastBanner = 2;

var BannerAtual = FirstBanner;

setInterval(() => {
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
}, 5000);


















