export default (elem) => {
  const body = document.body;
  const toggleOpen = document.querySelector('.site-header__toggle');
  const toggleClose = document.querySelector('.site-navigation__toggle');
  const mobileNav = document.querySelector('.site-navigation__menu');

  const closeNav = () => {
    if (body.classList.contains('nav-open')) {
      body.classList.remove('nav-open');
    }
  }

  toggleOpen.addEventListener('click', () => {
    if (!body.classList.contains('nav-open')) {
      body.classList.add('nav-open');
    }
  });

  toggleClose.addEventListener('click', () => {
    closeNav()
  });

  mobileNav.addEventListener('click', (e) => {
    if (e.target.closest('.menu-item')) {
      closeNav()
    }
  });

  // window.onscroll = function() {
  //   if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
  //     elem.classList.add('site-header--sticky')
  //   } else {
  //     elem.classList.remove('site-header--sticky')
  //   }
  // };
}