require('./bootstrap');


/* nav mobile intento fallido */
addEventListener('DOMContentLoaded', () =>{
    const menu_mobile = document.querySelector('menu_mobile')
    if(menu_mobile){
        menu_mobile.addEventListener('click', () => {
            const menu_items = document.querySelector('.menu_items')
            menu_items.classList.toggle('show')
        })
    }
})