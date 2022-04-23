const btn=document.querySelector('.mdi-menu');
const mobileSideBar=document.querySelector('.mobile-nav');
btn.addEventListener('click', function(){
    btn.classList.toggle('is-actif');
    mobileSideBar.classList.toggle('is-actif');
    document.getElementsByTagName("header")[0].classList.toggle('is-actif');
});
