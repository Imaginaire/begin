export default {
  init() {
    // JavaScript to be fired on all pages
    $('.menu-toggle').click(function() {
      $('.nav-primary').toggleClass('nav-active');
      $('.menu-toggle').toggleClass('toggle-open');
    });

    // Carousel

    $('.carousel').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });

    $('.flex-carousel').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });

    $('.logo-carousel').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
