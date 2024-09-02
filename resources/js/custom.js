// Topup

let mybutton = document.getElementById("myBtn");

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}



//lazyload
const lazyImages = document.querySelectorAll('img.lazy');

const imageObserver = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const img = entry.target;
      img.src = img.dataset.src;
      img.classList.remove('lazy');
      observer.unobserve(img);
    }
  });
});

lazyImages.forEach(image => {
  imageObserver.observe(image);
});



// window.onscroll = function () { moveArrows() };


// //arrows
// function moveArrows() {
//   // Получаем текущую позицию прокрутки
//   var scrollPosition = window.scrollY || document.documentElement.scrollTop;

//   // Получаем все элементы с классом arrow-container
//   var arrows = document.querySelectorAll('.arrow-l');

//   arrows.forEach(function (arrow) {
//     var arrowPosition = arrow.getBoundingClientRect().top;

//     // Вычисляем, насколько близко стрелка к верхней границе окна
//     var distanceFromTop = arrowPosition - window.innerHeight / 2;

//     // Ограничиваем значение top от 0 до 70px, основываясь на прокрутке
//     var newTop = Math.min(Math.max(0, 170 - Math.abs(distanceFromTop) / 10), 170);

//     // Применяем новое значение top к псевдоэлементу через изменение свойства стиля родительского элемента
//     arrow.style.setProperty('--arrow-top', newTop + 'px');
//   });
// }


//preloader
window.addEventListener('load', function () {
  // Устаwindow.addEventListener('load', function() {
  // Устанавливаем задержку в 3 секунды
  setTimeout(function () {
    // Плавное исчезновение прелоадера
    document.querySelector('.preloader-wrapper').style.opacity = '0';

    // Удаляем прелоадер после завершения анимации (1 секунда)
    setTimeout(function () {
      document.querySelector('.preloader-wrapper').style.display = 'none';
    }, 1000); // Время должно соответствовать transition в CSS
  }, 300);
});


// Numbers
var time = 2,
  cc = 1;
$(window).scroll(function () {
  $('.number').each(function () {
    var
      cPos = $(this).offset().top,
      topWindow = $(window).scrollTop();
    if (cPos < topWindow + 600) {
      if (cc < 2) {
        $('div.number').each(function () {
          var
            i = 1,
            num = $(this).data('num'),
            step = 1000 * time / num,
            that = $(this),
            int = setInterval(function () {
              if (i <= num) {
                // Обновляем только текстовый контент перед и после <span>
                var spanContent = that.find('span').html();
                that.contents().filter(function () {
                  return this.nodeType === 3; // Узел текста
                }).first().replaceWith(i);
                that.find('span').html(spanContent);
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

//fadein

let observer = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    } else {
      entry.target.classList.remove('visible'); // Удаляем класс для повторной анимации при скролле вверх
    }
  });
}, {
  threshold: 0.1
});

document.querySelectorAll('.vertical-line .row > div').forEach(function (div) {
  observer.observe(div);
});



//cursor

// const cursor = document.querySelector('.custom-cursor');

// document.addEventListener('mousemove', function (e) {
//   cursor.style.transform = `translate3d(${e.clientX - 5}px, ${e.clientY - 5}px, 0)`;
// });

// document.querySelectorAll('a, button').forEach(function (element) {
//   element.addEventListener('mouseenter', function () {
//     cursor.classList.add('active');
//   });

//   element.addEventListener('mouseleave', function () {
//     cursor.classList.remove('active');
//   });
// });


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


// Slick products
$(".products").slick({
  dots: false,
  arrows: false,
  autoplay:true,
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

