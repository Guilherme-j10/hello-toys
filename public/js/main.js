function styled_header(){

    let header = document.getElementById('header_js');

    setInterval(() => {
        if(window.pageYOffset > 229){
            header.style.display = 'flex';
            header.classList.add('fixed_styled_on_header');
        }

        if(window.pageYOffset < 229){
            header.style.display = 'none';
            header.classList.remove('fixed_styled_on_header');
        }
    }, 10)
}

styled_header();