$(document).ready(function () {
  //slider
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    centeredSlides: false,
    spaceBetween: 30,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 3,
        spaceBetween: 30,
        centeredSlides: true,
      },
    },
  });

  //accordion
  $(function () {
    $('.accordion__item-title').on('click', function () {
      $(this).next().slideToggle(200);
      $(this).toggleClass('open', 200);
    });
  });
  
  $('.menuburger').click(function () {
    $(this).toggleClass('active');
    $(".header-content").toggleClass('active');
  });

  // Открытие popup
  $('.open-popup').click(function () {
    var buttonValue = $(this).data('button-name'); // Получаем значение атрибута data-button-name
    $('#source').val(buttonValue); // Устанавливаем значение в скрытое поле

    $('.popup-overlay').fadeIn();
    $('.popup').addClass('show');
  });

  // Закрытие popup
  function closePopup() {
    $('.popup-overlay').fadeOut();
    $('.popup').removeClass('show');
  }

  // Закрытие popup при клике на крестик
  $('.close-popup').click(closePopup);

  // Закрытие popup при клике на overlay
  $('.popup-overlay').click(function (event) {
    if ($(event.target).hasClass('popup-overlay')) {
      closePopup();
    }
  });

  // Инициализация маски телефона
  $('#phone').mask('+7 (999) 999-99-99');

  function setButtonClicked(buttonId) {
    $('#buttonClicked').val(buttonId);
  }
  // Отправка формы
  $('#feedback-form').submit(function (event) {
    event.preventDefault();

    $('#feedback-form').hide();
    $('.popup-content').show();

    // Добавляем анимацию загрузки
    $('.popup-content').html('<p>Отправка...</p>');

    // Отправка данных формы на сервер
    $.ajax({
      type: 'POST',
      url: './sendmail.php',
      data: $('#feedback-form').serialize(),
      dataType: 'json',
      success: function (response) {
        if (response.success) {
          // Успешно отправлено
          $('.popup-content').html('Спасибо! Данные успешно отправлены.');
        } else {
          // Ошибка отправки
          var errorMessage = response ? response.message : 'Неизвестная ошибка';
          $('.popup-content').html('Ошибка! ' + errorMessage);
        }
      },
      error: function (xhr, status, error) {
        // Ошибка AJAX
        $('.popup-content').html('Ошибка AJAX! Пожалуйста, повторите попытку позже.');
      }
    });
  });
});