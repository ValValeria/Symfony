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

otherSetting();
          
function otherSetting(){
    const hideEl = document.querySelector('#tags_cloud');

    if(hideEl){
        hideEl.classList.add('none');

        document.querySelector('#btn').onclick = ()=>{
          hideEl.classList.toggle('none');
          hideEl.classList.toggle('animation');     
        }
    }

    window.onload = ()=>{
        const loadingElem = document.querySelector('#loading');
        loadingElem.classList.add('none');
    }
}





