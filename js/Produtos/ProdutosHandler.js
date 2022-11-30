

var currentURL = window.location.href;

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

function WishlistRedirect(ProdutoID){

    if (urlParams.has('W')) {
        let BaseURL = currentURL.split("W=")[0];
        setTimeout(() => {
            window.location.href = BaseURL + "W=" + ProdutoID;
        }, 600);
    } else {
        setTimeout(() => {
            window.location.href = currentURL + `&W=${ProdutoID}`;
        }, 600);
    }
}

$(".AddToWishlist").on("click", (e) =>{
    $(e.currentTarget).css("background-color","#40d43d");
});

