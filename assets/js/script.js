    /* Toggle icon Nav  */
    let menuIcon = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menuIcon.onclick = () => {
        menuIcon.classList.toggle('bx-x');
        navbar.classList.toggle('active');
    };

    /* Scroll Section Active Link  */
    let sections = document.querySelectorAll('section');
    let navLinks = document.querySelectorAll('header nav a');


    window.onscroll = () => {
        sections.forEach(sec =>  {
            let top = window.scrollY;
            let offset = sec.offsetTop - 150;
            let height = sec.offsetHeight;
            let id = sec.getAttribute('id');

            if(top >= offset && top < offset + height) {
                navLinks.forEach(Links => {
                    Links.classList.remove('active');
                    document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
                });
            };
        });

    /* Sticky Navbar Mobile  */
    let header = document.querySelector('header');

    header.classList.toggle('sticky', window.scrollY > 100);

    /* Remove Togggle ico and navbar click   */
    menuIcon.classList.remove('bx-x');
    navbar.classList.remove('active');
};
 
    // scroll reveal 
    ScrollReveal({ 
        reset: false,
        distance: '80px',
        duration: 2000,
        delay: 200,
    });
    ScrollReveal().reveal('.home-content a, .home-content, .heading', { origin: 'top' });
    ScrollReveal().reveal('.home-img ', { origin: 'bottom' });
    ScrollReveal().reveal('.about-img, home-content h1', { origin: 'left' });    
    ScrollReveal().reveal('.home-content p, .about-content h3', { origin: 'right' });    
    ScrollReveal().reveal('.social-media i, .services-container, .about-content p , .portfolio-box, .contact form', { origin: 'bottom' });


    //multiple typed js
   




