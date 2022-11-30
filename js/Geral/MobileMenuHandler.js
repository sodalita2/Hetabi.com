


$(".Bars-Menu").click(function() {
    $(".Mobile-Nav-Container").css("animation","MobileNavShow 0.3s");
    setTimeout(function() {
        $(".Mobile-Nav-Container").css("display","flex");
    }, 280);
});
$(".Mobile-Nav-Close").click(function() {
    $(".Mobile-Nav-Container").css("animation","MobileNavHide 0.3s");
    setTimeout(function() {
        $(".Mobile-Nav-Container").css("display","none");
    }, 280);
});









// Mobile Nav Primeira Categoria Selecionado Handler

function ResetaPrimeiraCategoria(){
    for (let i=0;i<$(".Segunda-Categoria-List").children().length;i++){
        $(".Segunda-Categoria-List").children().eq(i).css('display','none');
    }
}


// seleciona Primeiro por padrao
$(".Primeira-Categoria-Bar").children().eq(0).children().eq(0).css('border-bottom','solid 2px black');
$(".Segunda-Categoria-List").children().eq(0).css('display','flex');


$(".Primeira-Categoria-Bar").on("click", "div" ,function() {
    for (let i=0;i<$(".Primeira-Categoria-Bar").children().length;i++){
        $(".Primeira-Categoria-Bar").children().eq(i).children().eq(0).css('border-bottom','0');
    }
    $(this).children().eq(0).css('border-bottom','solid 2px black');
    ResetaPrimeiraCategoria();
    $(".Segunda-Categoria-List").children().eq($(this).index()).css('display','flex');
});



$(".List-Container").on("click", "li",function() {
    let indexTerceiraCategoria = $(this).index();
    $(this).parent().children().css('display','none');
    $(this).parent().children('div').eq(indexTerceiraCategoria).css('display','flex');
});

$(".Back-Btn").click(function() {
    $(this).parent().css('display','none');
    $(this).parent().parent().children('li').css('display','flex'); 
});




