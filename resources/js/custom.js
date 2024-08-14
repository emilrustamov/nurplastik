document.addEventListener("DOMContentLoaded", function () {


  // Numbers
  var time = 2,
    cc = 1;
  $(window).scroll(function () {
    $('.number').each(function () {
      var
        cPos = $(this).offset().top,
        topWindow = $(window).scrollTop();
      if (cPos < topWindow + 200) {
        if (cc < 2) {
          $('div').each(function () {
            var
              i = 1,
              num = $(this).data('num'),
              step = 1000 * time / num,
              that = $(this),
              int = setInterval(function () {
                if (i <= num) {
                  that.html(i);
                } else {
                  cc = cc + 2;
                  clearInterval(int);
                }
                i++;
              }, step);
          });
        }
      }
    });
  });

  // Slick gallery
  $(".center").slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay: true,
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    mobileFirst: true,
    cssEase: 'ease',
  });

  // Slick products
  $(".products").slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    mobileFirst: true,
    cssEase: 'ease',
    responsive: [
      {
        breakpoint: 1020,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      },
      {
        breakpoint: 760,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 400,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
  });


});
