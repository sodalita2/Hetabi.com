

var GoToTopButton = document.querySelector(".GoToTopButton");



GoToTopButton.addEventListener("click", () =>{

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: 'smooth'
    });

});

