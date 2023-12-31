const sideLink = document.querySelectorAll('.sidebar .side-menu li a:not(.logout)');

sideLink.forEach(item => {
    const li = item.parentElement;
    item.addEventListener('click',()=>{
        sideLink.forEach(i=>{
            i.parentElement.classList.remove('active');
        })
        li.classList.add('active');
    })
});

const menuBar = document.querySelector('.contentbar nav .bx.bx-menu');
const sideBar = document.querySelector('.sidebar');

menuBar.addEventListener('click', () => {
    sideBar.classList.toggle('close');
});

const toggler = document.getElementById('theme-toggle');

toggler.addEventListener('change', function(){
    if(this.checked){
        document.body.classList.add('dark');
    }else{
        document.body.classList.remove('dark');
    }
})