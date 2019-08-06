const navSlide = () => {
    const burger = document.getElementById('burger');
    const headerNav = document.querySelector('.menu-menu-1-container');
    const navItems = document.querySelectorAll('.nav__list>li');

    // toggle nav
    burger.addEventListener('click', () => {
        headerNav.classList.toggle('nav-active');
        navItems.forEach((item, i) => {
            if (item.style.animation) {
                item.style.animation = '';
            } else {
                item.style.animation = `navLinkFade .5s ease forwards ${i / 7 + .1}s`;
            }
        });
        burger.classList.toggle('toggle');
    });
}

navSlide();