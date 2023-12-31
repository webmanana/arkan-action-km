<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Трекер ARKAN</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Трекер ARKAN">
  <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <header>
    <div class="header-wrap flex-container">
      <div class="header-mobile">
        <a href="tel:88005552121" class="call-me">Позвоните нам</a>
        <button type="button" class="menuburger" aria-label="Навигационное меню" aria-expanded="false">
          <span style="background-color:#fff;"></span>
          <span style="background-color:#fff;"></span>
          <span style="background-color:#fff;"></span>
          <span style="background-color:#fff;"></span>
        </button>
      </div>
      
      <div class="header-content">
        <div class="logo-container">
          <a href="/">
            <img class="lazy" data-src="./img/logo.webp" alt="Трекер ARKAN">
          </a>
        </div>
        <nav>
          <ul class="flex-container header-menu">
            <li><a href="#complect">Базовый комплект</a></li>
            <li><a href="#wialon">Wialon</a></li>
            <li><a href="#decisions">Дополнительные функции</a></li>
          </ul>
        </nav>
        <div class="header-phone">
          <a href="tel:88005552121">88005552121</a>
        </div>
      </div>
      
    </div>
  </header>

  <section class="main">
    <div class="main-mobile" style="background-image: url(./img/mobile-back.webp);"></div>
    <video class="lazy main-video" data-src="./img/video.mp4" autoplay loop playsinline muted></video>
    <div class="main-content flex-container">
      <div class="left-main">
        <h1 class="left-main__title">Трекер ARKAN</h1>
        <div class="main-price">
          <span class="main-title__text">за</span>
          <span class="main-title__old-price">7000 ₽</span>
          <span class="main-title__new-price">4900 ₽</span>
        </div>
        <div class="main-desc">
          Всего 18 комплектов по специальной цене!
        </div>
        <div class="main-button">
          <button class="red-button open-popup" data-button-name="Верхний баннер">
            Забронировать
          </button>
        </div>
      </div>
      <div class="right-main">
        <div class="adv-list">
          <ul>
            <li><img class="lazy" data-src="./img/check.webp" alt=""> Онлайн мониторинг с любого устройства и push-уведомления</li>
            <li><img class="lazy" data-src="./img/check.webp" alt=""> Бесплатный монтаж в течение 24 часов</li>
            <li><img class="lazy" data-src="./img/check.webp" alt=""> Снижение затрат на автопарк до 30% уже со второго месяца</li>
            <li><img class="lazy" data-src="./img/check.webp" alt=""> Оборудование совместимо с РНИС</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="about flex-container">
    <div class="section flex-column about-container">
      <h2 class="title">Мы знаем</h2>
      <div class="about-desc">
        с какими проблемами сталкиваются владельцы автопарков и помогаем их решать
      </div>
      <div class="about-accordion">
      <div class="about-accordion__item">
          <div class="accordion__item-title">
            Защищаем от нецелевого использования
            <svg class="accordion__item-icon" role="presentation" focusable="false" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
              <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
              <g class="accordion__item-lines" stroke-width="2px" fill="none">
                <path d="M9 20H31"></path><path d="M20 9V31"></path>
              </g>
            </svg>
          </div>
          <div class="accordion__item-desc">
            Отслеживайте перемещение транспорта онлайн в мобильном приложении и личном кабинете, просматривайте архив событий. В случае отклонения транспорта от маршрута - вам придет push-уведомление на телефон.
          </div>
        </div>
        <div class="about-accordion__item">
          <div class="accordion__item-title">
            Помогаем избежать слива топлива
            <svg class="accordion__item-icon" role="presentation" focusable="false" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
              <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
              <g class="accordion__item-lines" stroke-width="2px" fill="none">
                <path d="M9 20H31"></path><path d="M20 9V31"></path>
              </g>
            </svg>
          </div>
          <div class="accordion__item-desc">
            Системы мониторинга ARKAN позволяют контролировать текущий уровень топлива в баке, а также все заправки и сливы.
          </div>
        </div>
        <div class="about-accordion__item">
          <div class="accordion__item-title">
            Спасем от угона
            <svg class="accordion__item-icon" role="presentation" focusable="false" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
              <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
              <g class="accordion__item-lines" stroke-width="2px" fill="none">
                <path d="M9 20H31"></path><path d="M20 9V31"></path>
              </g>
            </svg>
          </div>
          <div class="accordion__item-desc">
            В зависимости от комплектации наши системы включают в себя спутниковые противоугонные блоки с подключением к реагированию. Федеральный мониторинговый центр в режиме 24/7 отслеживает сигналы тревоги и моментально пресекает попытки угона.
          </div>
        </div>
        <div class="about-accordion__item">
          <div class="accordion__item-title">
            Обезопасим транспорт на расстоянии
            <svg class="accordion__item-icon" role="presentation" focusable="false" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
              <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
              <g class="accordion__item-lines" stroke-width="2px" fill="none">
                <path d="M9 20H31"></path><path d="M20 9V31"></path>
              </g>
            </svg>
          </div>
          <div class="accordion__item-desc">
            Если автомобиль отклонился от маршрута или есть угроза угона - мы удаленно заблокируем двигатель по вашей команде, чтобы предотвратить чрезвычайную ситуацию.
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="complect" class="complect">
    <div class="section container flex-container complect-wrap">
      <div class="complect-info">
        <h2 class="title">Базовый комплект за <span class="cross">7000₽</span> 4900₽</h2>
        <div class="complect-desc">с установкой</div>
        <div class="complect-list flex-container">
          <span>- Контроль местоположения и маршрутов</span>
          <span>- Настройка географических зон</span>
          <span>- Данные о стоянках и простое</span>
          <span>- Контроль моточасов</span>
          <span>- Расчетный расход топлива</span>
          <span>- Контроль стиля вождения</span>
          <span>- Платформа Wialon</span>
          <span>- Совместимость с РНИС</span>
          <span>- Мобильное приложение</span>
        </div>
        <button class="red-button open-popup" data-button-name="Купить со скидкой">
          Купить со скидкой
        </button>
      </div>
      <div class="complect-img">
        <img class="lazy" data-src="./img/complect.webp" alt="Базовый комплект" width="650" height=620>
      </div>
    </div>
  </section>

  <section class="how">
    <div class="section container flex-container how-wrap">
      <h2 class="title">Как подключить?</h2>
      <div class="how-content flex-container">
        <div class="how-item flex-container flex-column just-center">
          <div class="mobile-how">
            <div class="mobile-how__number">1</div>
            <div class="mobile-how__line"></div>
          </div>
          <div class="how-img flex-container just-center">
            <img class="lazy" data-src="./img/settings.webp" alt="">
          </div>
          <div class="how-title center">Решение</div>
          <div class="how-desc center text">Подбираем оптимальные комплекты под ваши задачи по самой выгодной цене.</div>
        </div>
        <svg class="how-arrow" role="img" width="60" stroke="#000000" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 18.7"><path class="st0" d="M4.2 9.4h32.1"></path><path class="st1" d="M31.3 13.4l5-4-5-4"></path></svg>
        <div class="how-item flex-container flex-column">
          <div class="mobile-how mobile-how_2">
            <div class="mobile-how__number">2</div>
            <div class="mobile-how__line"></div>
          </div>
          <div class="how-img flex-container just-center">
            <img class="lazy" data-src="./img/hours.webp" alt="">
          </div>
          <div class="how-title center">Установка</div>
          <div class="how-desc center text">Производим установку бесплатно в нашем Сервисном центре или приезжаем на вашу территорию. Мы стараемся придерживаться принципа - 24 часа от заявки до установки.</div>
        </div>
        <svg class="how-arrow" role="img" width="60" stroke="#000000" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 18.7"><path class="st0" d="M4.2 9.4h32.1"></path><path class="st1" d="M31.3 13.4l5-4-5-4"></path></svg>
        <div class="how-item flex-container flex-column">
          <div class="mobile-how mobile-how_3">
            <div class="mobile-how__number">3</div>
          </div>
          <div class="how-img flex-container just-center">
            <img class="lazy" data-src="./img/eye.webp" alt="">
          </div>
          <div class="how-title center">Контроль</div>
          <div class="how-desc center text">Работать с нашими системами просто и удобно. У вас всегда все под контролем с любого устройства там, где есть интернет.</div>
        </div>
      </div>
    </div>
  </section>

  <section id="wialon" class="gallery">
    <div class="section">
      <div class="gallery-wrap container flex-container">
        <h2 class="title">Мы работаем на платформе Wialon</h2>
        <div class="gallery-content flex-container flex-column">
          <div class="gallery-desc center text">
            А это значит, вы можете управлять всем автопарком в одном окне из любой точки мира. Вам доступна гибкая настройка отчетов и интеграция данных с уже имеющимися у вас сервисами (1C, ERP-системы). Система полностью настроена и адаптирована под ваш бизнес.
          </div>
          
        </div>
      </div>
      
      <div class="slider">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="lazy" data-src="./img/photo-1.webp" alt="Платформе Wialon" width="617" height="600"></div>
            <div class="swiper-slide"><img class="lazy" data-src="./img/photo-2.webp" alt="Платформе Wialon" width="617" height="600"></div>
            <div class="swiper-slide"><img class="lazy" data-src="./img/photo-3.webp" alt="Платформе Wialon" width="617" height="600"></div>
            <div class="swiper-slide"><img class="lazy" data-src="./img/photo-4.webp" alt="Платформе Wialon" width="617" height="600"></div>
            <div class="swiper-slide"><img class="lazy" data-src="./img/photo-5.webp" alt="Платформе Wialon" width="617" height="600"></div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="pagination-container">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>

      <div class="gallery-text container center">
        Получите тестовый доступ на платформу
      </div>
      <div class="arrow-container">
        <svg role="presentation" class="arrow-icon" style="fill:#c9c9c9; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 180"><path d="M54.1 109c-.8 0-1.6-.4-2-1.1-.8-1.1-.5-2.7.6-3.5 1.3-.9 6.8-4 11.6-6.6-15.9-1.3-29.2-8.3-38.5-20.2C8.9 56 8.5 24.1 13.2 3.4c.3-1.3 1.7-2.2 3-1.9 1.3.3 2.2 1.7 1.9 3-4.5 19.6-4.2 49.8 11.6 70 9 11.5 21.5 17.7 37.2 18.4l-1.8-2.3c-1.4-1.7-2.7-3.4-4.1-5.1-.7-.9-1.5-1.9-2.3-2.9-.9-1.1-.7-2.6.4-3.5 1.1-.9 2.6-.7 3.5.4 0 0 0 .1.1.1l6.4 7.9c.5.5.9 1.1 1.4 1.7 1.5 1.8 3.1 3.6 4.4 5.6 0 .1.1.1.1.2.1.3.2.5.3.8v.6c0 .2-.1.4-.2.6-.1.1-.1.3-.2.4-.1.2-.3.4-.5.6-.1.1-.3.2-.5.3-.1 0-.1.1-.2.1-1.2.6-16 8.6-18.1 10-.5.5-1 .6-1.5.6z"></path></svg>
      </div>
      <div class="flex-container container just-center button-container">
        <button class="red-button open-popup" data-button-name="Получите тестовый доступ на платформу">Получить</button>
      </div>
      
    </div>
  </section>
  <section id="decisions" class="decisions">
    <div class="decisions-wrap container flex-container flex-column section">
      <h2 class="title">Эти решения заказывают чаще всего</h2>
      <div class="decisions-content flex-container">
        <div class="decisions-item flex-container">
          <div class="decisions-img">
            <img class="lazy" data-src="./img/new-1.webp" alt="Реле блокировки двигателя от 2 000 ₽" width="240" height="440">
          </div>
          <div class="decisions-info">
            <div class="decisions-title">Сдаете авто в аренду? Необходим контроль за спецтехникой?</div>
            <div class="decisions-desc text">Предотвращайте нецелевое использование транспорта сразу в случае отклонения от маршрута или выхода из геозоны.</div>
            <div class="decisions-price">Реле блокировки двигателя <br>от 2 000 ₽</div>
            <div class="decisions-button">Заказать</div>
          </div>
          <button aria-label="Заказать" class="decisions-url open-popup" data-button-name="Реле блокировки двигателя"></button>
        </div>
        <div class="decisions-item flex-container">
          <div class="decisions-img">
            <img class="lazy" data-src="./img/new-2.webp" alt="Датчик уровня топлива с тарировкой от 11 500 ₽" width="240" height="440">
          </div>
          <div class="decisions-info">
            <div class="decisions-title">Хотите избежать неконтролируемых трат на топливо?</div>
            <div class="decisions-desc text">Получайте информацию обо всех сливах и заправках, оптимизируйте накладные расходы.</div>
            <div class="decisions-price">Датчик уровня топлива с <br>тарировкой от 11 500 ₽</div>
            <div class="decisions-button">Заказать</div>
          </div>
          <button aria-label="Заказать" class="decisions-url open-popup" data-button-name="Датчик уровня топлива"></button>
        </div>
      </div>
      <div class="decisions-content flex-container">
        <div class="decisions-item flex-container">
          <div class="decisions-img">
            <img class="lazy" data-src="./img/new-3.webp" alt="Переносной трекер от 5 000 ₽" width="240" height="440">
          </div>
          <div class="decisions-info">
            <div class="decisions-title">Необходимо переставлять трекер с одного авто на другое?</div>
            <div class="decisions-desc text">Выбирайте устройство, которое не требует установки.</div>
            <div class="decisions-price">Переносной трекер <br>от 5 000 ₽</div>
            <div class="decisions-button">Заказать</div>
          </div>
          <button aria-label="Заказать" class="decisions-url open-popup" data-button-name="Переносной трекер"></button>
        </div>
        <div class="decisions-item flex-container">
          <div class="decisions-img">
            <img class="lazy" data-src="./img/new-4.webp" alt="Видеоконтроль и мониторинг с голосовой связью" width="240" height="440">
          </div>
          <div class="decisions-info">
            <div class="decisions-title">Нужен дополнительный контроль водителей?</div>
            <div class="decisions-desc text">Видеоконтроль и мониторинг с голосовой связью, а также другие индивидуальные решения под ваши задачи.</div>
            <div class="decisions-price"></div>
            <div class="decisions-button">Заказать</div>
          </div>
          <button aria-label="Заказать" class="decisions-url open-popup" data-button-name="Видеоконтроль и мониторинг"></button>
        </div>
      </div>
    </div>
  </section>
  <section class="why">
    <div class="decisions-wrap container flex-container flex-column section">
      <h2 class="title">Почему выбирают нас?</h2>
      <div class="why-container flex-container flex-column">
        <div class="why-item flex-container">
          <div class="why-icon">
            <svg role="presentation" class="checkmark" style="width:55px; height:55px;" fill="#fb3333" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.8 31.8"><path d="M.9 14.5C5.2 19.4 9.8 24 14.1 29c.4.5 1.3.3 1.6-.2 5.1-8.4 10.1-16.8 15-25.4.7-1.2-.5-2.1-1.3-.9C19.3 18 19 18.4 13.9 26.7c.5-.1 1.1-.1 1.6-.2-4.4-4.8-8.9-8.6-13.9-12.8-.4-.4-1.1.3-.7.8z"></path></svg>
          </div>
          <div class="flex-container flex-column">
            <div class="why-title">23 года</div>
            <div class="why-desc text">на рынке систем мониторинга и безопасности</div>
          </div>
        </div>
        <div class="why-item flex-container">
          <div class="why-icon">
            <svg role="presentation" class="checkmark" style="width:55px; height:55px;" fill="#fb3333" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.8 31.8"><path d="M.9 14.5C5.2 19.4 9.8 24 14.1 29c.4.5 1.3.3 1.6-.2 5.1-8.4 10.1-16.8 15-25.4.7-1.2-.5-2.1-1.3-.9C19.3 18 19 18.4 13.9 26.7c.5-.1 1.1-.1 1.6-.2-4.4-4.8-8.9-8.6-13.9-12.8-.4-.4-1.1.3-.7.8z"></path></svg>
          </div>
          <div class="flex-container flex-column">
            <div class="why-title">75 000 клиентов</div>
            <div class="why-desc text">уже доверили нам своё имущество</div>
          </div>
        </div>
        <div class="why-item flex-container">
          <div class="why-icon">
            <svg role="presentation" class="checkmark" style="width:55px; height:55px;" fill="#fb3333" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.8 31.8"><path d="M.9 14.5C5.2 19.4 9.8 24 14.1 29c.4.5 1.3.3 1.6-.2 5.1-8.4 10.1-16.8 15-25.4.7-1.2-.5-2.1-1.3-.9C19.3 18 19 18.4 13.9 26.7c.5-.1 1.1-.1 1.6-.2-4.4-4.8-8.9-8.6-13.9-12.8-.4-.4-1.1.3-.7.8z"></path></svg>
          </div>
          <div class="flex-container flex-column">
            <div class="why-title">24/7</div>
            <div class="why-desc text">круглосуточная поддержка наших специалистов</div>
          </div>
        </div>
        <div class="why-item flex-container">
          <div class="why-icon">
            <svg role="presentation" class="checkmark" style="width:55px; height:55px;" fill="#fb3333" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.8 31.8"><path d="M.9 14.5C5.2 19.4 9.8 24 14.1 29c.4.5 1.3.3 1.6-.2 5.1-8.4 10.1-16.8 15-25.4.7-1.2-.5-2.1-1.3-.9C19.3 18 19 18.4 13.9 26.7c.5-.1 1.1-.1 1.6-.2-4.4-4.8-8.9-8.6-13.9-12.8-.4-.4-1.1.3-.7.8z"></path></svg>
          </div>
          <div class="flex-container flex-column">
            <div class="why-title">от 350 ₽</div>
            <div class="why-desc text">самая низкая абонентская плата - чем больше автопарк, тем больше скидка</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="faq">
    <div class="faq-wrap container flex-container flex-column section">
      <h2 class="title">FAQ</h2>
      <div class="faq-container">
        <div class="about-accordion">
          <div class="about-accordion__item faq-item">
            <div class="accordion__item-title">
              Как быстро происходит установка?
              <svg class="accordion__item-icon" role="presentation" focusable="false" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
                <g class="accordion__item-lines" stroke-width="2px" fill="none">
                  <path d="M9 20H31"></path><path d="M20 9V31"></path>
                </g>
              </svg>
            </div>
            <div class="accordion__item-desc">
              Мы стараемся осуществлять установку на следующий день после заявки. Обычно установка системы на одно транспортное средство занимает не более часа.
            </div>
          </div>
          <div class="about-accordion__item faq-item">
            <div class="accordion__item-title">
              Какая экономическая эффективность от использования системы?
              <svg class="accordion__item-icon" role="presentation" focusable="false" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
                <g class="accordion__item-lines" stroke-width="2px" fill="none">
                  <path d="M9 20H31"></path><path d="M20 9V31"></path>
                </g>
              </svg>
            </div>
            <div class="accordion__item-desc">
              <ul>
                <li>Снижение пробега за счет исключения нецелевого использования транспорта.</li>
                <li>Сокращение расходов на топливо за счет оптимизации норм и предотвращения сливов.</li>
                <li>Повышение эффективности работы транспорта (за одинаковый промежуток времени выполняется большее количество задач).</li>
                <li>Эффективное управление персоналом.</li>
                <li>Снижение вероятности угона и финансовых потерь, связанных с возвратом транспортного средства.</li>
              </ul>
            </div>
          </div>
          <div class="about-accordion__item faq-item">
            <div class="accordion__item-title">
              Что делать, если у меня на автопарке уже установлена другая система?
              <svg class="accordion__item-icon" role="presentation" focusable="false" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <circle cx="20" cy="20" r="20" stroke-width="0"></circle>
                <g class="accordion__item-lines" stroke-width="2px" fill="none">
                  <path d="M9 20H31"></path><path d="M20 9V31"></path>
                </g>
              </svg>
            </div>
            <div class="accordion__item-desc">
              Мы дооборудуем ваш автопарк, если он уже работает на другом оборудовании, или произведем перенастройку оборудования, интегрировав новые подключения с уже существующими в единую систему. При необходимости мы также можем демонтировать уже установленное оборудование.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="question">
    <div class="faq-wrap container flex-container flex-column section">
      <h3 class="question-title">Сомневаетесь?</h3>
      <div class="question-content">
        <div class="gallery-text container center ">
          Закажите бесплатный тест-драйв
        </div>
        <div class="arrow-container">
          <svg role="presentation" class="arrow-icon" style="fill:#c9c9c9; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 180"><path d="M54.1 109c-.8 0-1.6-.4-2-1.1-.8-1.1-.5-2.7.6-3.5 1.3-.9 6.8-4 11.6-6.6-15.9-1.3-29.2-8.3-38.5-20.2C8.9 56 8.5 24.1 13.2 3.4c.3-1.3 1.7-2.2 3-1.9 1.3.3 2.2 1.7 1.9 3-4.5 19.6-4.2 49.8 11.6 70 9 11.5 21.5 17.7 37.2 18.4l-1.8-2.3c-1.4-1.7-2.7-3.4-4.1-5.1-.7-.9-1.5-1.9-2.3-2.9-.9-1.1-.7-2.6.4-3.5 1.1-.9 2.6-.7 3.5.4 0 0 0 .1.1.1l6.4 7.9c.5.5.9 1.1 1.4 1.7 1.5 1.8 3.1 3.6 4.4 5.6 0 .1.1.1.1.2.1.3.2.5.3.8v.6c0 .2-.1.4-.2.6-.1.1-.1.3-.2.4-.1.2-.3.4-.5.6-.1.1-.3.2-.5.3-.1 0-.1.1-.2.1-1.2.6-16 8.6-18.1 10-.5.5-1 .6-1.5.6z"></path></svg>
        </div>
        <div class="flex-container container just-center button-container ">
          <button class="red-button open-popup" data-button-name="Закажите бесплатный тест-драйв">Заказать</button>
        </div>
      </div>
    </div>
  </section>
  <section id="contact">
    <div class="container flex-container flex-column section">
      <div class="contact-wrap">
        <h2 class="title">Контакты</h2>
        <span class="contact-text">192007, Санкт-Петербург,<br>Набережная Обводного <br>канала, д.62, к.2</span>
      </div>
    </div>
  </section>
  <section class="maps">
    <div class="maps-container">
      <div style="position:relative;overflow:hidden;">
        <a href="https://yandex.ru/maps/org/arkan/129659151502/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Arkan</a><a href="https://yandex.ru/maps/2/saint-petersburg/category/monitoring_of_motor_vehicles/184107791/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Мониторинг автотранспорта в Санкт‑Петербурге</a>
        <a href="https://yandex.ru/maps/2/saint-petersburg/category/security_and_alarm_systems/184105350/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Системы безопасности и охраны в Санкт‑Петербурге</a>
        <iframe class="lazy" title="Карта" data-src="https://yandex.ru/map-widget/v1/?ll=30.339736%2C59.914922&mode=search&oid=129659151502&ol=biz&z=17" width="100%" height="600" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe>
      </div>
    </div>
  </section>
  <div class="popup-overlay">
    <div class="popup">
      <h4 class="popup-title">Оставьте свои данные и мы свяжемся с вами!</h4>
      
      <!-- Добавленная форма -->
      <form id="feedback-form" class="flex-container flex-column" method="post">
        <input type="text" class="feedback-input" id="name" name="name" placeholder="Ваше имя" required>
        <input type="text" class="feedback-input" id="phone" name="phone" placeholder="+7 (999) 999-99-99" required>

        <!-- Скрытое поле с информацией о кнопке -->
        <input type="hidden" id="source" name="source" value="">
        <button type="submit" class="red-button">Отправить</button>
      </form>
      <div class="popup-content">

      </div>
      <!-- Иконка крестика -->
      <div class="close-popup">&#10006;</div>
    </div>
  </div>
  <script src="./assets/js/lazyload.min.js"></script>
  <script src="./assets/js/jquery.min.js"></script>
  <script src="./assets/js/swiper-bundle.min.js"></script>
  <script src="./assets/js/jquery.maskedinput.min.js"></script>
  <script src="./assets/js/scripts.js"></script>
  <script>
    //отложенная загрузка стилей
    var link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = './assets/css/swiper-bundle.min.css';

    // Добавляем элемент в конец HEAD секции
    document.head.appendChild(link);
    var lazyLoadInstance = new LazyLoad({
      // Your custom settings go here
    });
  </script>
  <script>
    var __cs = __cs || [];
    __cs.push(["setCsAccount", "5AgDqhImkTL4_YFNw9HTV4UImFykDMwI"]);
  </script>
  <script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js"></script>
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(35100805, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true
    });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/35100805" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
</body>
</html>
