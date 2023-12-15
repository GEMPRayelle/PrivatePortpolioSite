function scrollToElement(elementSelector, instance = 0){
    const elements = document.querySelectorAll(elementSelector);
    if(elements.length > instance){
        elements[instance].scrollIntoView({behavior: 'smooth'});
    }
}

const link1 = document.getElementById("link1");
const link2 = document.getElementById("link2");
const link3 = document.getElementById("link3");

linkStart.addEventListener('click', ()=>{
    scrollToElement('.content');
})
link1.addEventListener('click', ()=>{
    scrollToElement('.features');
})
link2.addEventListener('click', ()=>{
    scrollToElement('.conteudo');
})
link3.addEventListener('click', ()=>{
    scrollToElement('.column');
})