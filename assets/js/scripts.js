$(document).ready(function () {
  $(function () {
    $('.accordion__item-title').on('click', function () {
      $(this).next().slideToggle(200);
      $(this).toggleClass('open', 200);
    });
  });
  .
 // Открытие popup
  $('.menuburger').click(function () {
    $(this).toggle('.header-content');
  });

  $('.open-popup').click(function () {
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

  // Отправка формы
  $('#feedback-form').submit(function (event) {
    event.preventDefault();

    // Добавляем анимацию загрузки (можете использовать свой способ)
    $('.popup-content').html('<p>Sending...</p>');

    // Отправка данных формы на сервер
    $.ajax({
      type: 'POST',
      url: 'path/to/sendmail.php', // Укажите правильный путь к вашему sendmail.php
      data: $('#feedback-form').serialize(),
      success: function (response) {
        if (response === 'success') {
          // Успешно отправлено
          $('.popup-content').html('<p>Thank you! Form submitted.</p>');
          setTimeout(closePopup, 2000); // Закрыть через 2 секунды (вы можете настроить это значение)
        } else {
          // Ошибка отправки
          $('.popup-content').html('<p>Error! Please try again later.</p>');
        }
      },
      error: function () {
        // Ошибка отправки
        $('.popup-content').html('<p>Error! Please try again later.</p>');
      }
    });
  });
});