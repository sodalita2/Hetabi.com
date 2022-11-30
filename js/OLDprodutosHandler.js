


var FilterSelectedDiv = document.querySelector("#Filter-Selected");

var ClassificarDropdownDiv = document.querySelector(".Classificar-Dropdown");

var CheckedBlock = `
    <i class="fa-solid fa-circle-check"></i>
`;



const url = new URLSearchParams(window.location.search);

var RecomendarSpan = document.querySelector("#Recomendar");

if (!url.has('sort1')){
    RecomendarSpan.innerHTML = "Recomendar"+CheckedBlock;
}else{
    for (i in ClassificarDropdownDiv.children){
        ClassificarDropdownDiv.children[i].innerHTML = ClassificarDropdownDiv.children[i].innerText;
    }
    let getID = url.get('sort1');
    let SetSpan = document.querySelector(`#${getID}`);
    SetSpan.innerHTML = SetSpan.innerText+CheckedBlock;
    FilterSelectedDiv.innerHTML = SetSpan.innerText;
}

ClassificarDropdownDiv.addEventListener("click", (event) =>{

    let getId = event.target.id;

    if (url.has('sort1')){
        url.set('sort1',getId);
        location.href = `produtos.php?${url}`;
    }else{
        location.href = location.href.concat(`&sort1=${getId}`);
    }
});