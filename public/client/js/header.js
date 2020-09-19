document.addEventListener('DOMContentLoaded',()=>{
    const path = window.location.pathname;
    
    const links = Array.from(document.querySelectorAll('nav .nav-link'))

    links.forEach(el=>{
        const elPath = el.getAttribute('href');
        
        if(elPath==path){
            el.classList.add('active')
        } else {
            el.classList.remove('active')
        }
    })

    const menuIcon = document.querySelector('.navbar-toggler');

    menuIcon.onclick = ()=>{
        document.querySelector('#navbarSupportedContent').classList.toggle('collapse')
    }
})