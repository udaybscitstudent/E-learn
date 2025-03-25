let menu = document.querySelector('.menu');
let check = document.querySelector('#check');
let ins = document.querySelector('.btn_ins');
let ins_div = document.querySelector('.ins_div');
let btn_cancel = document.querySelector('.btn_cancel');
let bdy = document.querySelector('body');

let x=0;
menu.addEventListener('click',()=>{
    if(x==0){
    check.classList.remove('remove');
    check.classList.add('nav');
    x=1;
    }
    else{
        check.classList.remove('nav');
        check.classList.add('remove');
        x=0;
    }
})

function myFunction(y){
    if(y.matches){
            check.classList.remove('nav');
            check.classList.remove('remove');
            x=0;
    }
    else{
        
    }
}

var y = window.matchMedia("(min-width:768px)");
myFunction(y);

y.addEventListener("change", function() {
    myFunction(y);
});

ins.addEventListener('click',()=>{
    // bdy.style.overflow='hidden';
    ins_div.style.display='grid';

})

btn_cancel.addEventListener('click',()=>{
    ins_div.style.display='none';
})