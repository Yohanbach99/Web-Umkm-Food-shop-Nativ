let menu =document.querySelector('#menu-icon');
let navlist = document.querySelector('navlist');
menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('open')
};
const sr =ScollReveal ({
    distance: '65px',
    duration: 2600,
    delay:450,
    reset:true
});

sr.reaveal('.hero-text',{delay:200, origin:'top'});
sr.reaveal('.hero-img',{delay:450, origin:'top'});
sr.reaveal('.icons',{delay:500, origin:'left'});